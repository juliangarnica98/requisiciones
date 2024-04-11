<template>
  <div >
    <a class="link text-white"  data-bs-toggle="modal" :data-bs-target="'#'+area+'-'+id+'-'+estado"><i class="fas fa-user-check"></i></a>    



    <div class="modal fade" :id="form.id_modal" data-bs-backdrop="static"  tabindex="-1" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">LLENA LOS CAMPOS DEL CANDIDATO SELECCIONADO</h5>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.nombre_ingreso" style="text-transform: uppercase;" type="text" class="form-control"  aria-describedby="basic-addon3" placeholder="NOMBRE COLABORADOR">
                    </div>
                </div>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.cedula_ingreso" type="number" class="form-control"  aria-describedby="basic-addon3" placeholder="CEDULA DEL COLABORADOR">
                    </div>
                </div>
                <div>
                    <div class="input-group mb-3">
                      <input v-model="form.fecha_ingreso"  type="date" class="form-control"  aria-describedby="basic-addon3" placeholder="FECHA DE INGRESO">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-2">
              <div class="col-md-5 d-grid gap-2">
                <button type="button" @click.prevent="EnviarInterview()" class="btn btn-crear ">ENVIAR</button>
              </div>
              <div class="col-md-5 d-grid gap-2">
                <button type="button" ref="Close" class="btn btn-cerrar"  data-bs-dismiss="modal">CERRAR</button>
              </div>
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
          estado:{
            type:String
          },
        },
        data() {
            return {
              form:{
                area: this.$props.area,
                id:this.$props.id,
                id_modal:this.$props.area+'-'+this.$props.id+'-'+this.$props.estado,
                nombre_ingreso:"",
                cedula_ingreso:"",
                fecha_ingreso:"",
               
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
                  axios.post('/specialist/requisicion/edit2', this.form).then((res) => {
                    this.$toast.success(res.data);
                    this.$emit('traerdata');
                    this.$refs.Close.click();

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