<template>
    <div class="page-container " id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-start title " >USUARIOS</h1>
        </div>
        <div class="row  pt-3">
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-lili" data-bs-toggle="modal" data-bs-target="#exampleModal">NUEVO <i class="fas fa-plus"></i></button>
                    <Store @traerdata="getUsers"></Store>
                </div>
            </div>   
        </div>
        <div class="row justify-content-center pt-2">
            <div class="col-md-6">
                <input class="form-control" type="text" v-model="form.buscar_usuario" placeholder="BUSCAR" @input="search" style="text-transform: uppercase;">
            </div>
        </div>   
        <div class="padding pt-3 ">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-1" >
                        <div class="card border-none  table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>NOMBRE</b></div>
                                    <div class="col-md-2 text-center"><b>APELLIDO</b></div>
                                    <div class="col-md-3 text-center"><b>EMAIL</b> </div>
                                    <div class="col-md-3 text-center"><b>ROL</b> </div>
                                    <!-- <div class="col-md-2 text-center"><b>ÁREA</b> </div> -->
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
                                    <div class="col-md-3 text-center"><b >{{user.email}}</b> </div>
                                    <!-- <div class="col-md-2 text-center"><b>ROL</b> </div> -->
                                    <div class="col-md-3 text-center">
                                        <div class="" v-if="user.roles[0].name=='Boss'">
                                           JEFE
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Admin'">
                                            ADMIN
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Generalist'">
                                            GENERALISTA
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Director'">
                                            DIRECTOR
                                        </div>
                                        <div class="" v-if="user.roles[0].name=='Recruiter'">
                                            ANALISTA
                                        </div>

                                        <div class="" v-if="user.roles[0].name=='Generalist_comercial'">
                                            GENERALISTA COMERCIAL
                                        </div>

                                        <div class="" v-if="user.roles[0].name=='Specialist'">
                                            ESPECIALISTA
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-2 text-center"><b>
                                        <div class="" v-if="user.area=='1'">
                                            TIENDA -<span v-if="user.regional != null"> {{ user.regional }}</span>

                                        </div>
                                        <div class="" v-if="user.area=='2'">
                                            ADMINISTRATIVO
                                        </div>
                                        <div class="" v-if="user.area=='3'">
                                            CEDI
                                        </div>
                                        <div class="" v-if="user.area=='4'">
                                            FACTORY
                                        </div>
                                        <div class="" v-if="user.area=='5'">
                                            VENTA NAL -<span v-if="user.regional != null"> {{ user.regional }}</span>
                                        </div>
                                    </b> </div> -->
                                    <div class="col-md-2 text-center"><b>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-3" >
                                                <a class="link" v-if="user.id!=1" @click="deleteUser(user.id)" style="cursor: pointer;"> 
                                                    <span class="h4 text-white" >
                                                        <i class="ti ti-trash"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <router-link class="link" :to="{name:'usuario',params:{id: user.id}}" aria-expanded="false" >
                                                    <span class="h4 text-white" >
                                                        <i class="ti ti-pencil"></i>
                                                    </span>
                                                </router-link>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="link" v-if="user.id!=1 && (user.roles[0].name=='Boss' || user.roles[0].name=='Director')" data-bs-toggle="modal" :data-bs-target="'#'+user.id"> <span class="h5 text-white"><i class="fas fa-sync"></i></span> </a>
                                                <Update @traerdata="getUsers" :user="user.id" :rol="user.roles[0].name" :area="user.area" :regional="user.regional"></Update>
                                                <a class="link" v-if="user.id!=1 && (user.roles[0].name=='Recruiter')" data-bs-toggle="modal" :data-bs-target="'#'+user.name+'_'+user.last_name"> <span class="h5 text-white"><i class="fas fa-sync"></i></span> </a>
                                                <Reclutador @traerdata="getUsers" :user="user.name+'_'+user.last_name"></Reclutador>
                                            </div>
                                            
                                            
                                        </div>
                                    </b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <pagination class="d-flex justify-content-center" :limit="5" :data="users" @pagination-change-page="getUsers">
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
    import Update from './UpdateComponent.vue';
    import Reclutador from './UpdateComponent2.vue';
    export default {
    components:{Store, Update, Reclutador},
    data() {
        return{
            users:{},
            rut_act:this.$router.currentRoute.path,
            validation:"",
            form:{
                buscar_usuario:"",
            }
        }
    },
    methods:{
        ver:function(){
            // console.log('Hola Julio')
        },
        getUsers(page = 1){
            this.users={}
            axios.get('/getusuaios?page='+page)
            .then((res) => { 
                
                this.users = res.data.users;     
                this.validation = res.data.validation;
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
                        console.log(res);
                        if (res.data == 'ERROR') {
                            this.$toast.error("DEBE REASIGNAR EL USUARIO")
                        } else {
                            this.$toast.success(res.data)
                            this.getUsers();
                        }
                    });
                }
                })
        },
        search(){
                if (this.buscar_usuario == '') {
                    this.getUsers();
                } else {
                    axios.post('/user/search',this.form)
                    .then((res) => {
                        this.users = {},
                        this.users = Object.assign(res.data.users, {});
                    });
                }
            }


    },
    mounted() {
        this.getUsers();
    }
};
</script>
<style scoped>
.title{
    font-size: 1.5rem;
    color: var(--text-dark-color);
}    .border-none{
        border: 0;
    }
    .table-head{
        background:var(--primary-color);
        color: var(--toggle-color);

        /*background:var(--primary-color);
        color: var(--toggle-color);*/
    }
    .table-body{
        /*border-color: red;*/
        /*border: 1px solid #03a8a2;*/
        /*border: #6266AE 3px solid;*/
        background-color: rgb(97, 102,175) ;
        color: #fff;
        font-size: 0.7rem;
        font-weight: 500;
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
        padding: 10px 10px;
        /*border: #e85199 solid 1px;*/
        background-color: var(--text-dark-color);
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
