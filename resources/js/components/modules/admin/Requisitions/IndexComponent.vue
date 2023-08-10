<template>
    <div class=" page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1>Requisiciones</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="row  pt-5">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-4 d-grid gap-2">
                        <button class="btn btn-lili" :class="{'btn-lili2':admin}" @click="updateList(1)">ADMINISTRATIVOS</button>
                    </div>
                    <div class="col-4 d-grid gap-2">
                        <button class="btn btn-lili" :class="{'btn-lili2':tienda}" @click="updateList(2)">TIENDAS</button>
                    </div>
                    <div class="col-4 d-grid gap-2">
                        <button class="btn btn-lili" :class="{'btn-lili2':cedi}" @click="updateList(3)">CEDIS</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-6 d-grid gap-2">
                        <button class="btn btn-lili" :class="{'btn-lili2':factory}" @click="updateList(4)">FACTORY</button>
                    </div>
                    <div class="col-6 d-grid gap-2">
                        <button class="btn btn-lili" :class="{'btn-lili2':venta_nal}" @click="updateList(5)">VENTA NACIONAL</button>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none rounded-pill table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>CREADOR</b></div>
                                    <div class="col-md-2 text-center"><b>FECHA</b></div>
                                    <div class="col-md-2 text-center"><b>CARGO</b> </div>
                                    <div class="col-md-2 text-center"><b>CIUDAD</b> </div>
                                    <div class="col-md-2 text-center"><b>SEXO</b></div>
                                    <div class="col-md-2 text-center"><b>VER</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="rq in listaRequisition" class="card border-none table-body rounded-pill ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>{{rq.requisition.user.name}}</b></div>
                                    <div class="col-md-2 text-center"><b>{{ rq.created_at | fecha}} </b></div>
                                    <div class="col-md-2 text-center"><b>{{rq.activation_charge.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.city.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.sex.description}}</b> </div>
                                    <div class="col-md-2 text-center">
                                            <div class="col-md-12">
                                                <router-link class="link" to="#" aria-expanded="false" >
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
        </div>
   
</template>

<script>
    import { flip } from '@popperjs/core';
import moment from 'moment'
    export default {
        data() {
            return {
                admin:false,
                tienda:true,
                cedi:false,
                factory:false,
                venta_nal:false,
                listaRequisition:[],
                listaRequisitionAdmin:[],
                listaRequisitionCedi:[],
                listaRequisitionStore:[],
                listaRequisitionNational_sale:[],
                listaRequisitionFactory:[],
            }
        },
        methods:{
            getRequisitions(){
                axios.get('/getrequisition')
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
                        this.admin=true;
                        this.tienda=false;
                        this.cedi=false;
                        this.factory=false;
                        this.venta_nal=false;
                        break;
                    case 2:
                        this.listaRequisition = this.listaRequisitionStore;
                        this.admin=false;
                        this.tienda=true;
                        this.cedi=false;
                        this.factory=false;
                        this.venta_nal=false;
                        break;
                    case 3:
                        this.listaRequisition = this.listaRequisitionCedi;
                        this.admin=false;
                        this.tienda=false;
                        this.cedi=true;
                        this.factory=false;
                        this.venta_nal=false;
                        break;
                    case 4:
                        this.listaRequisition = this.listaRequisitionFactory;
                        this.admin=false;
                        this.tienda=false;
                        this.cedi=false;
                        this.factory=true;
                        this.venta_nal=false;
                        break;
                    case 5:
                        this.listaRequisition = this.listaRequisitionNational_sale;
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
    .border-none{
        border: 0;
    }
    .table-head{
        background-color:#e85199 ;
        color: #fff;
    }
    .table-body{
        /*border-color: red;*/
        /*border: 1px solid #03a8a2;*/
        background-color: rgba(3,168,162,0.5);
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
        border: #e85199 solid 1px;
        background-color: #ffffff;
        color: #e85199;
        border-radius: 25px;
    }
    .btn-lili2 {
        border: rgba(3, 168, 162, 1) solid 1px;
        background-color: rgb(255, 255, 255) ;
        color: rgba(3, 168, 162, 1);
    } 
    .btn-lili:hover {
        border: rgba(3, 168, 162, 1) solid 1px;
        background-color: rgb(255, 255, 255);
        color: rgba(3, 168, 162, 1);
        border-radius: 25px;
    }
</style>
