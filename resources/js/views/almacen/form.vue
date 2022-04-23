<template>
        <el-dialog :title="titulo" :visible="showDialog" @close="close" @open="open">
        <form autocomplete="off" @submit.prevent="submit">
            <div class="row">
                <div class="form-group col-12 col-md-8 col-lg-9 " :class="{'has-danger': errors.descripcion}">
                    <label class="control-label ">Descripcion</label>
                    <el-input v-model="form.descripcion"></el-input>
                    <small class="form-control-feedback" v-if="errors.descripcion" v-text="'*' + errors.descripcion[0]"></small>
                </div>

                <div class="form-group col-12 col-md-4 col-lg-3" :class="{'has-danger': errors.codigo_fiscal}">
                    <label class="control-label">Código Domicilio Fiscal</label>
                    <el-input v-model="form.codigo_fiscal" :maxlength="4"></el-input>
                    <small class="form-control-feedback" v-if="errors.codigo_fiscal" v-text="errors.codigo_fiscal[0]"></small>
                </div>

                
                <div class="form-group col-12 col-sm-6 col-lg-3 " :class="{'has-danger': errors.pais_id}">
                    <label class="">País</label><br>
                    <el-select :class="{'w-100': showDialog}" v-model="form.pais_id" width="100%" filterable >
                        <el-option v-for="option in paises" :key="option.id" :value="option.id" :label="option.descripcion"></el-option>
                    </el-select>
                    <small class="form-control-feedback" v-if="errors.pais_id" v-text="errors.pais_id[0]"></small>
                </div>            
                        
                <div class="form-group col-12 col-sm-6 col-lg-3 " :class="{'has-danger': errors.departamento_id}">
                    <label>Departamento</label><br>
                    <el-select :class="{'w-100': showDialog}" v-model="form.departamento_id" filterable @change="filtroProvincia">
                        <el-option v-for="option in all_departamentos" :key="option.id" :value="option.id" :label="option.descripcion"></el-option>
                    </el-select>
                    <small class="form-control-feedback" v-if="errors.departamento_id" v-text="errors.departamento_id[0]"></small>
                </div>          
            
                <div class="form-group col-12 col-sm-6 col-lg-3 " :class="{'has-danger': errors.provincia_id}">
                    <label>Provincia</label><br>
                    <el-select :class="{'w-100': showDialog}" v-model="form.provincia_id" filterable @change="filtroDistrito">
                        <el-option v-for="option in provincias" :key="option.id" :value="option.id" :label="option.descripcion"></el-option>
                    </el-select>
                    <small class="form-control-feedback" v-if="errors.provincia_id" v-text="errors.provincia_id[0]"></small>
                </div>
                        
                <div class="form-group col-12 col-sm-6 col-lg-3 " :class="{'has-danger': errors.distrito_id}">
                    <label>Distrito</label><br>
                    <el-select :class="{'w-100': showDialog}" v-model="form.distrito_id" filterable >
                        <el-option v-for="option in distritos" :key="option.id" :value="option.id" :label="option.descripcion"></el-option>
                    </el-select>
                    <small class="form-control-feedback" v-if="errors.distrito_id" v-text="errors.distrito_id[0]"></small>
                </div>
                
                <div class="form-group col-12 col-md-6">
                    <label class="control-label">Dirección Fiscal</label>
                    <el-input v-model="form.direccion_fiscal"></el-input>
                </div>

                <div class="form-group col-12 col-md-6">
                    <label class="control-label">Dirección Comercial</label>
                    <el-input v-model="form.direccion"></el-input>
                </div>

                <div class="form-group col-12 col-md-6" :class="{'has-danger': errors.email}">
                    <label class="control-label">Correo</label>
                    <el-input type="email" v-model="form.email"></el-input>
                    <small class="form-control-feedback" v-if="errors.email" v-text="errors.email[0]"></small>
                </div>

                <div class="form-group col-12 col-md-3">
                    <label>Empresa</label><br>
                    <el-select :class="{'w-100': showDialog}" v-model="form.empresa_id" clearable>
                        <el-option v-for="option in empresas" :key="option.id" :value="option.id" :label="option.razon_social"></el-option>
                    </el-select>
                </div>

                <div class="form-group col-12 col-md-3" :class="{'has-danger': errors.telefono}">
                    <label class="control-label">Telefono</label>
                    <el-input v-model="form.telefono" :onkeypress="keypress" :maxlength="9" show-word-limit></el-input>
                    <small class="form-control-feedback" v-if="errors.telefono" v-text="errors.telefono[0]"></small>
                </div>

                <div class="form-group col-12">
                    <label class="control-label">Información Adicional</label>
                    <el-input type="textarea" placeholder="Ingrese Información adicional" v-model="form.info_add"></el-input>
                </div>

            </div>

            <div class="form-actions text-right mt-4">
                <!-- <button class="btn btn-secondary btn-sm" @click.prevent="close()">Cancelar</button> -->
                <!-- <button type="submit" class="btn btn-primary btn-sm">Guardar</button> -->
                <el-button @click.prevent="close()">Cancelar</el-button>
                <el-button type="primary" native-type="submit" :loading="loading_submit">Guardar</el-button>
            </div>
        </form>
    </el-dialog>
