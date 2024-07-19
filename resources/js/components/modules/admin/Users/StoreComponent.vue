<template>
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >

    
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="register" @submit.prevent="checkform">
                        <!-- <input type="hidden" name="_token" :value="csrf" /> -->
                        <div class="form-group"><label class="col-auto col-form-label title">NOMBRE</label>
                            <input type="text" class="form-control" name="name" id="name" v-model="form.name" aria-label="Default"/>
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label title">APELLIDO</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" v-model="form.last_name" aria-label="Default"/>
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label title">ROL</label>
                            <select  name="rol" class="form-select" aria-label="Default select example" id="rol" v-model="form.rol">
                                <option selected value="">
                                    SELECCIONA UNA OPCIÓN
                                </option>
                                <option value="Recruiter">ANALISTA DE SELECCIÓN</option>
                                <option value="Director">DIRECTOR</option> 
                                <option value="Specialist">ESPECIALISTA</option>
                                <option value="Generalist">GENERALISTA</option>
                                <option value="Generalist_comercial">GENERALISTA COMERCIAL</option>
                                <option value="Gerente">GERENTE</option> 
                                <option value="Boss">JEFE</option>
                            </select>
                        </div>
                        <div class="form-group" v-if="form.rol=='Boss' ||form.rol=='Director'||form.rol=='Gerente'">
                            <label class="col-auto col-form-label title">ÁREA</label>
                            <select name="area"  class="form-select" aria-label="Default select example" id="area" v-model="form.area">
                                <option selected value="">
                                    SELECCIONA UNA OPCIÓN
                                </option>
                                <option value="1" v-if="form.rol!='Gerente'">TIENDA</option>
                                <option value="2" v-if="form.rol!='Director'">ADMINISTRATIVO</option>
                                <option value="3" v-if="form.rol!='Gerente'">CEDI</option>
                                <option value="4" v-if="form.rol!='Gerente'">FACTORY</option>
                                <option value="5" v-if="form.rol!='Gerente'">VENTA NAL</option>
                            </select>
                        </div>
                        <div class="form-group" v-if="form.rol=='Gerente' && form.area != ''">
                            <label class="col-auto col-form-label title">GERENCIA</label>
                            <select name="area"  class="form-select" aria-label="Default select example" id="area" v-model="form.direccion">
                                <option selected value="">
                                    SELECCIONA UNA OPCIÓN
                                </option>
                                <option value="1">GESTIÓN HUMANA</option>
                                <option value="2">COMERCIAL</option>
                                <option value="3">EXPANSIÓN Y VISUAL</option>
                                <option value="4">MERCADEO Y PRODUCTO DIGITAL</option>
                                <option value="5">OPERACIONES</option>
                                <option value="6">FINANCIERA</option>
                                <option value="7">GERENCIA GENERAL</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div v-if="form.area == '1'">
                                <label class="col-auto col-form-label title">REGIONAL</label>
                                <select name="regional" class="form-select" aria-label="Default select example" id="regional" v-model="form.regional">
                                    <option selected value="">
                                        Selecciona una opcción
                                    </option>
                                    <option value="REGIONAL SUR">REGIONAL SUR</option>
                                    <option value="REGIONAL ANTIOQUIA Y SANTANDERES">REGIONAL ANTIOQUIA Y SANTANDERES</option>  
                                    <option value="REGIONAL CENTRO NORTE">REGIONAL CENTRO NORTE</option>
                                    <option value="REGIONAL COSTA">REGIONAL COSTA</option>
                                    <option value="REGIONAL CENTRO SUR">REGIONAL CENTRO SUR</option>
                                    <!-- <option value="CANAL WHOLESALE / VENTA NACIONAL">CANAL WHOLESALE / VENTA NACIONAL</option> -->
                                </select>
                            </div>
                            <div v-if="form.area == '5'">
                                <label class="col-auto col-form-label title">REGIONAL</label>
                                <select name="regional" class="form-select"  aria-label="Default select example" id="regional" v-model="form.regional">
                                    <option selected value="">
                                        Selecciona una opcción
                                    </option>
                                    <option value="NORTE">NORTE</option>
                                    <option value="CENTRO NORTE">CENTRO NORTE</option>
                                    <option value="SUR">SUR</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-auto col-form-label title" >CORREO</label>
                            <input type="text" class="form-control" name="email" id="email" v-model="form.email" aria-label="Default"/>
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label title">CONTRASEÑA</label>
                            <input name="password" type="text" class="form-control" autocomplete="new-password" id="password" v-model="form.password"/>
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label title">CONFIRMAR CONTRASEÑA</label>
                            <input name="password_confirmation" type="text"  class="form-control" autocomplete="new-password" id="password_confirmation" v-model="form.password_confirmation"/>
                        </div>
                        <div class="row d-flex justify-content-center pt-2">
                            <div class="col-md-5 d-grid gap-2">
                                <input type="submit" class="btn btn-crear" value="CREAR"/>
                            </div>
                            <div class="col-md-5 d-grid gap-2">
                                <button type="button" class="btn btn-cerrar" data-bs-dismiss="modal"> CERRAR </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form:{
              errors: [],
              password_confirmation: "",
              password: "",
              email: "",
              area: "",
              last_name: "",
              name: "",
              regional: "",
              rol: "",
              direccion: "",
              laravel_error: {},
            }
        };
    },
    props: {
        function: {
            type: Function,
        },
    },
    methods: {
        checkform(e) {
            this.form.errors = [];
            //this.$toast.success(res.data);
            if (!this.form.name) {
                this.form.errors.push("El nombre es obligatorio.");
            }
            if (!this.form.last_name) {
                this.form.errors.push("El apellido es obligatorio.");
            }
            if (!this.form.rol) {
                this.form.errors.push("El rol es obligatorio.");
            }


            if (!this.form.email) {
                this.form.errors.push("El correo electrónico es obligatorio.");
            } else if (!this.validEmail(this.form.email)) {
                this.form.errors.push("El correo electrónico debe ser válido.");
            }
            if (!this.form.password) {
                this.form.errors.push("La contraseña es obligatoria.");
            }
            if (!this.form.password_confirmation) {
                this.form.errors.push("La confirmación es obligatoria.");
            }
            if (this.form.password.length < 6) {
                this.form.errors.push(
                    "La contraseña debe contener mínimo 6 carácteres"
                );
            }
            if (this.form.password != this.form.password_confirmation) {
                this.form.errors.push("Las contraseñas deben coincidir");
            }
            if (this.form.errors.length) {
                this.form.errors
                    .reverse()
                    .forEach((element) => this.$toast.info(element));
            } else {
              axios.post('/usuario/store', this.form).then((res) => {
                if(res.data == 'error'){
                  this.$toast.error("Ya se ha creado anteriormente");
                }else{
                  console.log(1);
                  this.$toast.success(res.data);
                  this.limpiar();
                  this.$emit('traerdata');
                }
              });

            }
            // e.preventDefault();
        },
        validEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
        mostrarError() {
            this.laravel_error = this.$props.mensaje;
            if (this.laravel_error) {
                this.$toast.error("El correo ya tiene una cuenta asociada.");
            }
        },
        limpiar(){
          this.form={
              errors : [],
              password_confirmation: "",
              password: "",
              email: "",
              area: "",
              last_name: "",
              name: "",
              regional: "",
              rol: "",
            }
        },
    },
};
</script>
<style scoped>
.title {
    color: var(--text-dark-color);
}
.modal-content {
    background-color: var(--primary-color-light);
}
.btn-crear {
    background-color: var(--primary-color);
    color: var(--primary-color-light);
}
.btn-crear:hover {
    background-color: var(--text-dark-color);
    color: var(--primary-color-light);
}
.btn-cerrar {
    background-color: var(--text-color);
    color: var(--primary-color-light);
}

.btn-cerrar:hover {
    background-color: var(--text-dark-color);
    color: var(--primary-color-light);
}
/* input{
    text-transform: uppercase;
}
select{
    text-transform: uppercase;
} */
</style>
