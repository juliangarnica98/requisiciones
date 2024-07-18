<template>
    <div class="" id="page-content">
        <div>
            <h1 class="text-start title">REQUISICIONES TOTAL </h1>
        </div>
        <div class="row d-flex justify-content-center pt-3"   >
            <div class="col-md-3">
                <select class=" form-select" name="filtro_estado" id="filtro_estado" v-model="filtro_estado" @change="filtrarEstado($event)">
                    <option value="">SELECCIONAR ESTADO</option>
                    <option value="CANCELADA">CANCELADA</option>
                    <option value="ABIERTA">ABIERTA</option>
                    <option value="EN GESTION">EN GESTION</option>
                    <option value="CERRADA">CERRADA</option>
                </select>
            </div>
        </div>
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row" v-if="this.area != 1 && this.area != 5">
                                
                                    <div class="col-md-1 text-center"><b>FECHA</b></div>
                                    <div class="col-md-4 text-center"><b>CARGO</b> </div>
                                    <div class="col-md-2 text-center"><b>CIUDAD</b> </div>
                                    <div class="col-md-1 text-center"><b>SEXO</b></div>
                                    <div class="col-md-2 text-center"><b>ESTATUS</b></div>
                                    <div class="col-md-2 text-center"><b>ACCIONES</b></div>
                                </div>
                                <div class="row" v-else>
                                    <div class="col-md-1 text-center"><b>N° RQ</b></div>
                                    <div class="col-md-4 text-center"><b>CARGO</b></div>
                                    <div class="col-md-2 text-center"><b>CENTRO DE COSTOS</b> </div>
                                    <div class="col-md-1 text-center"><b>SEXO</b> </div>
                                    <div class="col-md-2 text-center"><b>ESTATUS</b></div>
                                    <div class="col-md-2 text-center"><b>ACCIONES</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="rq in listaRequisition.data" class="card border-none table-body ">
                            <div class="card-body">
                                <div class="row ">
                                    
                                    <div v-if="area != 1 && area != 5 " class="col-md-1 text-center"><b>{{ rq.created_at | fecha}} </b></div>
                                    <div v-if="area != 1 && area != 5 " class="col-md-4 text-center"><b>{{rq.activation_charge.description}}</b> </div>
                                    <div v-if="area != 1 && area != 5 " class="col-md-2 text-center"><b>{{rq.city.description}}</b> </div>
                                    

                                    <div v-if="area == 1 || area == 5" class="col-md-1 text-center"> <b class="h4" style="text-transform: uppercase;"> {{ rq.activation.id }} </b></div>
                                    <div v-if="area == 1 || area == 5" class="col-md-4 text-center"><b>{{rq.activation_charge.description}}</b> </div>            
                                    <div v-if="area == 1 || area == 5" class="col-md-2 text-center"><b>{{rq.name_store}}</b> <b v-if="area == 'venta_nal'">{{rq.city.description}}</b> </div>

                                    <div class="col-md-1 text-center"><b>{{rq.sex.description}}</b> </div>
                                    <div class="col-md-2 text-center">
                                        <!-- <b v-if="rq.rechazo == 1">RECHAZADA</b>
                                        <b v-else>{{rq.status}}</b> -->
                                        <div class="border border-primary border-2 rounded-pill bg-primary" v-if="rq.status == 'EN GESTION' && rq.substate == 'RECLUTAMIENTO' && rq.aprobacion ===1">
                                            APROBADA -{{ rq.substate }}
                                        </div>
                                        <div class="border border-warning border-2 rounded-pill bg-warning" v-if="rq.status == 'EN GESTION' && rq.substate == 'TERNA' && rq.aprobacion ===1">
                                            APROBADA -{{ rq.substate }}
                                        </div>
                                        <div class="border border-success border-2 rounded-pill bg-success" v-if="rq.status == 'EN GESTION' && rq.substate == 'CONTRATACIÓN' && rq.aprobacion ===1">
                                            APROBADA -{{ rq.substate }}
                                        </div>
                                        <div class="text-center" v-if="rq.rechazo ===1 || rq.status =='CANCELADA'">
                                            <div class="border border-danger border-2 rounded-pill bg-danger" >RECHAZADA/CANCELADA </div> 
                                        </div>
                                        <div class="text-center" v-if="rq.status =='CERRADA'">
                                            <div class="border border-light border-2 rounded-pill bg-light text-dark" >CERRADA</div> 
                                        </div>
                                        <div class="" v-if="rq.status =='ABIERTA'">{{rq.status}}</div>
                                    </div>
                                    <!-- <div class="col-md-2 text-center" v-else><div><b> {{rq.status}}</b></div>  </div> -->
                                    <div class="col-md-2 text-center">
                                        <div class="col-md-12 h5">
                                                <!-- <a v-if="rq.status!='CANCELADA'" class="link text-white" data-bs-toggle="modal" :data-bs-target="'#'+rq.id"><i class="fas fa-edit"></i></a>    
                                                <Edit  @traerdata="getRequisitions" :estado="rq.status" :id="rq.id" :area="area"></Edit> -->
                                                <router-link class="link text-white" :to="{name:'directorrequisicion',params:{ id: rq.id}}" aria-expanded="false" >        
                                                        <i class="fas fa-eye"></i>
                                                </router-link>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <!-- <pagination class="d-flex justify-content-center" :limit="5" :data="listaRequisition" @pagination-change-page="getRequisitions">
                <span slot="prev-nav">ANTERIOR</span>
                <span slot="next-nav">SIGUIENTE</span>
            </pagination> -->
            <pagination v-if="filtro_estado== ''" class="d-flex justify-content-center" :limit="5" :data="listaRequisition" @pagination-change-page="getRequisitions">
                <span slot="prev-nav">ANTERIOR</span>
                <span slot="next-nav">SIGUIENTE</span>
            </pagination>

            <pagination v-if="filtro_estado!= ''" class="d-flex justify-content-center" :limit="5" :data="listaRequisition" @pagination-change-page="filtrarEstado">
                <span slot="prev-nav">ANTERIOR</span>
                <span slot="next-nav">SIGUIENTE</span>
            </pagination>
        </div>
   
