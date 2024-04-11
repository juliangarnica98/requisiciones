<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">CARGOS</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="row  pt-2">
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <Modal @traerdata="getCharges"></Modal>
                </div>
            </div>   
        </div>
        <div class="row justify-content-center pt-2">
            <div class="col-md-6">
                <input class="form-control" type="text" v-model="form.buscar_cargo" placeholder="BUSCAR CARGO" @input="search" style="text-transform: uppercase;">
            </div>
        </div>   
        
        <div class="padding  pt-2">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none table-head">
                            <div class="card-body ">
                                <div class="row">
                                    
                                    <div class="col-md-4 text-center"><b>DESCRIPCION</b></div>
                                    <div class="col-md-4 text-center"><b>EFECTIVIDAD</b> </div>
                                    <div class="col-md-4 text-center"><b>ACCIONES</b> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-entrevista"  v-for="cargo in lista_charges.data">
                            <div class="card border-none">
                                <div class="card-body">
                                    <div class="row " >
                                       
                                        <div class="col-md-4 text-center"><b>{{ cargo.description }}</b> </div>
                                        <div class="col-md-4 text-center h5"><b>{{ cargo.effectiveness }}</b> </div>
                                        <!-- <div class="col-md-4 text-center h5"><b>{{ cargo.id }}</b> </div> -->
                                        <div class="col-md-4 text-center h5">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-md-3">
                                                    <a class="link text-white" data-bs-toggle="modal" :data-bs-target="'#'+cargo.id"><i class="fas fa-pencil-alt"></i></a>
                                                    <ModalEdit  :id="cargo.id" :description="cargo.description" :efectividad="cargo.effectiveness" @traerdata="getCharges"></ModalEdit>
                                                </div>
                                                <div class="col-md-3">
                                                    <a class="link" @click="deleteCharge(cargo.id)" style="cursor: pointer;"> 
                                                        <span class="h4 text-white" >
                                                            <i class="ti ti-trash"></i>
                                                        </span>
                                                    </a>
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
                <pagination v-if="form.buscar_cargo == ''" :limit="5" class="d-flex justify-content-center" :data="lista_charges" @pagination-change-page="getCharges">
                    <span slot="prev-nav">ANTERIOR</span>
                    <span slot="next-nav">SIGUIENTE</span>
                </pagination>
            </div>
            
    
        
   
</template>

<script>

    import Modal from './StoreComponent.vue';
    import ModalEdit from './EditComponent.vue';
    export default {
        components:{Modal,ModalEdit},
        data() {
            return {
                lista_charges:{},
                form:{
                    buscar_cargo:''
                }
            }
        },
        methods:{
            getCharges(page=1){
                this.lista_charges={};
                axios.get('/generalistcomercial/getdatacharges?page='+page)
                .then((res) => { 
                    // this.lista_charges={}  
                    this.lista_charges = Object.assign(res.data.charge, {});
                });
                
            },
            deleteCharge(id){
                this.$swal({
                title: '¿Estas seguro?',
                showCancelButton: true,
                }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`/generalistcomercial/deletecharge/${id}`)
                    .then((res) => {
                        this.$toast.success(res.data)
                        this.getCharges();
                        
                    });
                }
                })
            },
            search(){
                if (this.form.buscar_cargo == '') {
                    this.getCharges();
                } else {
                    axios.post('/generalistcomercial/charge/search',this.form)
                    .then((res) => {
                        this.lista_charges = {},
                        this.lista_charges = Object.assign(res.data.charge, {});
                    });
                }
            }
            
        },
        mounted() {
            this.getCharges();
        }, 

    }
</script>
<style scoped>
    .card-entrevista{
        font-size: 0.7rem;
    }
    .card{
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
