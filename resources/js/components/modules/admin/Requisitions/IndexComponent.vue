<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-center title">REQUISICIONES</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-sm-2  d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':admin}" @click="updateList(1)">ADMINISTRATIVOS</button>
            </div>
            <div class="col-sm-2 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':tienda}" @click="updateList(2)">TIENDAS</button>
            </div>
            <div class="col-sm-2 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':cedi}" @click="updateList(3)">CEDIS</button>
            </div>
            <div class="col-sm-2 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':factory}" @click="updateList(4)">FACTORY</button>
            </div>
            <div class="col-sm-2 d-grid gap-2">
                <button class="btn btn-lili" :class="{'btn-lili2':venta_nal}" @click="updateList(5)">VENTA NACIONAL</button>
            </div>
        </div>
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>CREADOR</b></div>
                                    <div class="col-md-2 text-center"><b>FECHA</b></div>
                                    <div class="col-md-2 text-center"><b>CARGO</b> </div>
                                    <div class="col-md-2 text-center"><b>CIUDAD</b> </div>
                                    <div class="col-md-2 text-center"><b>ESTADO</b></div>
                                    <div class="col-md-2 text-center"><b>ACCIONES</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="rq in listaRequisition.data" class="card border-none table-body ">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-2 text-center"><b>{{rq.requisition.user.name}}</b></div>
                                    <div class="col-md-2 text-center"><b>{{ rq.created_at | fecha}} </b></div>
                                    <div class="col-md-2 text-center"><b>{{rq.activation_charge.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.city.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.status}}</b> </div>
                                    <div class="col-md-2 text-center">
                                            
                                            <div class="col-md-12">
                                                <a class="link" data-bs-toggle="modal" :data-bs-target="'#'+area+'-'+rq.id"><i class="fas fa-edit"></i></a>    
                                                <Edit @traerdata="getRequisitions" :estado="rq.status" :area="area" :id="rq.id"/>
                                                <router-link class="link" :to="{name:'requisicion',params:{area: area, id: rq.id}}" aria-expanded="false" >
                                                    <span class="h4" >
                                                        <i class="fas fa-eye"></i>
                                                    </span>
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
            <pagination class="d-flex justify-content-center" :data="listaRequisition" @pagination-change-page="getRequisitions">
                <span slot="prev-nav">ANTERIOR</span>
                <span slot="next-nav">SIGUIENTE</span>
            </pagination>
        </div>
   
</template>

<script>

import moment from 'moment'
import Edit from './Editcomponent.vue'
    export default {
        components:{Edit},
        data() {
            return {
                area:"tienda",
                admin:false,
                tienda:true,
                cedi:false,
                factory:false,
                venta_nal:false,
                listaRequisition:{},
                listaRequisitionAdmin:{},
                listaRequisitionCedi:{},
                listaRequisitionStore:{},
                listaRequisitionNational_sale:{},
                listaRequisitionFactory:{},
            }
        },
        methods:{
            getRequisitions(page = 1){
                axios.get('/getrequisition?page='+page)
                .then((res) => { 
                    this.listaRequisition = res.data.store;  
                    this.listaRequisitionAdmin = res.data.admin; 
                    this.listaRequisitionCedi = res.data.cedi;
                    this.listaRequisitionFactory = res.data.factory;   
                    this.listaRequisitionNational_sale = res.data.national_sale;
                    this.listaRequisitionStore= res.data.store;
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
                    case 2:
                        this.listaRequisition = this.listaRequisitionStore;
                        this.area="tienda";
                        this.admin=false;
                        this.tienda=true;
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
                    case 5:
                        this.listaRequisition = this.listaRequisitionNational_sale;
                        this.area="venta_nal";
                        this.admin=false;
                        this.tienda=false;
                        this.cedi=false;
                        this.factory=false;
                        this.venta_nal=true;
                        break;

                    default:
                        this.listaRequisition = this.listaRequisitionAdmin;
                        break;
                }
                
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
        
    }
</script>
<style scoped>
    .title{
        color: var(--text-dark-color);
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
    
</style>
