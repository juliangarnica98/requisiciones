<template>
    <div class="page" id="page-content" >
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-center title">REQUISICIÓN</h1>
            <router-link class="link" to="/requisiciones" aria-expanded="false">
                <i class="fas fa-backward"></i> VOLVER
            </router-link>
        </div>


        <!-- {{ requisition }} -->

        <div class="row d-flex justify-content-center mt-5 pt-5">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body">
                        <h4 class="text-center">
                            DATOS ESPECIFICOS 
                        </h4>
                        <hr>
                        <h5 class="text-center">
                            Encargado: {{ requisition.requisition.user.name }}
                            {{ requisition.requisition.user.last_name }}
                        </h5>
                        <h5 class="text-center">
                            Ciudad: {{ requisition.city.description }}
                        </h5>
                        <h5 class="text-center">
                            Sexo: {{ requisition.sex.description }}
                        </h5>
                        <h5 class="text-center">
                            Tipo vacante: {{ requisition.activation.type_activation.description }}
                        </h5>
                        <h5 class="text-center">
                            Cargo: {{ requisition.activation_charge.description }}
                        </h5>
                        <h5 class="text-center">
                            Comentarios: {{ requisition.comentaries }}
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" v-if="requisition.regional">
                <div class="card ">
                    <div  class="">
                        <div class="card-body">
                            <h4 class="text-center">
                                DATOS DE LA TIENDA
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Regional: {{ requisition.regional.description }}
                            </h5>
                            <h5 class="text-center">
                                Nombre de la tienda: {{ requisition.name_store }}
                            </h5>
                            <h5 class="text-center">
                                Categoria: {{ requisition.category.description }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" v-if="requisition.center_distribution">
                <div class="card ">
                    <div class="">
                        <div class="card-body">
                            <h4 class="text-center">
                                DATOS DE LA CEDI
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Centro de distribucion: {{ requisition.center_distribution.description }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4" v-if="requisition.activation.change_name">
                <div class="card "  >
                    <div class="card-body">
                        <h4 class="text-center">
                            PLAN DE CAMBIO
                        </h4>
                        <hr>
                        <h5 class="text-center">
                            Nombre: {{ requisition.activation.change_name }}
                        </h5>
                        <h5 class="text-center">
                            Identificación: {{ requisition.activation.change_ide }}
                        </h5>
                        <h5 class="text-center">
                            Razon: {{ requisition.activation.change_reason }}
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" v-if="requisition.activation.change_name">
                <div class="card "  >
                    <div class="card-body">
                        <h4 class="text-center">
                            REEMPLAZO
                        </h4>
                        <hr>
                        <h5 class="text-center">
                            Nombre: {{ requisition.activation.change_name }}
                        </h5>
                        <h5 class="text-center">
                            Identificación: {{ requisition.activation.change_ide }}
                        </h5>
                        <h5 class="text-center">
                            Razon: {{ requisition.activation.change_reason }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row d-flex justify-content-center mt-1 "> -->
        <!-- </div> -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            requisition: {},
            rut_act: this.$router.currentRoute.path,
        };
    },
    methods: {
        getUsers: function () {
            axios
                .get(
                    `/getrequisicion/${this.$route.params.area}/${this.$route.params.id}`
                )
                .then((res) => {
                    this.requisition = Object.assign(res.data, {});
                    // this.requisition = res.data;
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
    border: none;
    background-color: var(--primary-color);
    color: var(--toggle-color);
}
.title {
    color: var(--text-dark-color);
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
    background-color: #00ab9f;
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
