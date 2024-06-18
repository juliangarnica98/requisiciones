<template>
    <div class="" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">TIENDAS</h1>
            <!-- <h1 class="text-start title">{{list_tiendas}}</h1> -->
        </div>
        <div class="padding  pt-4">
            <div class="row d-flex justify-content-between" >
              
                    <div class="col-md-2">
                        <div class="d-grid gap-2">
                            <Modal @traerdata="getCharges"></Modal>
                        </div>
                    </div>   
                
    
                <div class="col-md-3">
                    <select class=" form-select" name="filtro_regional" id="filtro_regional" v-model="filtro_regional" @change="getTiendas($event)">
                        <option value="">TODAS LAS REGIONALES</option>
                        <option value="" v-for="regi in regionales" :value="regi.description"> {{ regi.description }}</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-md-6">
                    <input class="form-control" type="text" v-model="form.buscar_tienda" placeholder="BUSCAR TIENDA" @input="search" style="text-transform: uppercase;">
                </div>
            </div>   
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none table-head">
                            <div class="card-body ">
                                <div class="row">
                                    
                                    <div class="col-md-4 text-center"><b>DESCRIPCION</b></div>
                                    <div class="col-md-4 text-center"><b>HANNA</b> </div>
                                    <div class="col-md-4 text-center"><b>REGIONAL</b> </div>
                                    
                                    
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
                                        <div class="col-md-4 text-center"><b>{{ cargo.hanna }}</b> </div>
                                        <div class="col-md-4 text-center "><b>{{ cargo.regional.description }}</b> </div>
                                        
                                        
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    
                      
                    </div>
                </div>
                <div class="" v-if="form.buscar_tienda == ''" >
                    <div class="" v-if="filtro_regional == ''">
                        <pagination  class="d-flex justify-content-center" :limit="5" :data="lista_charges" @pagination-change-page="getCharges">
                            <span slot="prev-nav">ANTERIOR</span>
                            <span slot="next-nav">SIGUIENTE</span>
                        </pagination>
                    </div>
                    <div class="" v-if="filtro_regional != '' ">
                        <pagination class="d-flex justify-content-center" :limit="5" :data="lista_charges" @pagination-change-page="getTiendas">
                            <span slot="prev-nav">ANTERIOR</span>
                            <span slot="next-nav">SIGUIENTE</span>
                        </pagination>
                    </div>
                </div>
            </div>
            
    
        
   
</template>

<script>

    export default {
      
        data() {
            return {
                lista_charges:{},
                regionales:{},
                filtro_regional:"",
                form:{
                    buscar_tienda:'',
                    regional:''
                }

            }
        },
        methods:{
            getCharges(page=1){
                this.lista_charges={};
                axios.get('/boss/getdatatiendas?page='+page)
                .then((res) => { 
                    // this.lista_charges={}  
                    this.lista_charges = Object.assign(res.data.tiendas, {});
                    this.regionales = Object.assign(res.data.regionals, {});
                });
                
            },
            getTiendas(page=1){
                if (this.filtro_regional == "") {
                    this.lista_charges={};
                    axios.get('/boss/getdatatiendas?page='+page)
                    .then((res) => { 
                        // this.lista_charges={}  
                        this.lista_charges = Object.assign(res.data.tiendas, {});
                        this.regionales = Object.assign(res.data.regionals, {});
                    });
                } else {     
                    this.lista_charges={};
                    axios.get('/boss/getdatatiendas2/'+this.filtro_regional+'?page='+page)
                    .then((res) => { 
                        // this.lista_charges={}  
                        this.lista_charges = Object.assign(res.data.tiendas, {});
                        this.regionales = Object.assign(res.data.regionals, {});
                    });
                }
            },
            
            search(){
                if (this.form.buscar_tienda == '') {
                    this.getCharges();
                } else {
                    this.form.regional = this.filtro_regional;
                    axios.post('/boss/store/search',this.form)
                    .then((res) => {
                        this.lista_charges = {},
                        this.lista_charges = Object.assign(res.data.tienda, {});
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
