<template>
    <div class="modal fade" :id="form.id_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">LLENA LOS CAMPOS DEL CANDIDATO SELECCIONADO</h5>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.nombre_ingreso" style="text-transform: uppercase;" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="NOMBRE COLABORADOR">
                    </div>
                </div>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.cedula_ingreso" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="CEDULA DEL COLABORADOR">
                    </div>
                </div>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.fecha_ingreso"  type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="FECHA DE INGRESO">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click="EnviarInterview()" class="btn btn-crear ">ENVIAR</button>
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
          area:{
            type:String,
          },
          id:{
            type:Number
          },

        },
        data() {
            return {
              form:{
                area: this.$props.area,
                id:this.$props.id,
                id_modal:this.$props.id,
                nombre_ingreso:"",
                cedula_ingreso:"",
                fecha_ingreso:""
              },
            }
        },
        methods:{
            EnviarInterview(){
            if(this.form.nombre_ingreso == "" || this.form.cedula_ingreso == "" || this.form.fecha_ingreso == "")
            {
                this.$toast.error("HAY CAMPOS VACIOS");
            }
            else
            {
                axios.post('/generalist/requisicion/edit2', this.form).then((res) => {
                  this.$toast.success(res.data);
                  // this.$emit('traerdata');
                  location.reload();
                });
            }
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
    option{
      text-transform: uppercase;
    }    

</style>