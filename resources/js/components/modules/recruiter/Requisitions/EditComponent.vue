<template>
    <div class="modal fade" :id="form.id_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">SELECCIONE EL ESTADO DE LA REQUISICION</h5>
                <div v-if="form.estado == 'ABIERTA'">
                  <select v-model="form.estado" class="form-select mt-3" aria-label="Default select example">
                      <option value="ABIERTA">ABIERTA</option>
                      <option value="EN GESTION">EN GESTIÓN</option>
                      <option value="CERRADA">CERRADA</option>
                  </select>
                </div>
                <div v-if="form.estado == 'EN GESTION'">
                  <select v-model="form.estado" class="form-select mt-3" aria-label="Default select example">
                      <option value="EN GESTION">EN GESTIÓN</option>
                      <option value="CERRADA">CERRADA</option>
                  </select>
                </div>
                <div v-if="form.estado == 'CERRADA'">
                  <select v-model="form.estado" class="form-select mt-3" aria-label="Default select example">
                      <option value="CERRADA">CERRADA</option>
                  </select>
                </div>
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
          area:{
            type:String,
          },
          id:{
            type:Number
          }
        },
        data() {
            return {
              form:{
                estado:this.$props.estado,
                area: this.$props.area,
                id:this.$props.id,
                id_modal:this.$props.area+'-'+this.$props.id
              },
            }
        },
        methods:{
            EditInterview(){
              axios.post('/recruiter/requisicion/edit', this.form).then((res) => {
                // if(res.data == 'error'){
                //   this.$toast.error("No se puede modificar el estado");
                // }else{
                //   this.$toast.success(res.data);
                //   this.$emit('traerdata');
                // }
                this.$toast.success(res.data);
                this.$emit('traerdata');
              });
            },
        },
        watch: {
          area(){
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