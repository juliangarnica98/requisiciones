<template>
    <div class=" page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1>Usuarios</h1>
        </div>
        <div class="padding pt-5">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row pt-2" >
                        <div class="card border-none rounded-pill table-head">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>NOMBRE</b></div>
                                    <div class="col-md-2 text-center"><b>APELLIDO</b></div>
                                    <div class="col-md-2 text-center"><b>EMAIL</b> </div>
                                    <div class="col-md-2 text-center"><b>ROL</b> </div>
                                    <div class="col-md-4 text-center"><b>ACCIONES</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div v-for="(user,index) in users" class="card border-none table-body rounded-pill ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 text-center"><b>{{user.name}}</b></div>
                                    <div class="col-md-2 text-center"><b>{{user.last_name}}</b></div>
                                    <div class="col-md-2 text-center"><b>{{user.email}}</b> </div>
                                    <div class="col-md-2 text-center"><b>ROL</b> </div>
                                    <div class="col-md-4 text-center"><b>
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
                    
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
 export default {
    data() {
        return{
            users:[],
            rut_act:this.$router.currentRoute.path,
        }
    },
    methods:{
        ver:function(){
            // console.log('Hola Julio')
        },
        getUsers:function(){
            axios.get('/getusuaios')
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
                    axios.delete(`//127.0.0.1:8000/deleteuser/${id}`)
                    .then((res) => {
                        this.$toasted.success(res.data)
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
    .border-none{
        border: 0;
    }
    .table-head{
        background-color:#e85199 ;
        color: #fff;
    }
    .table-body{
        /*border-color: red;*/
        /*border: 1px solid #03a8a2;*/
        background-color: rgba(3,168,162,0.5);
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
