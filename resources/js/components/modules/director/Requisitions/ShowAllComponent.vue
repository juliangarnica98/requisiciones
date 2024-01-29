<template>
    <div class="" id="page-content">
        <div>
            <h1 class="text-start title">REQUISICIONES TOTAL </h1>
        </div>

        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row">
                                
                                    <div class="col-md-2 text-center"><b>FECHA</b></div>
                                    <div class="col-md-2 text-center"><b>CREADOR</b></div>
                                    <div class="col-md-2 text-center"><b>CARGO</b> </div>
                                    <div class="col-md-2 text-center"><b>CIUDAD</b> </div>
                                    <div class="col-md-2 text-center"><b>ESTADO</b></div>
                                    <div class="col-md-2 text-center"><b>VER</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="rq in listaRequisition.data" class="card border-none table-body ">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-2 text-center"><b>{{ rq.created_at | fecha}} </b></div>
                                    <div class="col-md-2 text-center"><b>{{rq.requisition.user.name}} {{rq.requisition.user.last_name}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.activation_charge.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.city.description}}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{rq.status}}</b> </div>
                                    <div class="col-md-2 text-center">
                                        <div class="col-md-12 h4">
                                                <!-- <a class="link" data-bs-toggle="modal" :data-bs-target="'#'+rq.id"><i class="fas fa-edit"></i></a>     -->
                                                <router-link class="link  text-white" :to="{name:'directorrequisicion',params:{ id: rq.id}}" aria-expanded="false" >
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
            <pagination class="d-flex justify-content-center" :limit="5" :data="listaRequisition" @pagination-change-page="getRequisitions">
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
                titulo:""
            }
        },
        methods:{
            getRequisitions(page = 1){
                console.log(11);
                axios.get('/director/getrequisicion-regional?page='+page)
                .then((res) => { 
                    this.listaRequisition = res.data;
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
    
</style>