</template>
<script>
    export default {
        props: ['showDialog', 'almacen_id'],
        data() {
            return {
                titulo: null,
                pattern: "[0-9]+",
                keypress: "return event.charCode>=48 && event.charCode<=57",
                resource: 'almacen',
                errors: {},                
                loading_submit: false,
                form: {},
                paises: [],
                all_departamentos: [],
                all_provincias: [],
                all_distritos: [],
                departamentos: [],
                provincias: [],
                distritos: [],
                empresas: [],
            }
        },
        created(){
            this.inicializarForm()
            this.$http.get(`/${this.resource}/tables`)
            .then(response => {
              this.paises=response.data.paises;
              this.all_departamentos=response.data.departamentos;
              this.all_provincias=response.data.provincias;
              this.all_distritos=response.data.distritos;
              this.empresas=response.data.empresas;
            })
            
        },
        methods: {
            inicializarForm(){
                this.errors = {}
                this.form = {
                    id: null,
                    descripcion: null,
                    pais_id: 'PE',
                    departamento_id: null,
                    provincia_id: null,
                    distrito_id: null,
                    direccion_id: null,
                    direccion: null,
                    email: null,
                    telefono: null,
                    codigo_fiscal: null,
                    direccion_fiscal: null,
                    logo: null,
                    info_add: null,
                    empresa_id: null,
                }
            },
            async open(){
                this.titulo = (this.almacen_id) ? 'Editar Almacen' : 'Nuevo Almacen'
                if (this.almacen_id) {
                    this.$http.get(`/${this.resource}/${this.almacen_id}/tables`)
                        .then(response => {
                            this.form = response.data
                            this.filtroProvincias()
                            this.filtroDistritos()
                        })
                }
            },
            submit(){
                const data = new FormData();
                for (var key in this.form) {
                    const value = this.form[key];
                    if (value) {
                        data.append(key, value);
                    }
                }

                this.loading_submit = true
                if (this.almacen_id){
                    this.$http.post(`/${this.resource}/update`, data)
                        .then(response => {
                           if(response.data.success){
                                this.$message.success(response.data.message)
                                this.$emit('reloadAlmacen')
                                this.close()
                            }else{
                                this.$message.error(response.data.message)
                            }
                        })
                        .catch(error =>{
                            this.$message.error('Debe ingresar los datos requeridos')
                            this.errors=error.response.data.errors
                        })
                        .then(()=>{
                            this.loading_submit = false
                        })
                } else {
                    this.$http.post(`/${this.resource}`, data)
                    .then(response => {
                        if(response.data.success){
                            this.$message.success(response.data.message)
                            this.$emit('reloadAlmacen')
                            this.close()
                        }else{
                            this.$message.error(response.data.message)
                        }
                    })
                    .catch(error =>{
                        this.$message.error('Debe ingresar los datos requeridos')
                        this.errors=error.response.data.errors
                    })
                    .then(()=>{
                        this.loading_submit = false
                    })
                }
            },
            filtroProvincia() {
                this.form.provincia_id = null
                this.form.distrito_id = null
                this.filtroProvincias()
            },
            filtroProvincias() {
                this.provincias = this.all_provincias.filter(f => {
                    return f.departamento_id === this.form.departamento_id
                })
            },
            filtroDistrito() {
                this.form.distrito_id = null
                this.filtroDistritos()
            },
            filtroDistritos(){
                this.distritos = this.all_distritos.filter(f => {
                    return f.provincia_id === this.form.provincia_id
                })
            },
            close(){
                this.$emit('update:showDialog', false)
                this.inicializarForm()
            }
        }
    }
</script>