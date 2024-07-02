<template>
    <div class="page" id="page-content" >
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title">REQUISICIÓN</h1>
            <router-link class="btn btn-lili" to="/generalist/requisiciones" aria-expanded="false">
                VOLVER <i class="fas fa-undo"></i>
            </router-link>
        </div>


        <div class="" v-if="Object.keys(requisition).length >0">
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <div class="col-md-8" v-if="requisition.city.description">
                    <div class="card ">
                        <div class="card-body">
                            <h4 class="text-center">
                                DATOS ESPECIFICOS
                            </h4>
                            <hr>
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
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos administrativos -->
                <div class="col-md-8" v-if="requisition.management">
                    <div class="card ">
                        <div  class="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    DATOS ADMINISTRATIVOS
                                </h4>
                                <hr>
                                <h5 class="text-center">
                                    Gerencia: {{ requisition.management.description }}
                                </h5>
                                <h5 class="text-center">
                                    Area: {{ requisition.area_management.description }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos tienda -->
                <div class="col-md-8" v-if="requisition.regional">
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
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos cedis -->
                <div class="col-md-8" v-if="requisition.center_distribution">
                    <div class="card ">
                        <div class="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    DATOS CEDI
                                </h4>
                                <hr>
                                <h5 class="text-center">
                                    Centro de distribucion: {{ requisition.center_distribution.description }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos cedis -->
                <div class="col-md-8" v-if="requisition.person">
                    <div class="card ">
                        <div class="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    PERSONA QUE AUTORIZO
                                </h4>
                                <hr>
                                <h5 class="text-center">
                                    {{ requisition.person }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos factory -->
                <div class="col-md-8" v-if="requisition.area_factory">
                    <div class="card ">
                        <div class="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    DATOS FACTORY
                                </h4>
                                <hr>
                                <h5 class="text-center">
                                    Area: {{ requisition.area_factory.description }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card datos especificos factory -->
                <div class="col-md-8" v-if="requisition.charge">
                    <div class="card ">
                        <div class="">
                            <div class="card-body">
                                <h4 class="text-center">
                                    DATOS VENTA NACIONAL
                                </h4>
                                <hr>
                                <h5 class="text-center">
                                    Cargo: {{ requisition.charge.description }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para plan de cambio -->
                <div class="col-md-8" v-if="requisition.activation.change_name">
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
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para reemplazo -->
                <div class="col-md-8" v-if="requisition.activation.replacement_name">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                REEMPLAZO
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Nombre de a quien reemplaza: {{ requisition.activation.replacement_name }}
                            </h5>
                            <h5 class="text-center">
                                Cedula de a quien reemplaza: {{ requisition.activation.replacement_ide }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para reintegro -->
                <div class="col-md-8" v-if="requisition.activation.refund_date_retirement">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                REINTEGRO
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Fecha de retiro: {{ requisition.activation.refund_date_retirement }}
                            </h5>
                            <h5 class="text-center">
                                Fecha de reingreso: {{ requisition.activation.refund_date }}
                            </h5>
                            <h5 class="text-center">
                                Cedula del colaborador: {{ requisition.activation.refund_ide }}
                            </h5>
                            <h5 class="text-center">
                                Nombre del colaborador: {{ requisition.activation.refund_name }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para apertura de tienda -->
                <div class="col-md-8" v-if="requisition.activation.opening_date">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                APERTURA DE TIENDA
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Nombre de la tienda: {{ requisition.activation.opening_store }}
                            </h5>
                            <h5 class="text-center">
                                Fecha de apertura: {{ requisition.activation.opening_date }}
                            </h5>
                            <h5 class="text-center">
                                Categoria: {{ requisition.category.description }}
                            </h5>
    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para apertura de tienda -->
                <div class="col-md-8" v-if="requisition.nombre_ingreso">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                CANDIDATO SELECCIONADO
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                Nombre: {{ requisition.nombre_ingreso  }}
                            </h5>
                            <h5 class="text-center">
                                Cedula: {{ requisition.cedula_ingreso }}
                            </h5>
                            <h5 class="text-center">
                                Fecha ingreso: {{ requisition.fecha_ingreso  }}
                            </h5>
    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para apertura de tienda -->
                <div class="col-md-8" v-if="requisition.reason_sus && requisition.status == 'SUSPENDIDA'">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                RAZÓN POR LA QUE SE SUSPENDIO
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                {{ requisition.reason_sus  }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para apertura de tienda -->
                <div class="col-md-8" v-if="requisition.reason_rechazo">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                COMENTARIOS DE RECHAZO
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                {{ requisition.reason_rechazo  }}
                            </h5>
  
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 pt-1" >
                <!-- card para apertura de tienda -->
                <div class="col-md-8" v-if="requisition.comentarios">
                    <div class="card "  >
                        <div class="card-body">
                            <h4 class="text-center">
                                COMENTARIOS DE SELECCION
                            </h4>
                            <hr>
                            <h5 class="text-center">
                                {{ requisition.comentarios  }}
                            </h5>
  
    
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
            requisition: {},
            rut_act: this.$router.currentRoute.path,
        };
    },
    methods: {
        getUsers: function () {
            axios
                .get(
                    `/generalist/getrequisicion/${this.$route.params.area}/${this.$route.params.id}`
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
.btn-lili {
    padding: 10px 10px;
    background-color: var(--text-dark-color);
    color: var(--primary-color-light);
    
}
.card{
    border: none;
    background-color: rgb(97, 102,175);
    color: var(--toggle-color);
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
