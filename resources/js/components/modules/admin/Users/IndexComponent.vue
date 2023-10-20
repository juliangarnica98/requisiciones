<template>
    <div class=" page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-center title">USUARIOS</h1>
        </div>
        <div class="row  pt-5">
            <div class="col-md-1">
                <div class="d-grid gap-2">
                    <button class="btn btn-lili" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></button>
                    <Store @traerdata="getUsers"></Store>
                </div>
            </div>   
        </div>
        <div class="padding pt-5">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>NOMBRE</b></div>
                                    <div class="col-md-2 text-center"><b>APELLIDO</b></div>
                                    <div class="col-md-2 text-center"><b>EMAIL</b> </div>
                                    <div class="col-md-2 text-center"><b>ROL</b> </div>
                                    <div class="col-md-2 text-center"><b>ÁREA</b> </div>
                                    <div class="col-md-2 text-center"><b>ACCIONES</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="(user,index) in users.data" class="card border-none table-body ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b style="text-transform: uppercase;">{{user.name}}</b></div>
                                    <div class="col-md-2 text-center"><b style="text-transform: uppercase;">{{user.last_name}}</b></div>
                                    <div class="col-md-2 text-center"><b >{{user.email}}</b> </div>
                                    <!-- <div class="col-md-2 text-center"><b>ROL</b> </div> -->
                                    <div class="col-md-2 text-center">
                                        <div class="" v-if="user.roles[0].name=='Boss'">
                                            <B>JEFE</B>
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Admin'">
                                            <B>ADMIN</B>
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Generalist'">
                                            <B>GENERALISTA</B>
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Director'">
                                            <B>DIRECTOR</B>
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Recruiter'">
                                            <B>RECLUTADOR</B>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center"><b>
                                        <div class="" v-if="user.area=='1'">
                                            <B>TIENDA</B>
                                        </div>
                                        <div class="" v-if="user.area=='2'">
                                            <B>ADMINISTRATIVO</B>
                                        </div>
                                        <div class="" v-if="user.area=='3'">
                                            <B>CEDI</B>
                                        </div>
                                        <div class="" v-if="user.area=='4'">
                                            <B>FACTORY</B>
                                        </div>
                                        <div class="" v-if="user.area=='5'">
                                            <B>VENTA NAL</B>
                                        </div>
                                    </b> </div>
                                    <div class="col-md-2 text-center"><b>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-3">
                                                <a class="link" v-if="user.id!=1" @click="deleteUser(user.id)" style="cursor: pointer;"> 
                                                    <span class="h4" >
                                                        <i class="ti ti-trash"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <router-link class="link" :to="{name:'usuario',params:{id: user.id}}" aria-expanded="false" >
                                                    <span class="h4" >
                                                        <i class="ti ti-pencil"></i>
                                                    </span>
                                                </router-link>
                                            </div>
                                            
                                        </div>
                                    </b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <pagination class="d-flex justify-content-center" :data="users" @pagination-change-page="getUsers">
                        <span slot="prev-nav">ANTERIOR</span>
                        <span slot="next-nav">SIGUIENTE</span>
                    </pagination>
                    
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Store from './StoreComponent.vue';
    export default {
    components:{Store},
    data() {
        return{
            users:{},
            rut_act:this.$router.currentRoute.path,
        }
    },
    methods:{
        ver:function(){
            // console.log('Hola Julio')
        },
        getUsers(page = 1){
            axios.get('/getusuaios?page='+page)
            .then((res) => { 
                this.users = res.data;     
            });
        },
        deleteUser: function (id){
            this.$swal({
                title: '¿Estas seguro?',
                showCancelButton: true,
                }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`/deleteuser/${id}`)
                    .then((res) => {
                        this.$toast.success(res.data)
                        this.getUsers();
                    });
                }
                })
        }


    },
    mounted() {
        this.getUsers();
    }
};
</script>
<style scoped>
    .title{
        color: var(--text-dark-color);
    }
    .border-none{
        border: 0;
    }
    .table-head{
        background:var(--primary-color);;
        color: var(--toggle-color);
    }
    .table-body{
        /*border-color: red;*/
        /*border: 1px solid #03a8a2;*/
        background-color: #00aB9f;
        color: var(--toggle-color);
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
    .btn-lili {
        padding: 10px 0;
        /*border: #e85199 solid 1px;*/
        background-color: var(--text-color);
        color: var(--primary-color-light);
        
    }
    .btn-lili2 {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--primary-color);
        color: var(--primary-color-light);
    } 
    .btn-lili:hover {
        /*border: rgba(3, 168, 162, 1) solid 1px;*/
        background-color: var(--text-dark-color);
        color: var(--primary-color-light);

    }
</style>
