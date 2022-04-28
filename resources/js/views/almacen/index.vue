<template>
    <div>
        <div class="page-header pr-0">
            <h2 ><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> </a></h2>
            <ol class="breadcrumbs">
                <li class="active"><span>Establecimientos</span> </li>
            </ol>
            <div class="right-wrapper pull-right">
                <button type="button" class="btn btn-custom btn-info btn-sm mt-2 mr-2" @click="createAlmacen()"><i class="fas fa-plus-circle mr-2"></i>Nuevo</button>
            </div>
        </div>

        <div class="card mt-0 mt-md-4 ">
            <div class="card-header bg-info">
                <h3>Listado de Almacenes</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Código</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(row, index) in almacenes" :key="index">
                                <td>{{ index+1 }}</td>
                                <td>{{ row.descripcion }} </td>
                                <td>{{ row.codigo_fiscal }} </td>
                                <td>
                                    <button class="btn btn-xs btn-info" @click.prevent="createAlmacen(row.id)"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-xs btn-danger" @click.prevent="deleteAlmacen(row.id)"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn btn-xs btn-warning" @click.prevent="showSeries(row.id)">Series</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <almacen-create :showDialog.sync="showDialog" :almacen_id="almacen_id" @reloadAlmacen="reloadAlmacen"></almacen-create>
            <almacen-series :showDialog.sync="showDialogSerie" :almacen_id="almacen_id"></almacen-series>

        </div>
    </div>
</template>

<script>

    import AlmacenFormulario from './form.vue'
    import AlmacenSeries from './series.vue'

    export default {
        components: {AlmacenFormulario, AlmacenSeries},
        data() {
            return {
                showDialog: false,
                resource: 'almacen',
                almacen_id: null,
                showDialogSerie: false,
                almacenes: [],
                seleccionado: ''
            }
        },
        created(){
            this.getDatos();
        },
        mounted() {

        },
        methods: {
            getDatos(){
                this.$http.get(`/${this.resource}/lista`)
                    .then(response => {
                        this.almacenes = response.data;
                    })
            },
            createAlmacen(almacen_id = null){
                this.almacen_id = almacen_id
                this.showDialog = true
            },
            reloadAlmacen(){
                this.getDatos()
            },
            deleteAlmacen(id){
                this.$confirm('¿Desea eliminar el registro?',{
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                    type: 'warning'
                }).then(() => {
                    this.$http.delete(`/${this.resource}/${id}/delete`)
                        .then(response => {
                            if(response.data.success){
                                this.$message.success(response.data.message)
                                this.getDatos()
                            }else{
                                this.$message.error(response.data.message);
                            }
                        })
                        .catch(error => {
                            console.log(error)
                        })
                }).catch(error => {
                    console.log(error)
                })
            },
            showSeries(id){
                this.almacen_id = id
                this.showDialogSerie = true
            }
        }
    }
</script>