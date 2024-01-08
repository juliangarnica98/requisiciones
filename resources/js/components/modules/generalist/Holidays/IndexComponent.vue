<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">DÍAS FESTIVOS</h1>
        </div>
        <!-- {{ listaRequisition }} -->
        <div class="padding  pt-4">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none table-head">
                            <div class="card-body ">
                                <div class="row">
                                    
                                    <div class="col-md-4 text-center"><b>DESCRIPCION</b></div>
                                    <div class="col-md-4 text-center"><b>FECHA</b> </div>
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
                                        <div class="col-md-4 text-center "><b>{{ cargo.fecha }}</b> </div>
                                        
                                        <div class="col-md-4 text-center h5">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-md-3">
                                                    <a class="link text-white" data-bs-toggle="modal" :data-bs-target="'#'+cargo.id"><i class="fas fa-pencil-alt"></i></a>
                                                    <ModalEdit  :id="cargo.id" :description="cargo.description" :efectividad="cargo.effectiveness" @traerdata="getCharges"></ModalEdit>
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
                <pagination class="d-flex justify-content-center" :data="lista_charges" @pagination-change-page="getCharges">
                    <span slot="prev-nav">ANTERIOR</span>
                    <span slot="next-nav">SIGUIENTE</span>
                </pagination>
            </div>
            
    
        
   
</template>

<script>

    import ModalEdit from './EditComponent.vue';
    export default {
        components:{ModalEdit},
        data() {
            return {
                lista_charges:{},
            }
        },
        methods:{
            getCharges(page=1){
                this.lista_charges={};
                axios.get('/generalist/getholidays?page='+page)
                .then((res) => { 
                    // this.lista_charges={}  
                    this.lista_charges = Object.assign(res.data.holidays, {});
                });
                
            },
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
