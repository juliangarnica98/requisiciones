<template>
    <div class="page" id="page-content" >
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">ENTREVISTA</h1>
            <router-link class="btn btn-lili" to="/entrevistas" aria-expanded="false">
                 VOLVER <i class="fas fa-undo"></i>
            </router-link>
        </div>
        <div v-if="Object.keys(respuesta_entrevista).length >0">

            <div class="row d-flex justify-content-center pt-3 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                NÚMERO DE DOCUMENTO
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.num_document }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                AREA
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                              
                                <div v-if="respuesta_entrevista.area == 1">
                                    CEDI
                                </div>
                                <div v-if="respuesta_entrevista.area == 2">
                                    ADMINISTRATIVOS
                                </div>
                                <div v-if="respuesta_entrevista.area == 3">
                                    COMERCIAL(TIENDAS)
                                </div>
                                <div v-if="respuesta_entrevista.area == 4">
                                    COMERCIAL VENTA NAL
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                NOMBRE
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.name }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                CARGO
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.retirement_positions.description }}
                                <!-- {{  respuesta_entrevista.retirement_positions.hasOwnProperty('description') ? 'existe' : 'no existe' }} -->
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.retirement_cities">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                CIUDAD
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.retirement_cities.description }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.regional != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                REGIONAL
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.regional }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.tienda != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                TIENDA
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.tienda }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.marca != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                MARCA
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.marca }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- IF TIEMPO -->
            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.time != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                TIEMPO TRABAJADO
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.time }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- IF FECHA DE INGRESO -->
            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.date_entry != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                FECHA DE ENTRADA
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{respuesta_entrevista.date_entry}}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
             <!-- IF FECHA DE SALIDA -->
             <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.date_output != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                FECHA DE SALIDA
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.date_output }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                NOMBRE DE JEFE
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.name_boss }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                CARGO DE JEFE
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.charge_boss }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                RAZÓN DE RETIRO
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.reason_retreat }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-0 " v-if="respuesta_entrevista.other_reason_retreat != null">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                OTRA RAZÓN DE RETIRO
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.other_reason_retreat }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                ¿ACCEDIO A LOS BENEFICIOS ENTREGADOS POR LA EMPRESA?
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                <div v-if="respuesta_entrevista.benefits == 1">
                                    SI
                                </div>
                                <div v-if="respuesta_entrevista.benefits == 2">
                                    NO
                                </div>
                                <div v-if="respuesta_entrevista.benefits == 3">
                                    NO CONOZCO ESTOS BENEFICIOS
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                ¿RECIBISTE ALGÚN TIPO DE CAPACITACIÓN O ENTRENAMIENTO?
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                <div v-if="respuesta_entrevista.training == 1">
                                    SI
                                </div>
                                <div v-if="respuesta_entrevista.training == 2">
                                    NO
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                ASPECTOS A FORTALECER
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                <div v-if="respuesta_entrevista.reinforcement == 1">
                                    TIPO DE CONTRATO
                                </div>
                                <div v-if="respuesta_entrevista.reinforcement == 2">
                                    DISTANCIA DE TU RESIDENCIA A TU LUGAR DE TRABAJO
                                </div>
                                <div v-if="respuesta_entrevista.reinforcement == 3">
                                    HONORARIOS
                                </div>
                                <div v-if="respuesta_entrevista.reinforcement == 4">
                                    SALARIO
                                </div>
                                <div v-if="respuesta_entrevista.reinforcement == 5">
                                    AMBIENTE LABORAL
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                ASPECTOS POSITIVOS
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.positive_aspects }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-10 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5 table-head rounded p-3 text-center">
                                COMENTARIOS
                            </div>
                            <div class="col-md-5 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.comentaries }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row d-flex justify-content-center pt-0 ">
                <div class="col-md-8 rounded">
                    <div class="card ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 table-head rounded p-3 text-center">
                                COMENTARIOS
                            </div>
                            <div class="col-md-6 table-body rounded p-3 text-center">
                                {{ respuesta_entrevista.comentaries }}
                            </div>                        
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="row d-flex justify-content-center pt-0 " v-for="pregunta in preguntas_satisfaccion">
                <div class="col-md-8 rounded">
                    <div class="card ">
                        <div class=" ">
                            <div  class=" row d-flex justify-content-center" >
                                <div class="col-md-6 table-head rounded p-3 text-center">
                                    {{pregunta.question_satifactions[0].description}}
                                </div>
                                <div class="col-md-6 table-body rounded p-3 text-center">
                                    {{pregunta.level_satifactions[0].description}}
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
export default {
    data() {
        return {
            respuesta_entrevista: {},
            preguntas_satisfaccion:{},
            rut_act: this.$router.currentRoute.path,
        };
    },
    methods: {
        getUsers: function () {
            axios
                .get(
                    `/getentrevistas/${this.$route.params.id}`
                )
                .then((res) => {
                    // console.log(res.data);
                    // this.respuesta_entrevista = Object.assign(res.data.retreal, {});
                    this.respuesta_entrevista = res.data.retreal;
                    this.preguntas_satisfaccion = Object.assign(res.data.satisfactions, {});
                    console.log(this.preguntas_satisfaccion[1].level_satifactions[0].description);
                });
        },
    },
    mounted() {
        this.getUsers();
    },
};
</script>
<style scoped>
.card{
    background-color: transparent;
}
.table-body {
    margin-left: 5px;
    background-color: rgb(97, 102,175);
}
.btn-lili {
    padding: 10px 10px;
    /*border: #e85199 solid 1px;*/
    background-color: var(--text-dark-color);
    color: var(--primary-color-light);
    
}
.card{
    border: none;
    
}
.title {
    color: var(--text-dark-color);
    font-size: 1.5rem;
}
.border-none {
    border: 0;
}
.table-head {
    background: var(--primary-color);
    color: var(--toggle-color);
}
.table-body {
    /*border-color: red;*/
    /*border: 1px solid #03a8a2;*/
    background-color: rgb(97, 102,175);
    color: var(--toggle-color);
}
.link{
    color: var(--text-dark-color);
    font-size: 25px;
    text-decoration: none;
}
.link:hover{
    color: var(--text-color);
    cursor: pointer;
}

</style>
