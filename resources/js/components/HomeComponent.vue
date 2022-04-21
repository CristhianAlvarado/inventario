<template>
    <div class="card">
        <div class="card-header bg-info color-light">
            <h3 class="my-0 text-center">Listado de Empresas</h3>
        </div>
        <div class="card-body">
            <form action="">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(row, index) in empresas" :key="index">
                                <td>
                                    <el-radio v-model="seleccionado" :label="row.id">{{row.razon_social}}</el-radio>                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center mb-2">
                        <button type="button" class="btn waves-effect waves-light btn-xs btn-info" @click.prevent="ingresar()">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</template>

<script>
    export default {
        props:['empresas'],
        data() {
            return {
                resource: 'dashboard',
                enterprise: [],
                value1: true,
                seleccionado: ''
            }
        },
        /* created(){
            this.mostrar();
        }, */
        mounted() {
            console.log(this.empresas)
        },
        methods: {
            /* mostrar(){
                this.$http.get(`/empresas`)
                    .then(response => {
                        this.enterprise = response.data
                    })
            }, */
            ingresar(){
                if (this.seleccionado != '') {
                    console.log(this.seleccionado)
                    this.$http.post(`/${this.resource}/${this.seleccionado}`)
                        .then(response => {
                            if (response.data.success){
                                this.$message.success(response.data.message)
                                location.assign("/dashboard");
                            }else{
                                this.$message.error(response.data.message)
                            }
                        })
                }else{
                    this.$message.error('Debe seleccionar una empresa')
                        
                }
                
            }
        }
    }
</script>
