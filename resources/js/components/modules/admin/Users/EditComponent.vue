<template>
    <div class="page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <div>
                <h1 class="text-center title">EDITAR USUARIO</h1>
            </div>
            <router-link class="link" to="/usuarios" aria-expanded="false" >
                    <i class="fas fa-backward"></i> VOLVER
            </router-link>
            <!-- <a @click="volver()" class="text-end link" href=""> </a> -->
        </div>
        <div class="padding pt-0">
            <div class="d-flex justify-content-center">
                <div class="col-lg-7 grid-margin">
                    <!-- <div class="card-header">
                        <div class="card-title">
                            <h5>EDITAR USUARIO</h5>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <form class="form-update">
                            <div class="form-group">
                                <h5 class="col-auto text-center title fw-bold">NOMBRE</h5>
                                <input type="text" v-model="user.name" class="form-control "/>
                            </div>
                            <div class="form-group pt-2">
                                <h5 class="col-auto text-center title fw-bold">APELLIDO</h5>
                                <input type="text"  class="form-control " v-model="user.last_name"/>
                            </div>
                            <div class="form-group pt-2">
                                <h5 class="col-auto text-center title fw-bold">EMAIL</h5>
                                <input type="email"  class="form-control " v-model="user.email"/>
                            </div>
                            <div class="form-group pt-2">
                                <h5 class="col-auto text-center title fw-bold">CONTRASEÑA</h5>
                                <input type="password"  class="form-control " v-model="pass"/>
                            </div>
                            <div class="form-group pt-2">
                                <h5 class="col-auto text-center title fw-bold">CONFIRMAR CONTRASEÑA</h5>
                                <input type="password"  class="form-control " v-model="conf_pass"/>
                            </div>                            
                            <div class="col-md-12 d-grid gap-2 pt-4">
                                <button @click="updateUser(user.id)"  type="button"  class="btn btn-lili fw-bold">ACTUALIZAR</button>
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
                this.user = Object.assign(res.data, {});
            });
        },
        updateUser: function (id) {

            if (this.pass != this.conf_pass) {
                this.$toast.error("Las contraseñas deben coincidir");
                return false;
            }
            let user = {
                name: this.user.name,
                last_name: this.user.last_name,
                email: this.user.email,
                password: this.pass,
            };
            axios.put(`/usuario/${id}`, user).then((res) => {
                this.$toast.success("Se ha editado el usuario");
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
.form-update input[type=email],
.form-update input[type=password],
.form-update input[type=text] {
    width: 100%;
    display: block;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 17px;
    border: none;
    font-weight: bold;
}

.title{
    color: var(--text-dark-color);
}
.btn-lili {
    /*border: #e85199 solid 1px;*/
    background-color: var(--primary-color);
        color: var(--toggle-color);
    
}
.btn-lili:hover {
    /*border: rgba(3, 168, 162, 1) solid 1px;*/
    background-color: var(--text-dark-color);
    color: var(--primary-color-light);

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
