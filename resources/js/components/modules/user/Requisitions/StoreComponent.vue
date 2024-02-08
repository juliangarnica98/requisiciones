<template>
    <div >
        <div class="row pb-1 d-flex justify-content-center">
        </div>
        <div>
            <h1 class="text-start title">CREAR REQUISICIÓN</h1>
        </div>
        <div class="row d-flex justify-content-center pt-4">
            <div class="col-md-11">



                
                <template id="step2">

                    <div class="row card card-cont " v-if="form.area == '2'" >
                        <div class="card-body">
                            <div  class="">
                                <h6 class="text-center">SELECCIONA LA GERENCIA<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.gerencia" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.gerencia)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="gerencia in gerencias" :value="gerencia.id">{{gerencia.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row card card-cont " v-if="form.area == '3'">
                        <div class="card-body">
                            <div  class="">
                                <h6 class="text-center">SELECCIONA EL CEDI<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.centro_distribucion" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.centro_distribucion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="cedi in cedis" :value="cedi.id">{{ cedi.description }}</option>
                                </select>
                                <h6 class="text-center">PERSONA QUE APROBO LA VACANTE<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.person" type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row card card-cont " v-if="form.area == '4'">
                        <div class="card-body">
                            <div  class="">
                                <h6 class="text-center">SELECCIONA EL ÁREA<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.area_facroty" class="form-select" aria-label="Default select example" @change="onChageCast(1,form.area_facroty)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="area_factory in areas_factory" :value="area_factory.id">{{area_factory.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </template>


                <template id="step3">
                    <div v-if="form.regional != '' && form.area == '1'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">NOMBRE DE LA TIENDA<small class="h5 text-danger" >*</small></h6>
                                
                                <select class=" form-select" name="filtro_regional" id="filtro_regional" v-model="form.nombre" >
                                    <option value="" v-for="tiendas in lista_tiendas" :value="tiendas.description"> {{ tiendas.description }}</option>
                                </select>
                                <small>CATEGORIA DE LA TIENDA</small><small class="h5 text-danger" >*</small>
                                <select v-model="form.categoria" class="form-select" aria-label="Default select example" @change="onChageCast(2,form.categoria)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="categoria in categorias" :value="categoria.id">{{categoria.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div v-if="form.gerencia != ''" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">SELECCIONA EL ÁREA<small class="h5 text-danger" >*</small></h6>
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
                    <div v-if="((form.categoria != '') && (form.nombre != '')) || form.area_gerencia != '' || (form.centro_distribucion != '' && form.person !='')
                    || form.area_facroty != '' || form.area == '5'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">RELACIONA LA CIUDAD EN LA QUE SE ENCUENTRA LA VACANTE<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.ciudad" class="form-select" aria-label="Default select example" style="text-transform: uppercase;" @change="onChageCast(3,form.ciudad)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="ciudad in ciudades" :value="ciudad.id" style="text-transform: uppercase;">{{ciudad.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step5">
                    <div v-if="form.ciudad != ''" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3" v-if="form.area == 1">
                                <h6 class="text-center">TIPO DE VACANTE<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.tipo_vacante" class="form-select" aria-label="Default select example" @change="onChageCast(4,form.tipo_vacante)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="tipo in tipo_vacantes" :value="tipo.id">{{tipo.description}}</option>
                                </select>
                            </div>
                            <div class="mb-3" v-if="form.area != 1">
                                <h6 class="text-center">TIPO DE VACANTE<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.tipo_vacante" class="form-select" aria-label="Default select example" @change="onChageCast(4,form.tipo_vacante)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="1">REEMPLAZO (VACANTE)</option>
                                    <option value="2">PLAN DE CAMBIO</option>
                                    <option value="3">NUEVO CARGO</option>
                                    <option value="4">REINTEGRO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step6">
                    <div v-if="form.tipo_vacante == '1'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">NOMBRE DE A QUIEN REEMPLAZA<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.replacement_name" type="text" class="form-control" id="" placeholder="">
                                <h6 class="text-center">CEDULA DE A QUIEN REEMPLAZA<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.replacement_ide" type="number" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '2'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">¿Quién es la persona a la que reemplazaría?<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.change_name" type="text" class="form-control" id="" placeholder="">
                                <h6 class="text-center">¿Cuál es la cedula del colaborador que se va a retirar?<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.change_ide" type="number" class="form-control" id="" placeholder="">
                                <h6 class="text-center">¿Por que se ejecuta el plan de cambio?<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.change_reason" class="form-select" aria-label="Default select example">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="Desempeño">Desempeño</option>
                                    <option value="Periodo de prueba">Periodo de prueba</option>
                                    <option value="Proceso disciplinario">Proceso disciplinario</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '4'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">FECHA DE RETIRO POR VACIO LABORAL<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.refund_date_retirement" type="date" class="form-control" id="" placeholder="">
                                <h6 class="text-center">FECHA DE REINGRESO A LA COMPAÑIA<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.refund_date" type="date" class="form-control" id="" placeholder="">
                                <h6 class="text-center">CEDULA DEL COLABORADOR<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.refund_ide" type="number" class="form-control" id="" placeholder="">
                                <h6 class="text-center">NOMBRE COMPLETO DEL COLABORADOR<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.refund_name" type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div v-if="form.tipo_vacante == '5'" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                
                               
                                <h6 class="text-center">FECHA ESTIMADA DE APERTURA {{ form.opening_store }}<small class="h5 text-danger" >*</small></h6>
                                <input v-model="form.opening_date" type="date" class="form-control" id="" placeholder="">
                              
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step7">
                    <div v-if="(form.replacement_name != '' && form.replacement_ide !='')
                    || (form.change_ide!= '' && form.change_name !='' && form.change_reason != '')
                    || (form.refund_date_retirement!='' && form.refund_date !='' && form.refund_ide!=''&&form.refund_name!='')
                    || (form.opening_category!=''&& form.opening_date !=''&& form.opening_store!=''
                    || form.tipo_vacante == '3')" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">SELECCIONA EL SEXO DEL COLABORADOR SOLICITADO<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.sexo_vacante" class="form-select" aria-label="Default select example" @change="onChageCast(5,form.sexo_vacante)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="sexo in lista_sexos" :value="sexo.id">{{sexo.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step8">
                    <div v-if="form.sexo_vacante != ''" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3" v-if="form.area == '1'" >
                                <h6 class="text-center">SELECCIONA EL CARGO A SOLICITAR<small class="h5 text-danger" >*</small></h6>
                                <select  v-model="form.cargo_activacion" class="form-select" aria-label="Default select example" @change="onChageCast(6,form.cargo_activacion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="39">ASESOR PUNTO DE COMPRA</option>
                                    <option value="37">ASESOR INTEGRAL</option>
                                    <option value="38">ASESOR INTEGRAL TEMPORADA</option>
                                    <option value="87">AUXILIAR INTEGRAL</option>
                                    <option value="89">CAJERO</option>
                                    <option value="107">COORDINADOR DE TIENDA</option>
                                    <option value="193">LIDER DE TIENDA</option>
                                    <option value="173">JEFE DE ZONA</option>
                                    <option value="217">VISUAL MERCHANDISING</option>
                                </select>
                            </div>
                            <div class="mb-3" v-else-if="form.area == '3'" >
                                <h6 class="text-center">SELECCIONA EL CARGO A SOLICITAR<small class="h5 text-danger" >*</small></h6>
                                <select  v-model="form.cargo_activacion" class="form-select" aria-label="Default select example" @change="onChageCast(6,form.cargo_activacion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="67">AUXILIAR DE OPERACIONES LOGÍSTICAS </option>
                                    <option value="51">AUXILIAR DE BANDAS </option>
                                    <option value="46">AUXILIAR ADMINISTRATIVO </option>
                                    <option value="222">LÍDER DE BANDAS </option>
                                    <option value="184">LÍDER DE DEVOLUCIONES </option>
                                    <option value="189">LÍDER DE PLOTTER </option>
                                    <option value="181">LÍDER DE CORTE </option>
                                    <option value="192">LÍDER DE RICIBO Y ALMACENAMIENTO </option>
                                    <option value="185">LÍDER DE INVENTARIOS </option>
                                    <option value="187">LÍDER DE PICKING </option>
                                    <option value="183">LÍDER DE DESPACHOS </option>
                                    <option value="53">AUXILIAR DE CAMIÓN </option>
                                    <option value="91">CONDUCTOR </option>
                                    <option value="85">AUXILIAR I SORTER</option>
                                    <option value="190">LÍDER DE PRODUCCIÓN</option>
                                    <option value="221">JEFE DE CEDI</option>
                                    <option value="121">DIRECTOR DE PRODUCCIÓN</option>
                                    <option value="220">GERENTE DE OPERACIONES</option>
                                    <option value="72">AUXILIAR DE SERVICIOS GENERALES</option>
                                    <option value="219">AUXILIAR DE SEGURIDAD </option>
                                    <option value="212">SUPERVISOR DE PRODUCCIÓN </option>
                                    <option value="198">MONTACARGUISTA </option>
                                    <option value="189">LÍDER DE MOBILIARIO </option>
                                    <option value="203">OPERARIO DE MAQUINA</option>
                                    <option value="59">AUXILIAR DE CORTE </option>
                                    <option value="81">AUXILIAR I PRODUCCIÓN</option>
                                    <option value="218">CORTADOR</option>         
                                </select>
                            </div>
                            <div class="mb-3" v-else-if="form.area == '5'" >
                                <h6 class="text-center">SELECCIONA EL CARGO A SOLICITAR<small class="h5 text-danger" >*</small></h6>
                                <select  v-model="form.cargo_activacion" class="form-select" aria-label="Default select example" @change="onChageCast(6,form.cargo_activacion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option value="35">APC</option>
                                    <option value="173">JEFE DE ZONA</option>
                                   
                                </select>
                            </div>

                            <div class="mb-3" v-else>
                                <h6 class="text-center">SELECCIONA EL CARGO A SOLICITAR<small class="h5 text-danger" >*</small></h6>
                                <select v-model="form.cargo_activacion" class="form-select" aria-label="Default select example" @change="onChageCast(6,form.cargo_activacion)">
                                    <option selected value="">SELECCIONA UNA OPCION</option>
                                    <option v-for="cargo in lista_cargos" :value="cargo.id">{{cargo.description}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>


                <template id="step9">
                    <div v-if="form.cargo_activacion != ''" class="row card card-cont ">
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-center">COMENTARIOS</h6>
                                <textarea v-model="form.comentarios" class="form-control" placeholder="( Campo Opcional) Si tiene personal referido para cubirir esta vacante por favor dejar aqui nombre y número de contacto" id=""></textarea>
                            </div>
                        </div>

                    </div>       
                </template>


                <template id="" class="">
                    <div v-if="form.cargo_activacion != ''" class="row ">
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
                    comentarios:"",
                    person:""
                    
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
                lista_tiendas:[],
                currentStep:1,
                progress:0,
            }
        },
        methods:{
            getData(){
                axios.get('/boss/getdatarequisition')
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
                      this.form.area=res.data.area;
                      this.form.regional=res.data.regional;
                      this.lista_tiendas=res.data.tiendas;
                      
                    
                });
            },
            createRequisition(){
                axios.post('/boss/requisicion/store', this.form).then((res) => {
                this.$toast.success(res.data);
                this.$router.push('/boss/requisiciones');

            });
            },
            onChageCast(key, value){
                switch (key) {
                    case 0:
                        if(value == "") {         
                            this.form.regional="",
                            this.form.gerencia="",
                            this.form.centro_distribucion="",
                            this.form.person="",
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
                        else if(value == 5){
                            this.form.opening_store = this.form.nombre;
                            this.form.opening_category = this.form.categoria;
                            this.form.replacement_ide="",
                            this.form.replacement_name="",
                            this.form.change_name="",
                            this.form.change_ide="",
                            this.form.change_reason="",
                            this.form.refund_date_retirement="",
                            this.form.refund_date="",
                            this.form.refund_ide="",
                            this.form.refund_name="",
                            this.form.opening_date="",
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
                        console.log(value);
                        if(value == "") {
                            this.form.comentarios=""
                        }else if(value == 35) {
                            this.form.cargo_uniq = 1;
                        }else if(value == 173) {
                            this.form.cargo_uniq = 2;
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
.title{
    color: var(--text-dark-color);
    font-size: 1.5rem;
}

.bg-lili{
    background-color:#E52B7F ;
}
.card-cont{
    border: none;
    background-color: rgb(97, 102,175);
    color: #fff;
    
}
.btn-lili {
    background-color: #e85199;
    color: white;
    border-radius: 25px;
}
.btn-lili:hover {
    background-color: rgb(97, 102,175);
    color: white;
    border-radius: 25px;
}
select{
    border: rgb(97, 102,175) solid 1px;
}
input{
    border: rgb(97, 102,175) solid 1px;
    text-transform: uppercase;
}



</style>