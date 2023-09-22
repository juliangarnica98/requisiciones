<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-center title">ENTREVISTAS</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="row  pt-5">
            <div class="col-md-1">
                <div class="d-grid gap-2">
                    <button class="btn btn-lili" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></button>
                    <Modal @traerdata="getRequisitions"></Modal>
                </div>
            </div>   
            <!-- <div class="col-md-11">

            </div>        -->
        </div>
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>FECHA DE CREACIÓN</b></div>
                                    <div class="col-md-2 text-center"><b>ESTADO</b></div>
                                    <div class="col-md-2 text-center"><b>NOMBRE</b> </div>
                                    <div class="col-md-2 text-center"><b>DOCUMENTO</b> </div>
                                    <div class="col-md-2 text-center"><b>AREA</b></div>
                                    <div class="col-md-2 text-center"><b>VER</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card border-none table-body"  v-for="entrevista in lista_entrevista">
                            <div class="card-body">
                                <div class="row" >
                                    <div class="col-md-2 text-center"><b>{{ entrevista.created_at | fecha}} </b></div>
                                    <div class="col-md-2 text-center"><b>
                                        <div v-if="entrevista.status == 0" class="">
                                            Sin realizar   
                                        </div>
                                        <div v-else>
                                            Realizada
                                        </div>

                                    </b></div>
                                    <div class="col-md-2 text-center"><b>{{ entrevista.name }}</b> </div>
                                    <div class="col-md-2 text-center"><b>{{ entrevista.num_document }}</b> </div>
                                    <div class="col-md-2 text-center" v-if="entrevista.area==1"><b>CEDI</b> </div>
                                    <div class="col-md-2 text-center" v-if="entrevista.area==2"><b> ADMINISTRATIVOS</b> </div>
                                    <div class="col-md-2 text-center" v-if="entrevista.area==3"><b> COMERCIAL(TIENDAS)</b> </div>
                                    <div class="col-md-2 text-center" v-if="entrevista.area==4"><b>COMERCIAL VENTA NAL</b> </div>
                                    <div class="col-md-2 text-center">
                                            <div class="col-md-12" v-if="entrevista.status==1">
                                                <router-link class="link" :to="{name:'entrevista',params:{ id: entrevista.id}}" aria-expanded="false" >
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
        
        <!-- <Modal></Modal> -->
   
</template>

<script>
    import moment from 'moment'
    import Modal from './StoreComponent.vue';
    export default {
        components:{Modal},
        data() {
            return {
                lista_entrevista:[],
                
            }
        },
        methods:{
            getRequisitions(){
                axios.get('/getdatainterview')
                .then((res) => { 
                    this.lista_entrevista = res.data.retreal;
                    
                });
                console.log("Entrevistas");
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
        text-transform:uppercase;
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
        padding: 10px 0;
        /*border: #e85199 solid 1px;*/
        background-color: var(--text-color);
        color: var(--primary-color-light);
        
    }
    .btn-lili2 {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--primary-color);
        color: var(--primary-color-light);
    } 
    .btn-lili:hover {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--text-dark-color);
        color: var(--primary-color-light);

    }
</style>
