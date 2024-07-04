<template>
    
  <div class="modal fade" :id="id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">SELECCIONE EL ESTADO DE LA REQUISICION</h5>
                <h5 class="text-center title">ESTADO ACTUAL: {{ form.estado }}</h5>
                <div v-if="form.estado == 'ABIERTA'">
                  <select v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                      <!-- <option value="ABIERTA">ABIERTA</option> -->
                      <option value="SUSPENDIDA">SUSPENDER</option>
                      <option value="CANCELADA">CANCELAR</option>
                  </select>
                  <input v-if="form.estado_envio == 'SUSPENDIDA'" type="text" class="form-control mt-3" v-model="form.reason_sus" placeholder="RAZÓN">
                </div>
                <div class="mt-3" v-if="form.estado == 'SUSPENDIDA'">
                  <select v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                    <option value="REACTIVAR">REACTIVAR</option>
                    <option value="CANCELADA">CANCELAR</option>
                </select>
                </div>
                <!-- <div v-if="form.estado == 'CANCELADA'">
                  <select v-model="form.estado_envio" class="form-select mt-3" aria-label="Default select example">
                      <option value="CANCELADA">CANCELADA</option>
                  </select>
                </div> -->
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click="EditInterview()" class="btn btn-crear ">MODIFICAR</button>
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
          estado:{
            type:String,
          },
          id:{
            type:Number
          },
          area:{
            type:Number
          }
        },
        data() {
            return {
              form:{
                estado:this.$props.estado,
                id:this.$props.id,
                id_modal:this.$props.id,
                area:this.$props.area,
                estado_envio:"",
                reason_sus:"",
              },
            }
        },
        methods:{
            EditInterview(){
              axios.post('/boss/requisicion/edit', this.form).then((res) => {
                this.$toast.success(res.data);
                this.$emit('traerdata');
                this.form.estado = this.form.estado_envio;
                if(this.form.estado_envio== "REACTIVAR"){
                  this.form.estado = 'ABIERTA'
                }
              });
            },
        },
        watch: {
          area(){
            this.form.estado = this.estado
            this.form.area = this.area
            this.form.id = this.id
            this.form.id_modal = this.area+'-'+this.id           
          },
          id(){
            this.form.estado = this.estado
            this.form.area = this.area
            this.form.id = this.id
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