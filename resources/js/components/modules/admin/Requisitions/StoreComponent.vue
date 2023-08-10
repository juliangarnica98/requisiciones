<template>
    <div >
        <div class="row pb-1 d-flex justify-content-center">
            <!-- <div class="col-md-8 ">
                <div class="progress">
                    <div class="progress-bar progress-bar bg-lili" role="progressbar" :style="{'width': this.progreso}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> -->
        </div>
        <div>
            <h1>Crear requisición</h1>
        </div>
        <div class="row d-flex justify-content-center pt-4">
            <div class="col-md-8">

                <template class="card" id="step1" v-if="currentStep ==1">

                        <div class="row card card-cont">
                            <div class="card-body">
                                <div class="">
                                    <small>POR FAVOR SELECCIONA EL AREA PARA SOLICITAR ACTIVACIÓN </small><small class="h5 text-danger" >*</small>
                                    <select v-model="form.area" class="form-select mt-3" aria-label="Default select example" @change="onChageCast(0,form.area)">
                                        <option selected value="">SELECCIONA UNA OPCION</option>
                                        <option value="1">TIENDA</option>
                                        <option value="2">ADMINISTRATIVOS</option>
                                        <option value="3">CEDI</option>
                                        <option value="4">FACTORY</option>
                                        <option value="5">VENTA NAL</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                </template>


                <template id="step2">

                    <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.area == '1'">
                        <div class="card-body">
                            <div  class="">
                                <small>SELECCIONA LA REGIONAL</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.regional" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.regional)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="regional in regionales" :value="regional.id">{{regional.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.area == '2'" >
                        <div class="card-body">
                            <div  class="">
                                <small>SELECCIONA LA GERENCIA</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.gerencia" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.gerencia)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="gerencia in gerencias" :value="gerencia.id">{{gerencia.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.area == '3'">
                        <div class="card-body">
                            <div  class="">
                                <small>SELECCIONA EL CEDI</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.centro_distribucion" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.centro_distribucion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="cedi in cedis" :value="cedi.id">{{ cedi.description }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.area == '4'">
                        <div class="card-body">
                            <div  class="">
                                <small>SELECCIONA EL AREA</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.area_facroty" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.area_facroty)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="area_factory in areas_factory" :value="area_factory.id">{{area_factory.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.area == '5'">
                        <div class="card-body">
                            <div  class="">
                                <small>SELECCIONA EL CARGO</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.cargo_uniq" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.cargo_uniq)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="cargo_uniq in cargos_uniq" :value="cargo_uniq.id">{{ cargo_uniq.description }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step3">
                    <div v-if="form.regional != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>NOMBRE DE LA TIENDA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.nombre" type="text" class="form-control" id="" placeholder="">
                                <small>CATEGORIA DE LA TIENDA</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.categoria" class="form-select" aria-label="Default select example" @change="onChageCast(2,form.categoria)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="categoria in categorias" :value="categoria.id">{{categoria.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div v-if="form.gerencia != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>SELECCIONA EL ÁREA</small><small class="h5 text-danger" >*</small>
                                <div v-if="form.gerencia">
                                    <select  v-model="form.area_gerencia" class="form-select" aria-label="Default select example" @change="onChageCast(2,form.area_gerencia)">
                                        <option selected value="">SELECCIONA UNA OPCION</option>
                                        <option v-for="area in areas" v-if="area.management_id == form.gerencia" :value="area.id">{{ area.description }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step4">
                    <div v-if="((form.categoria != '') && (form.nombre != '')) || form.area_gerencia != '' || form.centro_distribucion != '' 
                    || form.area_facroty != '' || form.cargo_uniq != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">

                                <small>RELACIONA LA CIUDAD EN LA QUE SE ENCUENTRA LA VACANTE</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.ciudad" class="form-select" aria-label="Default select example" @change="onChageCast(3,form.ciudad)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="ciudad in ciudades" :value="ciudad.id">{{ciudad.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step5">
                    <div v-if="form.ciudad != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>TIPO DE VACANTE</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.tipo_vacante" class="form-select" aria-label="Default select example" @change="onChageCast(4,form.tipo_vacante)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="tipo in tipo_vacantes" :value="tipo.id">{{tipo.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step6">
                    <div v-if="form.tipo_vacante == '1'" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>NOMBRE DE A QUIEN REEMPLAZA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.replacement_name" type="text" class="form-control" id="" placeholder="">
                                <small>CEDULA DE A QUIEN REEMPLAZA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.replacement_ide" type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '2'" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>¿Quién es la persona a la que reemplazaría?</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.change_name" type="text" class="form-control" id="" placeholder="">
                                <small>¿Cuál es la cedula del colaborador que se va a retirar?</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.change_ide" type="text" class="form-control" id="" placeholder="">
                                <small>¿Por que se ejecuta el plan de cambio?</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.change_reason" class="form-select" aria-label="Default select example">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="Desempeño">Desempeño</option>
                                    <option value="Periodo de prueba">Periodo de prueba</option>
                                    <option value="Renuncia voluntaria">Renuncia voluntaria</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '4'" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>FECHA DE RETIRO POR VACIO LABORAL</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.refund_date_retirement" type="date" class="form-control" id="" placeholder="">
                                <small>FECHA DE REINGRESO A LA COMPAÑIA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.refund_date" type="date" class="form-control" id="" placeholder="">
                                <small>CEDULA DEL COLABORADOR</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.refund_ide" type="text" class="form-control" id="" placeholder="">
                                <small>NOMBRE COMPLETO DEL COLABORADOR</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.refund_name" type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '5'" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>NOMBRE DE LA TIENDA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.opening_store" type="text" class="form-control" id="" placeholder="">
                                <small>FECHA ESTIMADA DE APERTURA</small><small class="h5 text-danger" >*</small>
                                <input v-model="form.opening_date" type="date" class="form-control" id="" placeholder="">
                                <small>CATEGORIA DE TIENDA</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.opening_category" class="form-select" aria-label="Default select example">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="YAHAD">YAHAD</option>
                                    <option value="AAA">AAA</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step7">
                    <div v-if="(form.replacement_name != '' && form.replacement_ide !='')
                    || (form.change_ide!= '' && form.change_name !='' && form.change_reason != '')
                    || (form.refund_date_retirement!='' && form.refund_date !='' && form.refund_ide!=''&&form.refund_name!='')
                    || (form.opening_category!=''&& form.opening_date !=''&& form.opening_store!=''
                    || form.tipo_vacante == '3')" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>SELECCIONA EL SEXO DEL COLABORADOR SOLICITADO</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.sexo_vacante" class="form-select" aria-label="Default select example" @change="onChageCast(5,form.sexo_vacante)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="sexo in lista_sexos" :value="sexo.id">{{sexo.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step8">
                    <div v-if="form.sexo_vacante != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>SELECCIONA EL CARGO A SOLICITAR</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.cargo_activacion" class="form-select" aria-label="Default select example" @change="onChageCast(6,form.cargo_activacion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="cargo in lista_cargos" :value="cargo.id">{{cargo.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step9">
                    <div v-if="form.cargo_activacion != ''" class="row card card-cont animate__animated animate__bounceInUp">
                        <div class="card-body">
                            <div class="mb-3">
                                <small>COMENTARIOS</small>
                                <input v-model="form.comentarios" type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>

                    </div>       
                </template>


                <template id="" class="">
                    <div v-if="form.cargo_activacion != ''" class="row animate__animated animate__bounceInUp">
                        <div class="col-md-12 d-grid gap-2">
                            <button  @click="createRequisition" type="button"  class="btn btn-lili  mb-5">REGISTRAR</button>
                        </div>
                    </div>
                </template>

            </div>
        </div>

    </div>
</template>
<script>
    export default{
        data() {
            return {
                form:{
                    area:"",
                    regional:"",
                    gerencia:"",
                    centro_distribucion:"",
                    area_facroty:"",
                    cargo_uniq:"",
                    nombre:"",
                    categoria:"",                  
                    area_gerencia:"",
                    ciudad:"",
                    tipo_vacante:"",
                    replacement_ide:"",
                    replacement_name:"",
                    change_name:"",
                    change_ide:"",
                    change_reason:"",
                    refund_date_retirement:"",
                    refund_date:"",
                    refund_ide:"",
                    refund_name:"",
                    opening_store:"",
                    opening_date:"",
                    opening_category:"",
                    sexo_vacante:"",
                    cargo_activacion:"",
                    comentarios:""
                    
                },
                regionales:[],
                categorias:[],
                ciudades:[],
                gerencias:[],
                areas:[],
                cedis:[],
                areas_factory:[],
                cargos_uniq:[],
                tipo_vacantes:[],
                lista_sexos:[],
                lista_cargos:[],
                currentStep:1,
                progress:0,
            }
        },
        methods:{
            getData(){
                axios.get('/getdatarequisition')
                .then((res) => {
                      this.regionales=res.data.regionals;
                      this.categorias=res.data.categories;
                      this.ciudades=res.data.cities;
                      this.gerencias=res.data.management;
                      this.areas=res.data.area_managements;
                      this.cedis=res.data.center_distributions;
                      this.areas_factory=res.data.area_factories;
                      this.cargos_uniq=res.data.charges;
                      this.tipo_vacantes = res.data.type_activations;
                      this.lista_sexos=res.data.sexes;
                      this.lista_cargos=res.data.activation_charges;
                      
                    
                });
            },
            createRequisition(){
                axios.post('/requisicion/store', this.form).then((res) => {
                this.$toasted.success(res.data);
                this.$router.push('/requisiciones');
                // this.$router.go(-1);
            });
            },
            onChageCast(key, value){
                switch (key) {
                    case 0:
                        if(value == "") {         
                            this.form.regional="",
                            this.form.gerencia="",
                            this.form.centro_distribucion="",
                            this.form.area_facroty="",
                            this.form.cargo_uniq="",
                            this.form.nombre="",
                            this.form.categoria="",                  
                            this.form.area_gerencia="",
                            this.form.ciudad="",
                            this.form.tipo_vacante=""
                            
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_store="",
                            this.form.opening_date="",
                            this.form.opening_category="",

                            this.form.sexo_vacante="",
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                        break;
                    case 1:
                        if(value == "") {
                            this.form.nombre="",
                            this.form.categoria="",                  
                            this.form.area_gerencia="",
                            this.form.ciudad="",
                            this.form.tipo_vacante="",
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_store="",
                            this.form.opening_date="",
                            this.form.opening_category="",
                            this.form.sexo_vacante="",
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                        break;
                    case 2:
                        if(value == "") {
                            this.form.ciudad="",
                            this.form.tipo_vacante="",
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_store="",
                            this.form.opening_date="",
                            this.form.opening_category="",
                            this.form.sexo_vacante="",
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                        break;
                    case 3:
                        if(value == "") {
                            this.form.tipo_vacante="",
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_store="",
                            this.form.opening_date="",
                            this.form.opening_category="",
                            this.form.sexo_vacante="",
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                        break;
                    case 4:
                        if(value == "") {
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_store="",
                            this.form.opening_date="",
                            this.form.opening_category="",
                            this.form.sexo_vacante="",
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                        break;
                    case 5:
                        if(value == "") {
                            this.form.cargo_activacion="",
                            this.form.comentarios=""
                        }
                    case 6:
                        if(value == "") {
                            this.form.comentarios=""
                        }
                        break;
                    default:
                        break;
                }
            }
        },
        computed:{
            progreso(){
                return this.progress+'%';
            }
        },
        mounted () {
            this.getData();
        },
    }
</script>
<style scoped>
.bg-lili{
    background-color:#E52B7F ;
}
.card-cont{
    border-radius: 25px;
    border: #e52d7f solid 1px;
    background: #fff;
    /*background: rgb(0,168,159);*/
    /*border: linear-gradient(90deg, rgba(0,168,159,0.8) 0%, rgba(229,45,127,0.8) 100%) solid 2px;*/
}
.btn-lili {
    background-color: #e85199;
    color: white;
    border-radius: 25px;
}
.btn-lili:hover {
    background-color: rgba(3, 168, 162, 0.9);
    color: white;
    border-radius: 25px;
}
select{
    border: #00a89f solid 1px;
}
input{
    border: #00a89f solid 1px;
}

</style>