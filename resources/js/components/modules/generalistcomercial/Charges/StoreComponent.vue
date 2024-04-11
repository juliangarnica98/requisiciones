<template>
    <div>
        <button class="btn btn-lili" data-bs-toggle="modal" :data-bs-target="'#newcharge'">NUEVO<i class="fas fa-plus"></i></button>
      <div class="modal fade" :id="'newcharge'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content" >
                <div class="modal-body">
                    <h5 class="text-center title">NUEVO CARGO</h5>
                    <div>
                        <div class="input-group mb-3">
                            <input v-model="form.description" style="text-transform: uppercase;" type="text" class="form-control"  aria-describedby="basic-addon3" placeholder="NOMBRE DEL CARGO">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input v-model="form.efectividad" type="number" class="form-control"  aria-describedby="basic-addon3" placeholder="EFECTIVIDAD EN DIAS">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center pb-2">
                  <div class="col-md-5 d-grid gap-2">
                    <button type="button" @click="EditInterview()" class="btn btn-crear ">GUARDAR</button>
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
            
            data() {
                return {
                  form:{
                    description:"",
                    efectividad:""
                  },
                }
            },
            methods:{
                EditInterview(){
                  if (this.form.description == "" || this.form.efectividad == "") {
                    this.$toast.error("HAY CAMPOS VACIOS");
                  }else{
                      try {    
                        axios.post('/generalistcomercial/charge/store', this.form).then((res) => {
  
                          this.$toast.success(res.data);
                          this.$emit('traerdata');
                          this.$refs.Close2.click();
                        }).catch((error)=>{
                          this.$toast.error("YA EXITE CARGO CON ESE NOMBRE");
                        }
                        );
                      } catch (error) {
                        console.log(error);
                      }
                    
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