</template>

<script>

import moment from 'moment'
    export default {
        data() {
            return {
                listaRequisition:{},
                titulo:"",
                filtro_estado:"",
                area:0
            }
        },
        methods:{
            getRequisitions(page = 1){
                console.log(11);
                axios.get('/director/getrequisicion-regional?page='+page)
                .then((res) => { 
                    this.listaRequisition = res.data.requisition;
                    this.area=res.data.area
                });
            },
            filtrarEstado(page = 1){
                axios.get(`/director/getfiltro2/`+this.area+'/'+this.filtro_estado+'?page='+page)
                .then((res) => { 
                    if (res.data.store) {
                        this.listaRequisition = res.data.store
                    }else if(res.data.national_sale){
                        this.listaRequisition = res.data.national_sale;
                    }else if(res.data.admin){
                        this.listaRequisition =  res.data.admin;
                    }else if(res.data.cedi){ 
                        this.listaRequisition =res.data.cedi;
                    }else if(res.data.factory){
                        this.listaRequisition = res.data.factory;
                    }
                });
                
            },
        },
        mounted() {
            this.getRequisitions();
        },
        filters:{
            fecha(fecha){
                return moment(fecha).format('YYYY/MM/DD');
            }
        },
        
    }
</script>
<style scoped>
    .title{
        color: var(--text-dark-color);
        font-size: 1.5rem;
    }

    .border-none{
        border: 0;
    }
    .table-head{
        background:var(--primary-color);;
        color: var(--toggle-color);
    }
    .table-body{
        /*border-color: red;*/
        /*border: 1px solid #03a8a2;*/
        background-color: rgb(97, 102,175);;
        color: #fff;
        font-size: 0.7rem;
    }
    .link{
        text-decoration:none;
        color: black;
        transition: #e85199 0.5s ease;
    }
    .link:hover{
        color: #e85199;
        cursor: pointer;
    }
    .btn-lili {
        /*border: #e85199 solid 1px;*/
        background-color: var(--text-color);
        color: var(--primary-color-light);
        
    }
    .btn-lili:hover {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--text-dark-color);
        color: var(--primary-color-light);

    }
    .btn-lili2 {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--primary-color);
        color: var(--toggle-color);
    } 
    select{
        background-color: transparent;
        border-top:none ;
        border-left: 0;
        border-right: 0;
        border-bottom: var(--primary-color) 2px solid;
        color: var(--text-dark-color);
        border-radius: 0;
        text-align: center;
        text-transform: uppercase;
    }
    option{
        text-transform: uppercase;
        color: #00aB9f;
    }
</style>
