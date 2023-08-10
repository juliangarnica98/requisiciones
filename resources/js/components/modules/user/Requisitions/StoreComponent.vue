<template>
    <div>
        <div class="row pb-5 d-flex justify-content-center">
            <div class="col-md-8 ">
                <div class="progress">
                    <div class="progress-bar progress-bar bg-lili" role="progressbar" :style="{'width': this.progreso}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <template id="step1" v-if="currentStep ==1">
                    <!-- <h1>Step 1</h1> -->
                    <small>POR FAVOR SELECCIONA EL AREA PARA SOLICITAR ACTIVACIÓN</small>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>SELECCIONA UNA OPCION</option>
                        <option value="1">TIENDA</option>
                        <option value="2">ADMIN</option>
                        <option value="3">CEDI</option>
                        <option value="3">FACTORY</option>
                        <option value="3">VENTA NAL</option>
                      </select>
                    <button class="btn btn-primary" type="button" @click.prevent="next(2,3.44)">Continue</button>
                </template>
                <template id="step2" v-if="currentStep ==2">
                    <h1>Step 2</h1>
                    <small>SELECCIONA LA REGIONAL</small>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>SELECCIONA UNA OPCION</option>
                        <option value="1">TIENDA</option>
                        <option value="2">ADMIN</option>
                        <option value="3">CEDI</option>
                        <option value="3">FACTORY</option>
                        <option value="3">VENTA NAL</option>
                      </select>
                    <button class="btn btn-primary" type="button" @click.prevent="next(1,-3.44)">Anterior</button>
                    <button class="btn btn-primary" type="button" @click.prevent="next(3,33)">Siguiente</button>
                </template>
                <template id="step3" v-if="currentStep ==3">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step4" v-if="currentStep ==4">
                    <h1>Step 4</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==5">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==6">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==7">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==8">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==9">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==10">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==11">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==12">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==13">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==14">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==15">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==16">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==17">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==18">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==19">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==20">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==21">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==22">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==23">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==24">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==25">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==26">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==27">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==28">
                    <h1>Step 3</h1>
                    
                </template>
                <template id="step3" v-if="currentStep ==29">
                    <h1>Step 3</h1>
                    
                </template>
            </div>
        </div>

    </div>
</template>
<script>
    export default{
        data() {
            return {
                currentStep:1,
                progress:0,
            }
        },
        methods:{
            next(step,prog){
                this.currentStep = step;
                this.progress += prog;
            }
        },
        computed:{
            progreso(){
                return this.progress+'%';
            }
        }
    }
</script>
<style scoped>
.bg-lili{
    background-color:#E52B7F ;
}

</style>