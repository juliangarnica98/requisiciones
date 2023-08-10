<template>
    <div class="page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1>Editar usuario</h1>
            <router-link class="link" to="/usuarios" aria-expanded="false" >
                    <i class="fas fa-backward"></i> VOLVER
            </router-link>
            <!-- <a @click="volver()" class="text-end link" href=""> </a> -->
        </div>
        <div class="padding pt-5">
            <div class="d-flex justify-content-center">
                <div class=" col-lg-8 grid-margin">
                    <!-- <div class="card-header">
                        <div class="card-title">
                            <h5>EDITAR USUARIO</h5>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <form>
                            <div class="row ">
                                <div class="col-md-4 d-flex justify-content-end"><label for="">NOMBRE</label></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" v-model="user.name" class="form-control "/>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-4 d-flex justify-content-end"><label for="">APELLIDO</label></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text"  class="form-control " v-model="user.last_name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-4 d-flex justify-content-end"><label for="">EMAIL</label></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="email"  class="form-control " v-model="user.email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-4 d-flex justify-content-end"><label for="">CONTRASEÑA</label></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="password"  class="form-control " v-model="pass"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-4 d-flex justify-content-end"><label for="">CONFIRMAR CONTRASEÑA</label></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="password"  class="form-control " v-model="conf_pass"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pt-3 ">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-8 d-grid gap-2">
                                        <button @click="updateUser(user.id)"  type="button"  class="btn btn-lili">ACTUALIZAR</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
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
            pass: "",
            conf_pass: "",
            user: {
                created_at: null,
                email: null,
                email_verified_at: null,
                id: null,
                last_name: null,
                name: null,
                updated_at: null,
            },
            rut_ant: "/usuarios",
            rut_act: this.$router.currentRoute.path,
        };
    },
    methods: {
        getUser: function () {
            axios.get(`/getusuario/${this.$route.params.id}`).then((res) => {
                // this.user = res.data;
                this.user = Object.assign(res.data, {});
                console.log(this.user);
            });
        },
        updateUser: function (id) {
            if (this.pass != this.conf_pass) {
                this.$toasted.error("LAS CONTRASEÑAS DEBEN SER IGUALES");
                return false;
            }
            let user = {
                name: this.user.name,
                last_name: this.user.last_name,
                email: this.user.email,
                password: this.pass,
            };
            axios.put(`/usuario/${id}`, user).then((res) => {
                this.$toasted.success(res.data);
                this.$router.go(-1);
            });
        },
    },
    mounted() {
        this.getUser();
    },
};
</script>
<style scoped>
.btn-lili {
    background-color: #e85199;
    color: white;
    border-radius: 25px;
}
.btn-lili:hover {
    background-color: rgba(3, 168, 162, 0.9);
    color: white;
    border-radius: 25px;
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


</style>
