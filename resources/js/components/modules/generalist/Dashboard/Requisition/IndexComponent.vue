<template>
    <div>
        <div  class="row pb-0 pt-3">
            <div class="d-flex justify-content-center ">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" >
                                <select class="form-select" id="" name="" v-model="area">
                                    <option value="">SELECCIONA EL ÁREA</option>
                                    <option value="1">ADMINISTRATIVO</option>
                                    <option value="2">VENTA NACIONAL</option>
                                    <option value="3">COMERCIAL</option>
                                    <option value="4">CEDI</option>
                                    <option value="5">MAGENTEX</option>
                                </select>
                            </div> 
                            <div class="col-md-3" >
                                <input class="form-control" type="date" value="" id="init_date" name="init_date" v-model="init">
                            </div>    
                            <div class="col-md-3" >
                                <input class="form-control" type="date" value="" id="end_date" name="end_date" v-model="end">
                            </div>    
                            <div class="col-md-3 d-grid gap-2">
                                <button class="btn btn-lili" @click.prevent="getdata">BUSCAR</button>
                            </div>     
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-3 d-flex justify-content-end" >
                <div class="col-md-3 d-grid gap-2" v-if="area !='' && init != '' && end != ''">
                    <a href="" class="btn btn btn-lili" @click.prevent="getExcelData()">EXPORTAR DATOS<i class="fas fa-download"></i></a>
                </div>
                <div class="col-md-3 d-grid gap-2" v-if="area == 3 && init != '' && end != ''">
                    <a href="" class="btn btn btn-lili" @click.prevent="getExcelType()">TIPO DE VACANTES<i class="fas fa-download"></i></a>
                </div>
                <div class="col-md-3 d-grid gap-2" v-if="area == 3 && init != '' && end != ''">
                    <a href="" class="btn btn btn-lili" @click.prevent="getExcelClose()">VACANTES CERRADAS<i class="fas fa-download"></i></a>
                </div>
                <div class="col-md-3 d-grid gap-2" v-if="area == 3 && init != '' && end != ''">
                    <a href="" class="btn btn btn-lili" @click.prevent="getExcelOpen()">VACANTES ABIERTAS<i class="fas fa-download"></i></a>
                </div>
        </div>

        
        
        <div class="row" v-if="this.area != '' && this.init != '' && this.end != ''">
            <div class="col-md-4" v-if="area==1">
                
                <div class="card">

                    <div class="card-body">
                      
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="optionsAd"
                        :series="seriesAd"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4" v-if="area==2">
                
                <div class="card">

                    <div class="card-body">
                        
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsVe"
                        :series="seriesVe"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4" v-if="area==3">
                
                <div class="card">

                    <div class="card-body">
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsTi"
                        :series="seriesTi"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4" v-if="area==4">
                
                <div class="card">
    
                    <div class="card-body">
                        
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsCe"
                        :series="seriesCe"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4" v-if="area==5">
                
                <div class="card">
    
                    <div class="card-body">
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsMa"
                        :series="seriesMa"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-8" v-if="area==1">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-end pb-2">
                            <div class="col-md-12 text-right">
                                <h3 class="">EFECTIVIDAD:<strong style="color:#9C27B0;"> {{ total_efectividad_admin  }} </strong></h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center pb-2">
                            <div class="col-md-6 text-center">
                                <h1 class="">TOTAL: <strong style="color:#9C27B0;"> {{ total_admin}}</strong></h1>
                            </div>
                            <div class="col-md-6 text-center">
                                <h1 class="">CERRADAS:<strong style="color:#9C27B0;"> {{ total_cerrada_admin  }} </strong></h1>
                            </div>
                        </div>
                        
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">REEMPLAZO:<strong style="color:#000000 ;"> {{ total_admin_reemplazo  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">PLAN  DE CAMBIO:<strong style="color:#000000 ;"> {{ total_admin_plan  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">NUEVO CARGO:<strong style="color:#000000 ;"> {{ total_admin_nuevo  }} </strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-8" v-if="area==2">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-end pb-2">
                            <div class="col-md-12 text-right">
                                <h3 class="">EFECTIVIDAD:<strong style="color:#9C27B0;"> {{ total_efectividad_venta  }} </strong></h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center pb-2">
                            <div class="col-md-6 text-center">
                                <h1 class="">TOTAL: <strong style="color:#9C27B0;"> {{ total_venta}}</strong></h1>
                            </div>
                            <div class="col-md-6 text-center">
                                <h1 class="">CERRADAS:<strong style="color:#9C27B0;"> {{ total_cerrada_venta  }} </strong></h1>
                            </div>
                        </div>
                        
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">REEMPLAZO:<strong style="color:#000000 ;"> {{ total_venta_reemplazo  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">PLAN  DE CAMBIO:<strong style="color:#000000 ;"> {{ total_venta_plan  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">NUEVO CARGO:<strong style="color:#000000 ;"> {{ total_venta_nuevo  }} </strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-8" v-if="area==3">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-end pb-2">
                            <div class="col-md-12 text-right">
                                <h3 class="">EFECTIVIDAD:<strong style="color:#9C27B0;"> {{ total_efectividad_tienda  }} </strong></h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center pb-2">
                            <div class="col-md-6 text-center">
                                <h1 class="">TOTAL: <strong style="color:#9C27B0;"> {{ total_tienda}}</strong></h1>
                            </div>
                            <div class="col-md-6 text-center">
                                <h1 class="">CERRADAS:<strong style="color:#9C27B0;"> {{ total_cerrada_tienda  }} </strong></h1>
                            </div>
                        </div>
                        
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">REEMPLAZO:<strong style="color:#000000 ;"> {{ total_tienda_reemplazo  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">PLAN  DE CAMBIO:<strong style="color:#000000 ;"> {{ total_tienda_plan  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">NUEVO CARGO:<strong style="color:#000000 ;"> {{ total_tienda_nuevo  }} </strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-8" v-if="area==4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-end pb-2">
                            <div class="col-md-12 text-right">
                                <h3 class="">EFECTIVIDAD:<strong style="color:#9C27B0;"> {{ total_efectividad_cedis }} </strong></h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center pb-2">
                            <div class="col-md-6 text-center">
                                <h1 class="">TOTAL: <strong style="color:#9C27B0;"> {{ total_cedis}}</strong></h1>
                            </div>
                            <div class="col-md-6 text-center">
                                <h1 class="">CERRADAS:<strong style="color:#9C27B0;"> {{ total_cerrada_cedis  }} </strong></h1>
                            </div>
                        </div>
                        
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">REEMPLAZO:<strong style="color:#000000 ;"> {{ total_cedis_reemplazo  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">PLAN  DE CAMBIO:<strong style="color:#000000 ;"> {{ total_cedis_plan  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">NUEVO CARGO:<strong style="color:#000000 ;"> {{ total_cedis_nuevo  }} </strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-8" v-if="area==5">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-end pb-2">
                            <div class="col-md-12 text-right">
                                <h3 class="">EFECTIVIDAD:<strong style="color:#9C27B0;"> {{ total_efectividad_magentex }} </strong></h3>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center pb-2">
                            <div class="col-md-6 text-center">
                                <h1 class="">TOTAL: <strong style="color:#9C27B0;"> {{ total_magentex}}</strong></h1>
                            </div>
                            <div class="col-md-6 text-center">
                                <h1 class="">CERRADAS:<strong style="color:#9C27B0;"> {{ total_cerrada_magentex  }} </strong></h1>
                            </div>
                        </div>
                        
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">REEMPLAZO:<strong style="color:#000000 ;"> {{ total_magentex_reemplazo  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">PLAN  DE CAMBIO:<strong style="color:#000000 ;"> {{ total_magentex_plan  }} </strong></h5>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#e85199;">NUEVO CARGO:<strong style="color:#000000 ;"> {{ total_magentex_nuevo  }} </strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</template>
<style scoped>
/* Ponemos un color de fondo y redondeamos las esquinas del thumb */
.aspectos::-webkit-scrollbar-thumb {
    background: #320000;
    border-radius: 4px;
}

/* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
.aspectos::-webkit-scrollbar-thumb:hover {
    background: #b3b3b3;
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}

/* Cambiamos el fondo cuando esté en active */
.aspectos::-webkit-scrollbar-thumb:active {
    background-color: #999999;
}

.scroll {
    max-height: 50vh;
    overflow-y: auto;
}
.card{
    opacity: 1;
}
.mayus{
    text-transform: uppercase;
}
.btn-lili {
    background-color: #e85199;
    color: white;

}
.btn-lili:hover {
    background-color:  #a87bc7;
    color: white;
   
}
select{
   background-color: #ffffff;
   border-bottom: #e85199 2px solid;
   border-top: 0;
   border-left: 0;
   border-right: 0;
   border-radius: 0;
}
input{
    background-color: #ffffff;
    border-bottom: #e85199 2px solid;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-radius: 0;
 }
</style>
<script>
export default {
    data() {
        return {

            init:"",
            end:"",
            area:"",


            total_admin:0,
            total_tienda:0,
            total_cedis:0,
            total_magentex:0,
            total_venta:0,

            total_efectividad_admin:0,
            total_efectividad_tienda:0,
            total_efectividad_cedis:0,
            total_efectividad_magentex:0,
            total_efectividad_venta:0,

            total_cerrada_admin:0,
            total_cerrada_tienda:0,
            total_cerrada_cedis:0,
            total_cerrada_magentex:0,
            total_cerrada_venta:0,

            total_admin_reemplazo:0,
            total_admin_plan:0,
            total_admin_nuevo:0,
            total_tienda_reemplazo:0,
            total_tienda_plan:0,
            total_tienda_nuevo:0,
            total_cedis_reemplazo:0,
            total_cedis_plan:0,
            total_cedis_nuevo:0,
            total_magentex_reemplazo:0,
            total_magentex_plan:0,
            total_magentex_nuevo:0,
            total_venta_reemplazo:0,
            total_venta_plan:0,
            total_venta_nuevo:0,



            optionsAd: {},
            OptionsTi:{},
            OptionsCe:{},
            OptionsMa:{},
            OptionsVe:{},
            seriesAd: [],
            seriesTi:[],
            seriesCe:[],
            seriesMa:[],
            seriesVe:[],


        };
    },
    methods:{
        getdata(){
            console.log(this.end);
            if (this.area == ''|| this.init == '' || this.end == '') {
                this.$toast.info('Hay campos vacios')
            } else {     
                var url = `/getdatarequisition/`+this.init+`/`+this.end
                console.log(url);
                    axios.get(url)
                    .then((res) => { 
                        this.total_admin = res.data.administartion_total,
                        this.total_tienda = res.data.store_total,
                        this.total_cedis = res.data.cedi_total,
                        this.total_magentex = res.data.factory_total,
                        this.total_venta = res.data.ventanal_total,

                        this.total_efectividad_admin = (res.data.administartion_efectividad== null) ? 0 :  res.data.administartion_efectividad;
                        this.total_efectividad_tienda = res.data.store_efectividad + '%';
                        this.total_efectividad_cedis = res.data.cedi_efectividad;
                        this.total_efectividad_magentex=res.data.factory_efectividad;
                        this.total_efectividad_venta = res.data.ventanal_efectividad;

                        this.total_cerrada_tienda = res.data.store_cerrada;
                        this.total_cerrada_admin = res.data.administartion_cerrada;
                        this.total_cerrada_cedis = res.data.cedi_cerrada;
                        this.total_cerrada_magentex = res.data.factory_cerrada;
                        this.total_cerrada_venta = res.data.ventanal_cerrada;

                        this.total_admin_reemplazo = res.data.administartion_reemplazo,
                        this.total_admin_plan = res.data.administartion_plancambio;
                        this.total_admin_nuevo = res.data.administartion_nuevocargo;

                        this.total_tienda_reemplazo = res.data.store_reemplazo,
                        this.total_tienda_plan = res.data.store_plancambio;
                        this.total_tienda_nuevo = res.data.store_nuevocargo;

                        this.total_cedis_reemplazo = res.data.cedi_reemplazo,
                        this.total_cedis_plan = res.data.cedi_plancambio;
                        this.total_cedis_nuevo = res.data.cedi_nuevocargo;

                        this.total_magentex_reemplazo = res.data.factory_reemplazo,
                        this.total_magentex_plan = res.data.factory_plancambio;
                        this.total_magentex_nuevo = res.data.factory_nuevocargo;

                        this.total_venta_reemplazo = res.data.ventanal_reemplazo,
                        this.total_venta_plan = res.data.ventanal_plancambio;
                        this.total_venta_nuevo = res.data.ventanal_nuevocargo;
            
            
    
                        this.optionsAd={
                            colors:['#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesAd=[
                            {
                                name: "series-1",
                                data: [res.data.administartion_engestion,res.data.administartion_cerrada,res.data.administartion_abierta],
                                
                            },
                        ],

                        this.OptionsTi={
                            colors:['#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesTi=[
                            {
                                name: "series-1",
                                data: [res.data.store_engestion,res.data.store_cerrada,res.data.store_abierta],
                                
                            },
                        ],

                        this.OptionsCe={
                            colors:['#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesCe=[
                            {
                                name: "series-1",
                                data: [res.data.cedi_engestion,res.data.cedi_cerrada,res.data.cedi_abierta],
                                
                            },
                        ],

                        this.OptionsMa={
                            colors:['#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesMa=[
                            {
                                name: "series-1",
                                data: [res.data.factory_engestion,res.data.factory_cerrada,res.data.factory_abierta],
                                
                            },
                        ],

                        this.OptionsVe={
                            colors:['#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesVe=[
                            {
                                name: "series-1",
                                data: [res.data.ventanal_engestion,res.data.ventanal_cerrada,res.data.ventanal_abierta],
                                
                            },
                        ]
    
                    });
            }
        },
        getExcelOpen(){
            if(this.init == "" || this.end == ""){
                this.$toast.error('Campos vacios');
            }else{
                window.open('/vacant/export/'+this.init+'/'+this.end).focus();
            }
        },
        getExcelClose(){
            if(this.init == "" || this.end == ""){
                this.$toast.error('Campos vacios');
            }else{
                window.open('/vacant/exportclose/'+this.init+'/'+this.end).focus();
            }
        },
        getExcelType(){
            if(this.init == "" || this.end == ""){
                this.$toast.error('Campos vacios');
            }else{
                window.open('/store/export/'+this.init+'/'+this.end).focus();
            }
        },
        
        getExcelData(){
            if(this.area == "" ||this.init == "" || this.end == ""){
                this.$toast.error('Campos vacios');
            }else{
                window.open('/area/export/'+this.area+'/'+this.init+'/'+this.end).focus();
            }
        },
    }
};
</script>