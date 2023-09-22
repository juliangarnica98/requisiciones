<template>
    <div class="back-lili">
        <div class="container">
            <div class="pt-5">
                <h1 class="text-center text-white pt-5">
                    ENTREVISTA DE RETIRO
                </h1>
            </div>
            <a @click="limpiar" class="btn-flotante">LIMPIAR FORMULARIO</a>
            <div class="row d-flex justify-content-center pt-4">
                <div class="col-md-8">
                    <template class="card" id="step1" v-if="currentStep == 1">
                        <div class="row card card-cont">
                            <div class="card-body">
                                <div class="">
                                    <small class="h6 fw-bold"
                                        >POR FAVOR SELECCIONA EL AREA QUE
                                        PERTENECES</small
                                    ><small class="h5 text-danger">*</small>
                                    <select
                                        v-model="form.area"
                                        class="form-select mt-3"
                                        aria-label="Default select example"
                                    >
                                        <option selected value="">
                                            SELECCIONA UNA OPCION
                                        </option>
                                        <option value="1">CEDI</option>
                                        <option value="2">
                                            ADMINISTRATIVOS
                                        </option>
                                        <option value="3">
                                            COMERCIAL(TIENDAS)
                                        </option>
                                        <option value="4">
                                            COMERCIAL VENTA NAL
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step2">
                        <div
                            class="row card card-cont animate__animated animate__bounceInUp"
                            v-if="form.area != ''"
                        >
                            <div class="card-body">
                                <div class="">
                                    <small class="h6 fw-bold"
                                        >NOMBRE COMPLETO</small
                                    ><small class="h5 text-danger">*</small>
                                    <input
                                        v-model="form.nombre"
                                        type="text"
                                        class="form-control"
                                        id=""
                                        placeholder=""
                                    />
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step3">
                        <div
                            v-if="form.nombre != ''"
                            class="row card card-cont animate__animated animate__bounceInUp"
                        >
                            <div class="card-body">
                                <div class="mb-3">
                                    <small class="h6 fw-bold"
                                        >SELECCIONA A CONTINUACIÓN TU
                                        CARGO</small
                                    ><small class="h5 text-danger">*</small>
                                    <select
                                        v-model="form.cargo"
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option selected value="">
                                            SELECCIONA UNA OPCION
                                        </option>
                                        <option v-for="position in positions" :value="position.id">{{position.description}}</option>
                                        <!-- <option v-for="categoria in categorias" :value="categoria.id">{{categoria.description}}</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step4">
                        <div
                            v-if="
                                form.cargo != '' &&
                                (form.area == '1' || form.area == '2')
                            "
                        >
                            <div
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="mb-3">
                                    <div class="card-body">
                                        <small class="h6 fw-bold"
                                            >¿CUÁL FUE TU FECHA DE
                                            INGRESO?</small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.fechaingreso"
                                            type="date"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="mb-3">
                                    <div class="card-body">
                                        <small class="h6 fw-bold"
                                            >¿CUÁL FUE TU FECHA DE
                                            RETIRO?</small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.fecharetiro"
                                            type="date"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-if="
                                form.cargo != '' &&
                                (form.area == '3' || form.area == '4')
                            "
                        >
                            <div
                                v-if="form.area == '3'"
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="mb-3">
                                    <div class="card-body">
                                        <small class="h6 fw-bold"
                                            >¿DE QUE CIUDAD ERES? </small
                                        ><small class="h5 text-danger">*</small>
                                        <select
                                        v-model="form.ciudad"
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option selected value="">
                                            SELECCIONA UNA OPCION
                                        </option>
                                        <option v-for="city in cities" :value="city.id">{{city.description}}</option>
                                        <!-- <option v-for="categoria in categorias" :value="categoria.id">{{categoria.description}}</option> -->
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="mb-3">
                                    <div class="card-body">
                                        <small class="h6 fw-bold"
                                            >¿CUANTO TIEMPO ESTUVISTE LABORANDO
                                            CON NOSOTROS?</small
                                        ><small class="h5 text-danger">*</small>
                                        <select
                                            v-model="form.tiempo"
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option value="menos de 3 meses">
                                                MENOS DE 3 MESES
                                            </option>
                                            <option value="mas de 3 meses">
                                                MÁS DE 3 MESES
                                            </option>
                                            <option value="no recuerdo">
                                                NO RECUERDO
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step5">
                        <div
                            v-if="
                                (form.fechaingreso != '' &&
                                    form.fecharetiro != '') ||
                                (form.ciudad != '' && form.tiempo != '') ||
                                (form.area == '4' && form.tiempo != '')
                            "
                        >
                            <div
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="card-body">
                                    <div class="mb-3">
                                        <small class="h6 fw-bold"
                                            >NOMBRE DE JEFE DIRECTO </small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.nombreJefe"
                                            type="text"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="row card card-cont animate__animated animate__bounceInUp"
                            >
                                <div class="card-body">
                                    <div class="mb-3">
                                        <small class="h6 fw-bold"
                                            >CARGO DE JEFE DIRECTO </small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.cargoJefe"
                                            type="text"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step6">
                        <div
                            v-if="
                                form.cargoJefe != '' &&
                                (form.area == '1' || form.area == '2')
                            "
                            class="row card card-cont animate__animated animate__bounceInUp"
                        >
                            <div class="card-body">
                                <div class="mb-3">
                                    <small class="h6 fw-bold"
                                        >MOTIVO DE RETIRO</small
                                    ><small class="h5 text-danger">*</small>
                                    <select
                                        v-model="form.motivoRetiro"
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option
                                            selected
                                            value="traslado de tienda o zona"
                                        >
                                            TRASLADO DE TIENDA O ZONA
                                        </option>
                                        <option value="mejor oferta laboral">
                                            MEJOR OFERTA LABORAL
                                        </option>
                                        <option value="estudio">ESTUDIO</option>
                                        <option value="otro">OTRO</option>
                                    </select>
                                    <div
                                        class=""
                                        v-if="form.motivoRetiro == 'otro'"
                                    >
                                        <small class="h6 fw-bold"
                                            >OTRO MOTIVO DE RETIRO </small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.otroMotivo"
                                            type="text"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-if="
                                form.cargoJefe != '' &&
                                (form.area == '3' || form.area == '4')
                            "
                            class="row card card-cont animate__animated animate__bounceInUp"
                        >
                            <div class="card-body">
                                <div class="mb-3">
                                    <small class="h6 fw-bold"
                                        >MOTIVO DE RETIRO</small
                                    ><small class="h5 text-danger">*</small>
                                    <select
                                        v-model="form.motivoRetiro"
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option value="mejor oferta laboral">
                                            MEJOR OFERTA LABORAL
                                        </option>
                                        <option
                                            selected
                                            value="relacion laboral con el jefe direc"
                                        >
                                            RELACIÓN LABORAL CON EL JEFE DIRECTO
                                        </option>
                                        <option value="ambiente laboral">
                                            AMBIENTE LABORAL
                                        </option>
                                        <option value="otro">OTRO</option>
                                    </select>
                                    <div
                                        class=""
                                        v-if="form.motivoRetiro == 'otro'"
                                    >
                                        <small class="h6 fw-bold"
                                            >OTRO MOTIVO DE RETIRO </small
                                        ><small class="h5 text-danger">*</small>
                                        <input
                                            v-model="form.otroMotivo"
                                            type="text"
                                            class="form-control"
                                            id=""
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step7">
                        <div
                            v-if="form.motivoRetiro != ''"
                            class="row card card-cont animate__animated animate__bounceInUp"
                        >
                            <!-- <form @click="validate()"> -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <small class="h6 fw-bold"
                                        >NIVEL DE SATISFACCIÓN</small
                                    ><small class="h5 text-danger">*</small>
                                    <div
                                        v-for="(
                                            question, index
                                        ) in question_satisfaction"
                                    >
                                        <label for="">{{
                                            question.description
                                        }}</label>
                                        <select
                                            :key="index"
                                            v-model="question.selected"
                                            class="form-select"
                                            aria-label="Default select example"
                                            required
                                            @change="satisfaction(index)"
                                        >
                                            <option
                                                v-for="satisfaction in level_satisfaction"
                                                :value="satisfaction.id"
                                            >
                                                {{ satisfaction.description }}
                                            </option>
                                        </select>
                                        <!-- <small v-if="question.alert">Campo requeriddoooooo</small> -->
                                    </div>
                                    <!-- <input type="submit" value="Submit" /> -->
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                        <!-- {{ validator }} -->
                    </template>

                    <template id="step8">
                        <div class="row card card-cont animate__animated animate__bounceInUp" v-if="validator">
                            <div class="card-body">
                                <div  class="">
                                    <small class="h6 fw-bold">¿ ACCEDISTE A ALGUNOS BENEFICIOS ENTREGADOS POR LA EMPRESA COMO PRÉSTAMOS, CONVENIOS,ENTRE OTROS?</small><small class="h5 text-danger" >*</small>
                                    <select v-model="form.beneficios" class="form-select" aria-label="Default select example" >
                                        <option selected value="">SELECCIONA UNA OPCION</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                        <option value="3">NO CONOZCO ESTOS BENEFICIOS</option>
                                    </select>
                                </div>
                                <div  class="">
                                    <small class="h6 fw-bold">¿ RECIBISTE ALGÚN TIIPO DE CAPACITACIÓN O ENTRENAMIENTO DURANTE EL TIEMPO QUE ESTUVISTE EN LA EMPRESA?</small><small class="h5 text-danger" >*</small>
                                    <select v-model="form.entrenamiento" class="form-select" aria-label="Default select example" >
                                        <option selected value="">SELECCIONA UNA OPCION</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="step9">
                        <div class="row card card-cont animate__animated animate__bounceInUp" v-if="form.beneficios != '' && form.entrenamiento != ''">
                            <div class="card-body">
                                <div  class="">
                                    <small class="h6 fw-bold">ASPECTOS A FORTALECER</small><small class="h5 text-danger" >*</small>
                                    <select v-model="form.fortalecer" class="form-select" aria-label="Default select example" >
                                        <option selected value="">SELECCIONA UNA OPCION</option>
                                        <option value="1">TIPO DE CONTRATO</option>
                                        <option value="2">DISTANCIA DE TU RESIDENCIA A TU LUGAR DE TRABAJO</option>
                                        <option value="3">HONORARIOS</option>
                                        <option value="4">SALARIO</option>
                                        <option value="5">AMBIENTE LABORAL</option>
                                    </select>
                                </div>
                                <div  class="">
                                    <small class="h6 fw-bold">ASPECTOS POSITIVOS</small><small class="h5 text-danger" >*</small>
                                    <textarea class="form-control" v-model="form.aspectos" placeholder="Cuéntanos en este espacio aspectos positivos que identificaste durante tu trayectoria en nuestra empresa."></textarea>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template id="" class="">
                        <div
                            v-if="form.aspectos != ''"
                            class="row animate__animated animate__bounceInUp"
                        >
                            <div class="col-md-12 d-grid gap-2">
                                <button
                                    @click="guardar"
                                    type="submit"
                                    class="btn btn-lili mb-5"
                                >
                                    REGISTRAR
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        document: String,
    },
    data() {
        return {
            form: {
                area: "",
                // identificacion: "",
                num_document: this.$props.document,
                nombre: "",
                cargo: "",
                fechaingreso: "",
                fecharetiro: "",
                ciudad: "",
                tiempo: "",
                cargoJefe: "",
                nombreJefe: "",
                motivoRetiro: "",
                otroMotivo: "",
                beneficios: "",
                entrenamiento: "",
                aspectos: "",
                fortalecer: "",
                question:[],
            },
            
            question_satisfaction: [],
            level_satisfaction: [],
            cities:[],
            positions:[],
            
            array_validation: [],
            validator: false,

            currentStep: 1,
            progress: 0,
        };
    },
    methods: {
        getData() {
            axios.get("/getdataentrevista").then((res) => {
                this.level_satisfaction = res.data.level_satisfaction;
                res.data.question_satisfaction.forEach((element) => {
                    element.selected = null;
                    element.alert = false;
                });
                this.array_validation = new Array(res.data.question_satisfaction.length).fill(0)
                this.question_satisfaction = res.data.question_satisfaction;
                this.cities = res.data.cities;
                this.positions = res.data.positions;
            });
        },
        guardar() {

            this.$swal({
                title: '¿Estás seguro de enviar la entrevista?',
                showCancelButton: true,
                }).then((result) => {
                if (result.isConfirmed) {
                    this.form.question = this.question_satisfaction;
                    axios.post("/entrevista/crear", this.form).then((res) => {
                        this.$toast.success(res.data);
                        this.$router.push('/login');
                        setTimeout("location.reload()", 5000);
                    });
                }
                })
            
        },
        respuestaFuntion(value) {
            return "question" + value;
        },
        satisfaction(index){
            console.log(index);
            this.array_validation[index]=1; 
            let val = this.array_validation.includes(0);
            if(val == false){
                this.validator=true;
            }
        },
        limpiar(){
            this.form={
                area: "",
                // identificacion: "",
                num_document: this.$props.document,
                nombre: "",
                cargo: "",
                fechaingreso: "",
                fecharetiro: "",
                ciudad: "",
                tiempo: "",
                cargoJefe: "",
                nombreJefe: "",
                motivoRetiro: "",
                otroMotivo: "",
                beneficios: "",
                entrenamiento: "",
                aspectos: "",
                fortalecer: "",
            },
            this.question_satisfaction= [];
            this.getData();
        }

    },
    computed: {
        progreso() {
            return this.progress + "%";
        },
    },
    mounted() {
        this.getData();
    },
};
</script>
<style scoped>
.btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	color: #ffffff; /* Color del texto */
	background-color: #E6007E; /* Color de fondo */
	padding: 10px 20px; /* Relleno del boton */
	position: fixed;
	top: 40px;
	right: 40px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
    border-radius: 25px;
    text-decoration: none;
    cursor: pointer;
}
.btn-flotante:hover {
	background-color: #000000; /* Color de fondo al pasar el cursor */
    color: #ffffff;
	box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
	transform: translateY(-7px);
}
@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 16px;
		padding: 12px 20px;
		top: 20px;
		right: 20px;
	}
} 
.bg-lili {
    background-color: #e52b7f;
}
.card-cont {
    background: rgba(255, 255, 255, 0.8);
}
.btn-lili {
    background-color: white;
    color: #e85199;
    border-radius: 25px;
}
.btn-lili:hover {
    background-color: white;
    color: rgba(3, 168, 162, 0.9);
    border-radius: 25px;
}
select {
    border: #e85199 solid 1px;
}
input {
    border: #e85199 solid 1px;
    text-transform: uppercase;
}
textarea {
    border: #e85199 solid 1px;
    text-transform: uppercase;
}
.back-lili {
    background-image: url("./../../../../public/images/fondo.jpg");
    min-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
