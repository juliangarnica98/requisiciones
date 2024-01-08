<template>
    <div>
      <div class="modal fade" :id="id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content" >
                <div class="modal-body">
                    <h5 class="text-center title">EDITAR FECHA</h5>
                    <div>
                        <div class="input-group mb-3">
                            <input v-model="form.description" type="text" class="form-control"  aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input v-model="form.fecha" type="date" class="form-control"  aria-describedby="basic-addon3">
                        </div>
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
    </div>   
    </template>
    <script>
    
        export default {  
            
            props:{
                fecha:{
                type:String,
              },
              id:{
                type:Number,
                default:null
              },
              description:{
                type:String,
              }

            },
            data() {
                return {
                  form:{
                    id: this.$props.id,
                    description: this.$props.description,
                    fecha: this.$props.fecha
                  },
                }
            },
            methods:{
                EditInterview(){
                  axios.put('/generalist/edit/holidays', this.form).then((res) => {
                    this.$toast.success(res.data);
                    this.$emit('traerdata');
                    this.$refs.Close2.click();
                  });
                },
            },
            watch:{
              id(){
                console.log('cambio id' + this.id);
                this.form.id =  Object.assign(this.id, {});
                this.form.description =  Object.assign(this.description, {});
                this.form.fecha =  Object.assign(this.fecha, {});
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