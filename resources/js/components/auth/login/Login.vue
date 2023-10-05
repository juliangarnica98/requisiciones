<template>
    <div>
        <div class="sidenav">
            <div class="d-flex justify-content-center centrar-vertical">
                <div :class="['text-white']">
                    <h2 :class="'text-center'">Página de inicio de sesión</h2>
                    <p>Inicia sesión o regístrate desde aquí para acceder.</p>
                </div>
            </div>
        </div>
        <div class="main" :class="'d-flex justify-content-center'">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form method="POST" action="/login" @submit="chekform" id="login">
                        <input type="hidden" name="_token" :value="csrf" />
                        <div class="">
                            <label class="col-auto col-form-label"
                                >Correo</label
                            >
                            <input
                                type="text"
                                class="form-control rounded-pill"
                                name="email"
                                aria-label="Default"
                                v-model="email"
                            />
                        </div>
                        <div class="form-group">
                            <label class="col-auto col-form-label"
                                >Contraseña</label
                            >
                            <input
                                v-model="passowrd"
                                name="password"
                                type="password"
                                class="form-control rounded-pill"
                            />
                        </div>
                        <input
                            class="btn col-12 gradient-custom-2 mb-3 mt-3 rounded-pill btn-lili"
                            type="submit" value="INICIA SESIÓN"
                        >
                        <!-- <a
                            class="btn col-12 gradient-custom-2 mb-3 rounded-pill btn-yoi"
                            href="/register"
                            >REGISTRATE
                        </a> -->
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
        csrf: document
            .querySelector('meta[name="csrf-token"]').getAttribute("content"),          
            email:'',
            passowrd:'',
            erros:[],
            laravel_error:{},


    }),
    methods:{
        chekform(e){
            this.errors=[]
            if (!this.email) {
                this.errors.push('El correo es obligatorio')
            }
            if(!this.passowrd){
                this.errors.push('La contraseña es obligatoria')
            }
            if (this.errors.length) {
                this.errors.reverse().forEach((element) =>this.$toast.info(element));
            }else{
                return true;
            }
        e.preventDefault();
        
        },
        mostrarError(){
            this.laravel_error = this.$props.mensaje;
            if(this.laravel_error){
                this.$toast.error('Credenciales incorrectas. Por favor, intenta de nuevo.')
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
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
}

@media screen and (max-width: 450px) {
    .login-form {
        margin-top: 10%;
    }

    .register-form {
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px) {
    .main {
        margin-left: 40%;
    }

    .sidenav {
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form {
        margin-top: 50%;
    }

    .register-form {
        margin-top: 20%;
    }
}

.login-main-text h2 {
    font-weight: 300;
}

.btn-black {
    background-color: #000 !important;
    color: #fff;
}
.centrar-vertical {
    padding-top: 50%;
}
.btn-lili {
    background-color: #e52b7f !important;
    transition: 0.5s !important;
    font-weight: bold !important;
    /* font-size: 1.1rem ; */
}
.btn-lili:hover {
    font-size: 1.3rem;
}
.btn-yoi {
    background-color: #54d1d1 !important;
    transition: 0.5s !important;
    font-weight: bold !important;
}
.btn-yoi:hover {
    font-size: 1.3rem;
}
.form-control {
    font-size: 1.1rem !important;
}
</style>
