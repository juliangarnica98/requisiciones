<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">ENTREVISTAS</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="row justify-content-between  pt-5">
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-lili" data-bs-toggle="modal" data-bs-target="#exampleModal">NUEVA <i class="fas fa-plus"></i></button>
                    <Modal @traerdata="getRequisitions"></Modal>
                </div>
            </div>   
            <div class="col-md-6 text-center">
                <div class="row">
                    <div class="col-md-5"><input type="date" v-model="form.inicio_filtro" class="form-control" id=""  placeholder=""></div>
                    <div class="col-md-5"><input type="date" v-model="form.fin_filtro" class="form-control" id=""  placeholder=""></div>
                    <div class="col-md-2">
                        <a href="" class="h4 btn btn-lili" @click.prevent="getExcel"><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3" >
            <div class="col-md-4 text-center pt-3 pb-3 border-left" style="background-color: rgb(97, 102,175);color:white;">SIN REALIZAR <i class="fas fa-window-close"></i></div>
            <div class="col-md-4 text-center pt-3 pb-3 border-right" style="background-color: #a87bc7 ;color:white">REALIZADA <i class="far fa-check-circle "></i></div>
        </div>
        <div class="row justify-content-center pt-2">
            <div class="col-md-6">
                <input class="form-control" type="text" v-model="form.buscar_entrevista" placeholder="INGRESA EL DOCUMENTO" @input="search" style="text-transform: uppercase;">
            </div>
        </div>  
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>CREACIÓN</b></div>
                                    <div class="col-md-1 text-center"><b>ESTADO</b></div>
                                    <div class="col-md-3 text-center"><b>NOMBRE</b> </div>
                                    <div class="col-md-2 text-center"><b>DOCUMENTO</b> </div>
                                    <div class="col-md-2 text-center"><b>AREA</b></div>
                                    <div class="col-md-2 text-center"><b>VER</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-entrevista"  v-for="entrevista in lista_entrevista.data">
                            <div class="card border-none" :class="{ estado_abierto: entrevista.status == 0, estado_cancelado: entrevista.status == 1}">
                                <div class="card-body">
                                    <div class="row" >
                                        <div class="col-md-2 text-center"><b>{{ entrevista.created_at | fecha}} </b></div>
                                        <div class="col-md-1 text-center" >
                                            <div class="" v-if="entrevista.status == 1"><h5><i class="far fa-check-circle "></i></h5> </div>
                                            <div class="" v-if="entrevista.status == 0"><h5> <i class="fas fa-window-close"></i></h5></div>
                                        </div>
                                        <div class="col-md-3 text-center"><b>{{ entrevista.name }}</b> </div>
                                        <div class="col-md-2 text-center"><b>{{ entrevista.num_document }}</b> </div>
                                        <div class="col-md-2 text-center" v-if="entrevista.area==1"><b>CEDI</b> </div>
                                        <div class="col-md-2 text-center" v-if="entrevista.area==2"><b> ADMINISTRATIVOS</b> </div>
                                        <div class="col-md-2 text-center" v-if="entrevista.area==3"><b> COMERCIAL(TIENDAS)</b> </div>
                                        <div class="col-md-2 text-center" v-if="entrevista.area==4"><b>COMERCIAL VENTA NAL</b> </div>
                                        <div class="col-md-2 text-center">
                                            <div class="col-md-12" v-if="entrevista.status==1">
                                                <router-link class="link h4 text-white" :to="{name:'/specialist/entrevista',params:{ id: entrevista.id}}" aria-expanded="false" >
                                                    
                                                        <i class="fas fa-eye"></i>
                                                   
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <pagination class="d-flex justify-content-center" :limit="5" :data="lista_entrevista" @pagination-change-page="getRequisitions">
                        <span slot="prev-nav">ANTERIOR</span>
                        <span slot="next-nav">SIGUIENTE</span>
                    </pagination>
                      
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
                lista_entrevista:{},
                form:{
                    inicio_filtro:"",
                    fin_filtro:"",
                    buscar_entrevista:"",
               
                }
            }
        },
        methods:{
            getRequisitions(page=1){
                axios.get('/specialist/getdatainterview?page='+page)
                .then((res) => { 
                    
                    
                    this.lista_entrevista = Object.assign(res.data.retreal, {});
                    
                });
                console.log("Entrevistas");
            },
            getExcel(){
                if(this.form.inicio_filtro == "" || this.form.fin_filtro == ""){
                    this.$toast.error('Campos vacios');
                }else{
                    window.open('/retreat/export/'+this.form.inicio_filtro+'/'+this.form.fin_filtro).focus();
                }
            },
            search(){
                if (this.form.buscar_entrevista == '') {
                    this.getRequisitions();
                    // window.reload
                } else {
                    axios.post('/interview/search',this.form)
                    .then((res) => {
                        this.lista_entrevista = {},
                        this.lista_entrevista = Object.assign(res.data.retreal, {});
                    });
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
    .card-entrevista{
        font-size: 0.7rem;
    }
    .estado_abierto{
        background-color:  rgb(97, 102,175);
        color:#fff;
    }
    .estado_cerrado{
        border: 3px solid #4CAF50;
        color: rgb(0, 0, 0);
    }
    .estado_engestion{
        border: 3px solid rgb(243, 133,155);
        color: rgb(0, 0, 0);
    }
    .estado_cancelado{
        background-color:  #a87bc7;
        color:#fff;
    }
    .border-left{
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }
    .border-right{
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }
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
        font-size: 0.7rem;
        color: #fff;

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
        padding: 10px 10px;
        /*border: #e85199 solid 1px;*/
        background-color: var(--text-dark-color);
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
