<template>
    <div>
        <div  class="row pb-3 pt-3">
            <div class="d-flex justify-content-center ">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4" >
                                <input class="form-control" type="date" value="" id="init_date" name="init_date" v-model="init">
                            </div>    
                            <div class="col-md-4" >
                                <input class="form-control" type="date" value="" id="end_date" name="end_date" v-model="end">
                            </div>    
                            <div class="col-md-4 d-grid gap-2">
                                <button class="btn btn-lili" @click.prevent="getdata">BUSCAR</button>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div class="row" v-if=" this.init != '' && this.end != ''">
            <div class="col-md-4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>TOTAL ADMINISTRATIVOS</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_admin }}</strong></h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>EFECTIVIDAD</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#54D1D1 ;"><strong>{{ efectividad_admin }}%</strong></h5>
                            </div>
                        </div>
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="optionsAd"
                        :series="seriesAd"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>TOTAL VENTA NACIONAL</strong></h3>
                            </div>
                            <div class="col-md-4">
                                <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_venta}}</strong></h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>EFECTIVIDAD</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#54D1D1 ;"><strong>{{ efectividad_venta }}%</strong></h5>
                            </div>
                        </div>
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsVe"
                        :series="seriesVe"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>TOTAL TIENDA</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_tienda}}</strong></h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>EFECTIVIDAD</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#54D1D1 ;"><strong>{{ efectividad_tienda }}%</strong></h5>
                            </div>
                        </div>
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsTi"
                        :series="seriesTi"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
        </div>
       
        <div class="row d-flex justify-content-center" v-if=" this.init != '' && this.end != ''">
            <div class="col-md-4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>TOTAL CEDI</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_cedis}}</strong></h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>EFECTIVIDAD</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#54D1D1 ;"><strong>{{ efectividad_cedis}}%</strong></h5>
                            </div>
                        </div>
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsCe"
                        :series="seriesCe"
                    ></apexchart>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>TOTAL MAGENTEX</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_magentex}}</strong></h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <h3 class="card-title"><strong>EFECTIVIDAD</strong></h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="" style="color:#54D1D1 ;"><strong>{{ efectividad_magentex }}%</strong></h5>
                            </div>
                        </div>
                        <apexchart
                        width="100%"
                        type="bar"
                        :options="OptionsMa"
                        :series="seriesMa"
                    ></apexchart>
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


            total_admin:0,
            total_tienda:0,
            total_cedis:0,
            total_magentex:0,
            total_venta:0,

            efectividad_magentex:0,
            efectividad_cedis:0,
            efectividad_tienda:0,
            efectividad_admin:0,
            efectividad_venta:0,

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
            if ( this.init == '' || this.end == '') {
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

                        this.efectividad_magentex=res.data.factory_efectividad,
                        this.efectividad_cedis=res.data.cedi_efectividad,
                        this.efectividad_tienda=res.data.store_efectividad,
                        this.efectividad_admin=res.data.administartion_efectividad,
                        this.efectividad_venta=res.data.ventanal_efectividad,

    
                        this.optionsAd={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'CANCELADAS','EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesAd=[
                            {
                                name: "series-1",
                                data: [res.data.administartion_cancelar,res.data.administartion_engestion,res.data.administartion_cerrada,res.data.administartion_abierta],
                                
                            },
                        ],

                        this.OptionsTi={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'CANCELADAS','EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesTi=[
                            {
                                name: "series-1",
                                data: [res.data.store_cancelar,res.data.store_engestion,res.data.store_cerrada,res.data.store_abierta],
                                
                            },
                        ],

                        this.OptionsCe={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'CANCELADAS','EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesCe=[
                            {
                                name: "series-1",
                                data: [res.data.cedi_cancelar,res.data.cedi_engestion,res.data.cedi_cerrada,res.data.cedi_abierta],
                                
                            },
                        ],

                        this.OptionsMa={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'CANCELADAS','EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesMa=[
                            {
                                name: "series-1",
                                data: [res.data.factory_cancelar,res.data.factory_engestion,res.data.factory_cerrada,res.data.factory_abierta],
                                
                            },
                        ],

                        this.OptionsVe={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'CANCELADAS','EN GESTION','CERRADA','ABIERTA'
                                ],
                            },
                            
                        },
                        this.seriesVe=[
                            {
                                name: "series-1",
                                data: [res.data.ventanal_cancelar,res.data.ventanal_engestion,res.data.ventanal_cerrada,res.data.ventanal_abierta],
                                
                            },
                        ]
    
                    });
            }
        },
    }
};
</script>