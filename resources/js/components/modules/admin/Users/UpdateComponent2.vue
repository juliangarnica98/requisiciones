<template>
    <div class="modal fade" :id="form.id_modal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
              {{ user }}
                <h5 class="text-center title"> <b>SELECCIONE NUEVO RECLUTADOR</b></h5>
                <div>
                  <select v-model="form.new_user" class="form-select mt-3" aria-label="Default select example">
                      <option class="py-2" v-for="user in form.users" :value="user.id">{{ user.name}} {{ user.last_name}}</option>
                  </select>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click="EditBoss()" class="btn btn-crear ">REASIGNAR</button>
              </div>
              <div class="col-md-5 d-grid gap-2">
                <button type="button" class="btn btn-cerrar "  data-bs-dismiss="modal">CERRAR</button>
              </div>
            </div>
        </div>
      </div>
    </div>
</template>
<script>

    export default {  
        
        props:{
          user:{
            type:String,
          },
        },
        data() {
            return {
              form:{
                users:{},
                new_user:"",
                user:this.$props.user,
                id_modal:this.$props.user
              },
              upda:{
                user:"",
                new_user:""
              }
            }
        },
        methods:{
            EditBoss(){
              if(this.form.new_user == ""){
                this.$toast.info('SE DEBE SELECCIONAR UN RECLUTADOR')
              }else{
                this.upda.user = this.user
                this.upda.new_user = this.form.new_user
                axios.post('/newreclutador/reasignar',this.upda).then((res) => {
                  this.$toast.success(res.data)
                  });
              }
            },
            getRecruiter(){
                try {
                    axios.get('/reclutador/reasignar').then((res) => 
                    {
                        this.form.users = res.data.users
                    });
                } catch (error) {
                    console.log(error);
                }
               
            }
        },    
        mounted(){
          this.getRecruiter();
        }
    }
</script>
<style scoped>
    .title{
      color: var(--text-dark-color);
    }
    .modal-content{
      background-color: var(--primary-color-light);
    }
    .btn-crear{
      background-color: var(--primary-color);
      color: var(--primary-color-light);
    }
    .btn-crear:hover{
      background-color: var(--text-dark-color);
      color: var(--primary-color-light);
    }
    .btn-cerrar{
      
      background-color: var(--text-color);
      color: var(--primary-color-light);
    }

    .btn-cerrar:hover{
        background-color: var(--text-dark-color);
        color: var(--primary-color-light);
    }
    option{
      padding-top: 10px;
      padding-bottom: 10px;
      text-transform: uppercase;
    }
    

</style>