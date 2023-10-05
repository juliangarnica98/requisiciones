<template>
    <div>
        <div class="sidenav">
            <div class="d-flex justify-content-center centrar-vertical">
                <div :class="['text-white']">
                    <h2 :class="'text-center'">
                        
                      REQUISICIÓN DEL PERSONAL
                    </h2>
                    <p>REGISTRATE O INICIA SESIÓN PARA ACCEDER</p>
                </div>
            </div>
        </div>
        <div class="main" :class="'d-flex justify-content-center'">
            <div class="col-md-6 col-sm-12 ">
                <div class="login-form " >
                    <form method="POST" action="/register" id="register" @submit="checkform">
                        <input type="hidden" name="_token" :value="csrf" />
                        <div class="form-group">
                            <label class="col-auto col-form-label">Nombre</label>
                            <input 
                                type="text"
                                class="form-control rounded-pill"
                                name="name"
                                id="name"
                                v-model="name"
                                aria-label="Default" 
                            />
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label">Apellido</label>
                            <input 
                                type="text"
                                class="form-control rounded-pill"
                                name="last_name"
                                id="last_name"
                                v-model="last_name"
                                aria-label="Default" 
                            />
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label">Área</label>
                            <select name="area" class="form-select rounded-pill" aria-label="Default select example" 
                            id="area" v-model="area">
                                <option selected value="">Selecciona una opcción</option>
                                <option value="1">Tienda</option>
                                <option value="2">Administrativo</option>
                                <option value="3">Cedi</option>
                                <option value="4">Factory</option>
                                <option value="5">Venta Nal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label">Correo</label>
                            <input 
                                type="text"
                                class="form-control rounded-pill"
                                name="email"
                                id="email"
                                v-model="email"
                                aria-label="Default" 
                            />
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label">Contraseña</label>
                            <input
                                name="password"
                                type="password"
                                class="form-control rounded-pill"
                                 autocomplete="new-password"
                                id="password"
                                v-model="password"
                                
                            />
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label">Confrimar contraseña</label>
                            <input
                                name="password_confirmation"
                                type="password"
                                class="form-control rounded-pill"
                                 autocomplete="new-password"
                                id="password_confirmation"
                                v-model="password_confirmation"
                            />
                        </div>
                        <input
                            class="btn col-12 gradient-custom-2 mb-3 mt-3 rounded-pill btn-lili"
                            type="submit" value="REGISTRATE"
                        >
                        <a class="btn col-12 gradient-custom-2 mb-3 rounded-pill btn-yoi"
                            href="/login"
                            >INICIA SESIÓN
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        mensaje:Object,
    },
    data: () => ({
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        errors:[],
        password_confirmation:"",
        password:"",
        email:"",
        area:"",
        last_name:"",
        name:"",
        laravel_error:{},

    }),
    methods:{
        checkform(e){
            this.errors=[];
            //this.$toast.success(res.data);
            if (!this.name) {
                this.errors.push("El nombre es obligatorio.");
            }
            if (!this.last_name) {
                this.errors.push("El apellido es obligatorio.");
            }
            if (!this.area) {
                this.errors.push("El área es obligatorio.");
            }
            
            if (!this.email) {
                this.errors.push('El correo electrónico es obligatorio.');
            } else if (!this.validEmail(this.email)) {
                this.errors.push('El correo electrónico debe ser válido.');
            }
            if (!this.password) {
                this.errors.push("La contraseña es obligatoria.");
            }
            if (!this.password_confirmation) {
                this.errors.push("La confirmación es obligatoria.");
            }
            if(this.password.length<6){
                this.errors.push('La contraseña debe contener mínimo 6 carácteres');
            }
            if(this.password != this.password_confirmation){
                this.errors.push('Las contraseñas deben coincidir');
            }
            if (this.errors.length) {
                this.errors.reverse().forEach((element) =>this.$toast.info(element));

            }else{
                return true;
            }
            e.preventDefault();
        },
        validEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
        mostrarError(){
            this.laravel_error = this.$props.mensaje;
            if(this.laravel_error){
                this.$toast.error('El correo ya tiene una cuenta asociada.')
            }
        }
    },
    mounted(){
        this.mostrarError();
    }
};
</script>

<style lang="css" scoped>
.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
    font-size: 1.3rem;
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    align-items: center; /* Centrar verticalmente */
    height: 100vh; /* Establece la altura del contenedor */
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 5%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
     
    }

    .register-form{
        margin-top: 20%;
    }
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
.centrar-vertical{
   padding-top: 50%;
}
.btn-lili{
    background-color: #E52B7F !important;
    transition: 0.5s !important;
    font-weight: bold !important;
    /* font-size: 1.1rem ; */
}
.btn-lili:hover{
   font-size: 1.3rem;
}
.btn-yoi{
    background-color: #54D1D1 !important;
    transition: 0.5s !important;
    font-weight: bold !important;
}
.btn-yoi:hover{
    font-size: 1.3rem;
}
.form-control{
    font-size: 1.1rem !important;
}
</style>
