<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">INGRESE LA CEDULA</h5>
                <input type="text" class="form-control" v-model="form.num_document" id="" placeholder="">
                <select
                  v-model="form.area"
                  class="form-select mt-3"
                  aria-label="Default select example"
              >
                  <option selected value="">
                      SELECCIONA EL ÁREA
                  </option>
                  <option value="1">CEDI</option>
                  <option value="2">
                      ADMINISTRATIVOS
                  </option>
                  <option value="3">
                      COMERCIAL(TIENDAS)
                  </option>
                  <option value="4">
                      COMERCIAL VENTA NAL
                  </option>
              </select>
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click="storeInterview()" class="btn btn-crear ">CREAR</button>
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
        
        data() {
            return {
              form:{
                num_document:"",
                area:"",
              },
            }
        },
        props:{
          function:{
            type:Function,
          }
        },
        methods:{
            storeInterview(){
              axios.post('/recruiter/entrevista/store', this.form).then((res) => {
                if(res.data == 'error'){
                  this.$toast.error("Ya se ha creado anteriormente");
                }else{
                  this.$toast.success(res.data);
                  this.form.num_document="";
                  this.$emit('traerdata');
                }
              });
            },
            
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