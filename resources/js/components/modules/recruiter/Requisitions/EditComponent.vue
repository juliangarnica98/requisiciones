<template>
    <div class="modal fade" :id="form.id_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">SELECCIONE EL ESTADO DE LA REQUISICION</h5>
                <h5 class="text-center title">ESTADO ACTUAL: {{ form.estado }}</h5>
                <div v-if="form.estado == 'ABIERTA'">
                  <select v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                      <option value="ABIERTA">ABIERTA</option>
                      <option value="EN GESTION">EN GESTIÓN</option>
                  </select>
                </div>
                <div v-if="form.estado == 'EN GESTION'">
                  
                  <select v-if="area == 'admin'" v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                      <option value="EN GESTION">EN GESTIÓN</option>
                      <option v-if="substate == 'CONTRATACIÓN'" value="CERRADA">CERRADA</option>
                  </select>

                  <select v-else v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                    <option value="EN GESTION">EN GESTIÓN</option>
                    <option value="CERRADA">CERRADA</option>
                  </select>

                  <div class="" v-if="area=='admin'">
                    <h5 class="text-center title mt-3">SELECCIONE EL SUBESTADO</h5>
                    <h5 class="text-center title">ESTADO ACTUAL: {{ substate }}</h5>
                    <select  v-model="form.substate" class="form-select " aria-label="Default select example">
                        <option value="RECLUTAMIENTO">RECLUTAMIENTO</option>
                        <option value="TERNA">TERNA</option>
                        <option value="CONTRATACIÓN">CONTRATACIÓN</option>
                    </select>
                  </div>

                </div>
                <div v-if="form.estado == 'CERRADA'">
                  <select v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                      <option value="CERRADA">CERRADA</option>
                  </select>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click="EditInterview()" class="btn btn-crear ">MODIFICAR</button>
              </div>
              <div class="col-md-5 d-grid gap-2">
                <button type="button" ref="Close2" class="btn btn-cerrar "  data-bs-dismiss="modal">CERRAR</button>
              </div>
            </div>
        </div>
      </div>
    </div>
</template>
<script>

    export default {  
        
        props:{
          estado:{
            type:String,
          },
          area:{
            type:String,
          },
          id:{
            type:Number
          },
          substate:{
            type:String,
            default: null,
          }
        },
        data() {
            return {
              form:{
                estado:this.$props.estado,
                area: this.$props.area,
                id:this.$props.id,
                id_modal:this.$props.area+'-'+this.$props.id,
                substate:this.$props.substate,
                estado_envio:"",
                substate:""
              },
            }
        },
        methods:{
            EditInterview(){
              axios.post('/recruiter/requisicion/edit', this.form).then((res) => {
                this.$toast.success(res.data);
                this.$emit('traerdata');
                this.form.estado = this.form.estado_envio;
                if(this.form.estado == ""  ){
                      this.form.estado = 'EN GESTION'
                      console.log(1);
                    }
                this.$refs.Close2.click();
                // setTimeout(() => {
                //   location.reload();
                // }, 2500);
              });
            },
        },
        watch: {
          area(){
            this.form.estado = this.estado
            this.form.area = this.area
            this.form.id = this.id
            this.form.substate = this.substate
            this.form.id_modal = this.area+'-'+this.id           
          }
        },
    
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
    

</style>