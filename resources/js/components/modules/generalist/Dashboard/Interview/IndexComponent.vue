<template>
    <div>   
        <div class="row pb-1 pt-3"  >
            <div class="d-flex justify-content-center" >
                <div class="card" style="width: 100%;">
                    <div class="card-body" >
                        <div class="row" >
                            <div class="col-md-3" :class="{ 'col-md-4': area === '3'}">
                                <select class="form-select " name="area" id="area" v-model="area" >
                                    <option value="">SELECCIONA ÁREA</option>
                                    <option value="1">CEDI</option>
                                    <option value="2">ADMINISTARTIVO</option>
                                    <option value="3">COMERCIAL TIENDAS</option>
                                    <option value="4">COMERCIAL VENTA NAL</option>
                                </select>
                            </div>    
                            <div class="col-md-3" :class="{ 'col-md-4': area === '3'}">
                                <input class="form-control" type="date" value="" id="init_date" name="init_date" v-model="init_date">
                            </div>    
                            <div class="col-md-3" :class="{ 'col-md-4': area === '3'}">
                                <!-- <label for="end_date">FECHA FIN</label> -->
                                <input class="form-control" type="date" value="" id="end_date" name="end_date" v-model="end_date">
                            </div>    
                            <div class="col-md-3 d-grid gap-2" v-if="area!='3'">
                                <button class="btn btn-lili" @click.prevent="getdata">BUSCAR</button>
                            </div>      
                        </div>
                        <div class="row pt-3"  v-if="area == '3'">
                            <div class="col-md-4">
                                <select class="form-select " name="marca" id="marca" v-model="marca" >
                                    <option value="">MARCA</option>
                                    <option value="LLP">LLP</option>
                                    <option value="YOI">YOI</option>
                                    <option value="YAHAD">YAHAD</option>
                                </select>
                            </div>    
                            <div class="col-md-4  ">
                                <!-- <select class="form-control" multiple name="cargo" id="cargo" v-model="cargos">

                                    <option value="</option>
                                    <option value="ASESOR INTEGRAL">ASESOR INTEGRAL</option>
                                    <option value="ASESOR INTEGRAL TEMPORADA">ASESOR INTEGRAL TEMPORADA</option>
                                    <option value="AUXILIAR INTEGRAL">AUXILIAR INTEGRAL</option>
                                    <option value="CAJERO">CAJERO</option>
                                    <option value="COORDINADOR DE TIENDA">COORDINADOR DE TIENDA</option>
                                    <option value="LIDER DE TIENDA">LIDER DE TIENDA</option>
                                    <option value="JEFE DE ZONA">JEFE DE ZONA</option>
                                    <option value="VISUAL MERCHANDISING">VISUAL MERCHANDISING</option>
                                </select> -->
                                <multiselect class="select" v-model="cargos" :multiple="true" :options="cargos_comercial" :searchable="false" :close-on-select="false" :show-labels="false" placeholder="Selecciona los cargos"></multiselect>
                            </div>   
              

                            <div class="col-md-4 d-grid gap-2">
                                <button class="btn btn-lili" @click.prevent="getdata">BUSCAR</button>
                            </div>      
                        </div>
                    </div>
                </div>
           
            </div>
        </div>

       <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="row" v-if="this.area != '' &&  this.init_date != '' && this.end_date != ''">

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="card-title"><strong> NUMERO DE ENCUESTAS</strong></h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h1 class="" style="color:#54D1D1 ;"><strong>{{ total_entrevistas }}</strong></h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="text-center">PERSONAS QUE HAN RESPONDIDO:</p>
                                    </div>
                                    <apexchart  width="100%" type="bar" :options="options" :series="series"></apexchart>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="card-title"><strong> PERSONAS QUE ACCEDIERON A LOS BENEFICIOS</strong></h3>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-3 text-center">SI {{ beneficios_si }} </div>
                                        <div class="col-md-3 text-center">NO {{ beneficios_no }} </div>
                                        <div class="col-md-6 text-center">NO CONOCE {{ beneficios_re }}</div>
                                    </div>
                                    <div id="chart">
                                        <apexchart type="donut" :options="OptionsBe" :series="seriesBe "></apexchart>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="card-title"><strong> PERSONAS RECIBIERON ALGUNA CAPACITACIÓN</strong></h3>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-4 text-center">SI {{ entrenamiento_si }} </div>
                                        <div class="col-md-4 text-center">NO {{ entrenamiento_no }} </div>
                                    </div>
                                    <div id="chart">
                                        <apexchart type="donut" :options="OptionsEn" :series="seriesEn"></apexchart>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="card-title"><strong>MOTIVO DE RETIRO</strong></h3>
                                        </div>
                                        <!-- <div id="chart">
                                            <apexchart type="bar" height="350" :options="OptionsMo" :series="seriesMo"></apexchart>
                                        </div> -->
                                        <apexchart  width="100%" type="bar" :options="OptionsMo" :series="seriesMo"></apexchart>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="card-title"><strong>ASPECTOS A FORTALECER</strong></h3>
                                        </div>
                                        <div id="chart">
                                            <apexchart width="100%"
                                            type="bar" :options="OptionsAs" :series="seriesAs"></apexchart>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            <div class="row" v-if="this.area != '' &&  this.init_date != '' && this.end_date != ''">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title"><strong>ASPECTOS POSITIVOS</strong></h3>
                                </div>
    
                                <apexchart  width="100%" type="bar" :options="OptionAsP" :series="seriesAsP"></apexchart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
       </div>

        
    </div>
