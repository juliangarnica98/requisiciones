<template>
    <div class="" id="page-content">
        <div>
            <h1 class="text-start title">REQUISICIONES </h1>
        </div>
        <div class="row d-flex justify-content-center pt-2">
            <div class="col-sm-3  d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':admin}" @click="updateList(1)">ADMINISTRATIVOS <i class="fas fa-users"></i></button>
            </div>

            <div class="col-sm-3 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':cedi}" @click="updateList(3)">CEDIS <i class="fas fa-users"></i></button>
            </div>
            <div class="col-sm-3 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':factory}" @click="updateList(4)">MAGENTEX <i class="fas fa-industry"></i></button>
            </div>

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

        <div class="row justify-content-center mt-3" >
            <div class="col-md-2 text-center pt-3 pb-3 border-left" style="background-color: rgb(97, 102,175);color:white;">ABIERTA <i class="far fa-check-circle "></i></div>
            <div class="col-md-2 text-center pt-3 pb-3" style="background-color:  #a87bc7;color:white">EN GESTION <i class="fas fa-user-edit"></i></div>
            <div class="col-md-2 text-center pt-3 pb-3" style="background-color:  #e92c91;color:white">CERRADA <i class="fas fa-check-double"></i></div>
            <div class="col-md-2 text-center pt-3 pb-3" style="background-color: #f252a7;color:white">CANCELADA <i class="fas fa-window-close"></i></div>
            <div class="col-md-2 text-center pt-3 pb-3 border-right" style="background-color: #b0b0b0;color:white">SUSPENDIDA <i class="fas fa-grip-lines"></i></div>
        </div>

        <div class="padding  pt-3">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row"> 
                                    <!-- <div class="col-md-3 text-center"><b> <a href="#" class="btn btn-light" @click="getRequisitions"><i class="fas fa-users"></i></a> CREADOR </b> <a href="#" class="btn btn-light" @click="getRequisitions3"><i class="fas fa-user"></i></a></div> -->
                                    <div class="col-md-3 text-center"><b>CREADOR</b></div>
                                    <div class="col-md-1 text-center"><b>ESTADO</b></div>
                                    <div class="col-md-2 text-center"><b>CARGO</b> </div>
                                    <div class="col-md-2 text-center"><b>CIUDAD</b> </div>
                                    <div class="col-md-2 text-center"><b>ANALISTA</b></div>
                                    <div class="col-md-2 text-center"><b>ACCIONES</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="rq in listaRequisition.data" class="card-requition">
                            <div class="card border-none" :class="{ estado_abierto: rq.status == 'ABIERTA', estado_cerrado: rq.status == 'CERRADA' ,estado_engestion: rq.status == 'EN GESTION',estado_cancelado: rq.status == 'CANCELAR',estado_cancelado: rq.status == 'CANCELADA',estado_suspendido: rq.status == 'SUSPENDIDA'  }">
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-md-3 text-center"> <b style="text-transform: uppercase;">( {{ rq.id }} )  {{rq.requisition.user.name}} {{rq.requisition.user.last_name}} - {{ rq.created_at | fecha}}</b></div>
                                        <div class="col-md-1 text-center d-flex justify-content-center aling-items-center"><b> 
                            
                                            <div class="" v-if="rq.status == 'EN GESTION'">
                                                {{ rq.status }} - {{ rq.substate }}
                                            </div>
                                            <div class="" v-else>
                                                {{ rq.status }}
                                            </div>
                                        </b></div>
                                        <div class="col-md-2 text-center"><b>{{rq.activation_charge.description}}</b> </div>
                                        <div class="col-md-2 text-center"><b  style="text-transform: uppercase;">{{rq.city.description}}</b> </div>
                                        <div class="col-md-2 text-center"><b style="text-transform: uppercase;">{{rq.reclutador}}</b> </div>
                                        <div class="col-md-2 text-center">
                                                
                                                <div class="col-md-12 h4">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-md-2 text-white">
                                                            <div v-if="rq.fecha_ingreso == null && rq.status !='CANCELADA'" >                                                                
                                                                <Edit @traerdata="getRequisitions2" :substate="rq.substate" :estado="rq.status" :area="area" :id="rq.id" :creador="comCreador(rq.requisition.user_id)"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 text-white">
                                                            <router-link class="link text-white" :to="{name:'/generalist/requisicion',params:{area: area, id: rq.id}}" aria-expanded="false" >
                                                                <span class="" >
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </router-link>
                                                        </div>
                                                        <div class="col-md-2 text-white" >
                                                            <div v-if="rq.status== 'CERRADA' && rq.nombre_ingreso == null" class="text-white">
                                                                
                                                                <Edit2 @traerdata="getRequisitions2" :estado="rq.status" :area="area" :id="rq.id"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 text-white" v-if="rq.status!= 'CANCELADA' &&  rq.status != 'CERRADA'" >
                                                            <a @click.prevent="cancelr(rq.id)" class="link text-white "><i class="fas fa-window-close"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
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
import Edit from './EditComponent.vue'
import Edit2 from './EditComponent2.vue'
    export default {
        components:{
          Edit,Edit2
        },
        data() {
            return {
                filtro_regional:"",
                filtro_jefe:"",
                filtro_estado:"",

                creador:"",
                id_usuario:"",

                regionales:{},
                jefes_zona:{},

                area:"admin",
                admin:true,
                cedi:false,
                factory:false,
                
                listaRequisition:{},
                listaRequisitionAdmin:{},
                listaRequisitionCedi:{},
                listaRequisitionStore:{},
                listaRequisitionNational_sale:{},
                listaRequisitionFactory:{},

                emitModal1:false,
                form:{
                    area:this.area,
                    id:null
                },
            }
        },
        methods:{
            changsss()
            {
                return emitModal1 = !emitModal1
            },

            getRequisitions(page = 1){
                axios.get('/generalist/getrequisition?page='+page)
                .then((res) => { 
                    if(this.area == 'admin') {
                        this.listaRequisition = res.data.admin;  
                    }
                    else if(this.area == 'cedi') {
                        this.listaRequisition = res.data.cedi; 
                    }
                    else if(this.area == 'factory') {
                        this.listaRequisition = res.data.factory; 
                    }else{
                        this.listaRequisition = res.data.store;  
                    }
                    this.listaRequisitionAdmin = res.data.admin; 
                    this.listaRequisitionCedi = res.data.cedi;
                    this.listaRequisitionFactory = res.data.factory;   

                    this.regionales=res.data.regional;
                    this.id_usuario=res.data.user;
                });
            },
            getRequisitions2(page = 1){
                axios.get('/generalist/getrequisition?page='+page)
                .then((res) => { 
                   if(this.area == 'admin') {
                        this.listaRequisition = res.data.admin;  
                    }
                    else if(this.area == 'cedi') {
                        this.listaRequisition = res.data.cedi; 
                    }
                    else if(this.area == 'factory') {
                        this.listaRequisition = res.data.factory; 
                    }
                   
                    this.listaRequisitionAdmin = res.data.admin; 
                    this.listaRequisitionCedi = res.data.cedi;
                    this.listaRequisitionFactory = res.data.factory;   
                    this.regionales=res.data.regional;
                });
            },
            getRequisitions3(page = 1){
                axios.get('/generalist/getrequisition2?page='+page)
                .then((res) => { 
                    this.listaRequisition = res.data.admi;  
                    this.listaRequisitionAdmin = res.data.admin; 
                    this.listaRequisitionCedi = res.data.cedi;
                    this.listaRequisitionFactory = res.data.factory;   
                    this.listaRequisitionNational_sale = res.data.national_sale;
                    this.listaRequisitionStore= res.data.store;
                    this.regionales=res.data.regional;
                    this.id_usuario=res.data.user;
                });
            },
            updateList(id){
                switch(id){
                    case 1:
                        this.listaRequisition = this.listaRequisitionAdmin;
                        this.area= "admin";
                        this.admin=true;
                        this.tienda=false;
                        this.cedi=false;
                        this.factory=false;
                        this.venta_nal=false;
                        break;

                    case 3:
                        this.listaRequisition = this.listaRequisitionCedi;
                        this.area="cedi";
                        this.admin=false;
                        this.tienda=false;
                        this.cedi=true;
                        this.factory=false;
                        this.venta_nal=false;
                        break;
                    case 4:
                        this.listaRequisition = this.listaRequisitionFactory;
                        this.area="factory";
                        this.admin=false;
                        this.tienda=false;
                        this.cedi=false;
                        this.factory=true;
                        this.venta_nal=false;
                        break;

                    default:
                        this.listaRequisition = this.listaRequisitionAdmin;
                        break;
                }
                
            },

            filtrarEstado(page = 1){
                if (this.filtro_jefe == '') {
                    axios.get(`/generalist/getfiltro/`+this.area+`/sin_jefe/`+this.filtro_estado+'?page='+page)
                    .then((res) => { 
                        if (res.data.store) {
                            this.listaRequisitionStore= res.data.store;
                            this.listaRequisition = this.listaRequisitionStore;
                        }else if(res.data.admin){
                            this.listaRequisitionAdmin= res.data.admin;
                            this.listaRequisition = this.listaRequisitionAdmin;
                        }
                        else if(res.data.cedi){
                            this.listaRequisitionCedi= res.data.cedi;
                            this.listaRequisition = this.listaRequisitionCedi;
                        }
                        else if(res.data.factory){
                            this.listaRequisitionFactory= res.data.factory;
                            this.listaRequisition = this.listaRequisitionFactory;
                        }
                        else if(res.data.national_sale){
                            this.listaRequisitionNational_sale= res.data.national_sale;
                            this.listaRequisition = this.listaRequisitionNational_sale;
                        }
       
                    });
                } else {
                    axios.get(`/generalist/getfiltro/`+this.area+`/`+this.filtro_jefe+`/`+this.filtro_estado+'?page='+page)
                    .then((res) => { 
                        if (res.data.store) {
                            this.listaRequisitionStore= res.data.store;
                            this.listaRequisition = this.listaRequisitionStore;
                        }
                    });
                }
            },
            cancelr(id){
                this.form.id = id;
                this.form.area = this.area;
                this.$swal({
                title: '¿Estas seguro de cancelar solicitud?',
                showCancelButton: true,
                }).then((result) => {
                if (result.isConfirmed) {
                    axios.post('/generalist/requisicion/detele', this.form)
                    .then((res) => {
                        this.$toast.success(res.data);
                        this.getRequisitions();
                    });
                }
                })
                
            },
            comCreador(params){
                return params == this.id_usuario ? 1 : 0;
            }

        },
        mounted() {
            this.getRequisitions();
        },
        filters:{
            fecha(fecha){
                return moment(fecha).format('YYYY/MM/DD');
            }
        },
        computed:{
        }
        
    }
</script>
<style scoped>

    .card-requition{
        font-size: 0.7rem;
    }
    .title{
        color: var(--text-dark-color);
        font-size: 1.5rem;
    }

    .border-none{
        border: 0;
    }
    .table-head{
        background:var(--primary-color);
        color: var(--toggle-color);
    }
    .table-body{

        background-color: #00aB9f;
        color: var(--toggle-color);
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

    .estado_abierto{
        background-color: rgb(97, 102,175);
        color: #fff;
    }
    .estado_cerrado{
       
        background-color: #e92c91;
        color: #fff;
    }
    .estado_engestion{
        
        background-color: #a87bc7;
        color: #fff;
    }
    .estado_cancelado{
        background-color: #f252a7;
        color: #fff;
    }
    .border-left{
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }
    .border-right{
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .cir_est_abi{
        background: rgb(97, 102,175);
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }
    .cir_est_cer{
        background: rgb(248, 158,93);
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }
    .cir_est_eng{
        background:  rgb(243, 133,155);
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }
    .cir_est_can{
        background: rgb(255, 194,51);
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }
    .estado_suspendido{
        background-color: #b0b0b0;
        color:white;
    }
</style>
