<template>
    <el-dialog :title="titulo" :visible="showDialog" @close="close" @open="open">
        <div class="row">
            <div class="col-12" >
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tipo de Documento</th>
                                <th>Número</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody v-if="series.length > 0">
                            <tr v-for="(row, index) in series" :key="index">
                                <td>{{ row.tipocdp.descripcion }}</td>
                                <td>{{ row.numero }}</td>
                                <td><button class="btn btn-xs btn-danger" @click.prevent="deleteSerie(row.id)"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                        <tfoot v-if="addRow">
                            <td>
                                <div class="form-group" :class="{'has-danger': errors.tipocdp_id}">
                                    <el-select v-model="form.tipocdp_id" filterable>
                                        <el-option v-for="option in cdps" :key="option.id" :value="option.id" :label="option.descripcion"></el-option>
                                    </el-select><br>
                                    <small class="form-control-feedback" v-if="errors.tipocdp_id" v-text="errors.tipocdp_id[0]"></small>
                                </div>
                            </td>
                            <td>
                                <div class="form-group col-12 col-md-10" :class="{'has-danger': errors.numero}">
                                    <el-input v-model="form.numero" placeholder="Número" :maxlength="4" show-word-limit></el-input>
                                    <small class="form-control-feedback" v-if="errors.numero" v-text="errors.numero[0]"></small>
                                </div>                                
                            </td>
                            <td>
                                <button type="button" class="btn btn-xs btn-info" @click.prevent="submit()"><i class="fa fa-check"></i></button>
                                <button class="btn btn-xs btn-danger" @click.prevent="deleteRow()"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-12 text-center pt-2" v-if="showNuevo">
                <el-button type="primary" :loading="loading" icon="el-icon-plus" @click="newSerie()">Nuevo</el-button>
            </div>
        </div>
    </el-dialog>
</template>
<script>
import moment from 'moment'
    export default {
        props: ['showDialog', 'almacen_id'],
        data() {
            return {
                resource: 'serie',
                seleccionado: '',
                titulo: 'Series',
                series: [],
                cdps: [],
                // valuemes: null,
                addRow: false,
                showNuevo: true,
                loading: false,
                form: {},
                errors: {}
            }
        },
        created(){
            this.$http.get(`/${this.resource}/cdps`)
                .then(response => {
                   this.cdps = response.data
                })
        },
        methods: {
            initForm(){
                this.errors = {}
                this.form = {
                    almacen_id: this.almacen_id,
                    tipocdp_id: null,
                    numero: null 
                }
            },
            deleteRow(){
                this.addRow = false
                this.showNuevo = true
                this.initForm()
            },
            cdpstables(){
                this.$http.get(`/${this.resource}/cdps`)
                    .then(response => {
                        this.cdps = response.data
                    }) 
            },
            submit(){
                // console.log(moment(this.valuemes).format('DD/MM/YYYY'))
                this.loading = true
                this.$http.post(`/${this.resource}`, this.form)
                    .then(response => {
                        if(response.data.success){
                            this.$message.success(response.data.message)
                            this.addRow = false
                            this.showNuevo = true
                            this.open()
                        }else{
                            console.log(response.data.serie)
                            this.$message.error(response.data.message)
                        }
                    })
                    .catch(error => {
                        this.$message.error('Debe ingresar los datos requeridos')
                        this.errors = error.response.data.errors
                    })
                    .then(() => {
                        this.loading = false
                    })
            },
            deleteSerie(id){
                this.$message.success('Eliminando la serie: ' + id)
            },
            newSerie(){
                this.addRow = true
                this.showNuevo = false
            },
            open(){
                this.initForm()
                this.$http.get(`/${this.resource}/${this.almacen_id}`)
                    .then(response => {
                        this.series = response.data[0].series
                    })
            },
            close(){
                this.$emit('update:showDialog', false)
                this.addRow = false
                this.showNuevo = true
            }
        }
    }
</script>