</template>
<style scoped>
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
.select{
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
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
import Multiselect from 'vue-multiselect'

export default {
    components: { Multiselect },
    data() {
        return {
            area: "",
            init_date:"",
            end_date:"",
            cargos_comercial:['ASESOR PUNTO DE COMPRA',
                    'ASESOR INTEGRAL TEMPORADA',
                    'AUXILIAR INTEGRAL',
                    'CAJERO',
                    'COORDINADOR DE TIENDA',
                    'LIDER DE TIENDA',
                    'JEFE DE ZONA',
                    'VISUAL MERCHANDISING'],
            marca:"",
            cargos:[],

            total_entrevistas:0,

            beneficios_si:0,
            beneficios_no:0,
            beneficios_re:0,

            entrenamiento_si:0,
            entrenamiento_no:0,

            options: {},
            OptionsBe:{},
            OptionsEn:{},
            OptionsMo:{},
            OptionsAs:{},
            OptionAsP:{},

            series: [],
            seriesBe:[],
            seriesEn:[],
            seriesMo:[],
            seriesAs:[],
            seriesAsP:[],

        };
    },
    methods:{
        getdata(){
            
            if (this.area == '' ||  this.init_date == '' || this.end_date == '') {
                this.$toast.info('Hay campos vacios')
            } else {     
                if (this.area== '3' && (this.marca ==''||this.cargos =='' )) {
                    this.$toast.info('Hay campos vacios')
                } else {
                    var url = '';
                    if (this.area == '3') {
                        url = `/getdatainterview/`+this.area+`/`+this.init_date+`/`+this.end_date+`/`+this.marca+`/`+this.cargos
                        console.log(url);
                    } 
                    else {
                        url = `/getdatainterview/`+this.area+`/`+this.init_date+`/`+this.end_date
                    }
                    axios.get(url)
                    .then((res) => { 
                        this.total_entrevistas = res.data.total,
    
                        this.beneficios_si = res.data.beneficios_si,
                        this.beneficios_no = res.data.beneficios_no,
                        this.beneficios_re = res.data.beneficios_re,
    
                        this.entrenamiento_si = res.data.entrenamiento_si,
                        this.entrenamiento_no = res.data.entrenamiento_no,
    
                        this.aspectos_positivos = res.data.aspectos_positivos;
    
                        this.options={
                            colors:['#E6007E', '#54D1D1'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [
                                    'SI','NO'
                                ],
                            },
                            
                        },
                        this.series=[
                            {
                                name: "series-1",
                                data: [res.data.si,res.data.no],
                                
                            },
                        ],
                        this.OptionsBe={
                            colors:['#E6007E', '#54D1D1', '#9C27B0'],
                            labels: ["SI", "NO", "NO CONOZCO"],
                            chart: {
                            type: 'donut'
                            },
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                    width: 200
                                    },
                                    legend: {
                                    position: 'bottom'
                                    }
                                }
                            }]
                        },
                        this.seriesBe=[res.data.beneficios_si,res.data.beneficios_no,res.data.beneficios_re],
                        this.OptionsEn={
                            colors:['#E6007E', '#54D1D1'],
                            labels: ["SI", "NO"],
                            chart: {
                            type: 'donut'
                            },
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                    width: 200
                                    },
                                    legend: {
                                    position: 'bottom'
                                    }
                                }
                            }]
                        }
                        this.seriesEn=[res.data.entrenamiento_si,res.data.entrenamiento_no]
    
                        this.OptionsAs={
                            colors:['#E6007E', '#54D1D1','#54D1D1','#54D1D1','#54D1D1'],
                            chart: {
                            id: "vuechart-example2",
                            },
                            xaxis: {
                                categories: [
                                    'TIPO DE CONTRATO','DISTANCIA DE RESIDENCIA',
                                    'HONORARIOS','SALARIO',
                                    'AMBIENTE LABORAL'
                                ],
                            },
                            
                        },
                        this.seriesAs=[
                            {
                                name: "series-2",
                                data: [
                                res.data.mejorar_contrato,
                                res.data.mejorar_distancia,
                                res.data.mejorar_honorarios,
                                res.data.mejorar_salario,
                                res.data.mejorar_ambiente],
                                
                            },
                        ]
                        this.seriesAsP= [{
                                data: [res.data.aspecto_salario
                                        ,res.data.aspecto_actividades
                                        ,res.data.aspecto_clima
                                        ,res.data.aspecto_formacion
                                        ,res.data.aspecto_horarios
                                        ,res.data.aspecto_aprendizaje
                                        ,res.data.aspecto_distancia
                                        ,res.data.aspecto_puntualidad
                                        ,res.data.aspecto_instalaciones
                                        ,res.data.aspecto_herramientas
                                        ,res.data.aspecto_desayunos
                                
                                    ]
                            }],
                        this.OptionAsP= {

                            colors:[ '#9C27B0'],
                            chart: {
                            id: "vuechart-example",
                            },
                            xaxis: {
                                categories: [ 'SALARIO', 'ACTIVIDADES', 'CLIMA','FORMACION','HORARIOS','APRENDIZAJE','DISTANCIA','PUNTUALIDAD','INSTALACIONES','HERRAMIENTAS','DESAYUNOS']
                            },

                        }
                        if (this.area == 1 || this.area == 2) {
                            
                            this.seriesMo= [{
                                data: [res.data.motivo_distancia,res.data.motivo_oferta,res.data.motivo_estudio,res.data.motivo_salud,res.data.motivo_calamidad,res.data.motivo_otro,]
                            }],
                            this.OptionsMo= {

                                colors:[ '#9C27B0'],
                                chart: {
                                id: "vuechart-example",
                                },
                                xaxis: {
                                    categories: [ 'DISTANCIA', 'MEJOR OFERTA', 'ESTUDIO','SALUD','CALAMIDAD','OTRO']
                                },

                            }
                        } else
                         if(this.area == 3 || this.area == 4){
                            this.seriesMo= [{
                                data: [res.data.motivo_distancia,res.data.motivo_traslado,res.data.motivo_oferta,res.data.motivo_estudio,res.data.motivo_salud,res.data.motivo_calamidad,res.data.motivo_otro,]
                            }],
                            this.OptionsMo= {

                                colors:[ '#9C27B0'],
                                chart: {
                                id: "vuechart-example",
                                },
                                xaxis: {
                                    categories: ['DISTANCIA', 'TRASLADO', 'MEJOR OFERTA', 'ESTUDIO', 'SALUD', 'CALAMIDAD', 'OTRO']
                                },
                            }
                        }

                        
                        
    
                    });
                }
            }
        },
       
        mounted() {
            
        },
    }
};
</script>