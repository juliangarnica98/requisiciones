<template>
<div>
  <a class="link text-white" data-bs-toggle="modal" :data-bs-target="'#'+area+'-'+id"><i class="fas fa-pencil-alt"></i></a>
  <div class="modal fade" :id="form.id_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" >
            <div class="modal-body">
                <h5 class="text-center title">SELECCIONE EL ESTADO DE APROBACIÓN</h5>
                <div >
                  <select  v-model="form.state" class="form-select mt-3" aria-label="Default select example">
                    <option value="" selected>SIN ASIGNACIÓN</option>
                    <option value="ACEPTADA">ACEPTADA</option>
                    <option value="RECHAZADA">RECHAZADA</option>
                  </select>
 
                </div>
                <div class="form-group" v-if="form.state == 'RECHAZADA'">
                  <h6 class="title">COMENTARIOS</h6>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.comments"></textarea>
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
                area:this.$props.area,
                id:this.$props.id,
                id_modal:this.$props.area+'-'+this.$props.id,
                state:"",
                comments:""
              },
            }
        },
        methods:{
            EditInterview(){
              if (this.form.state == ""  ) {
                this.$toast.error("DEBE SELECCIONAR UN ESTADO");
              } else {
                axios.post('/generalistcomercial/requisicion/edit', this.form).then((res) => {
                    this.$toast.success(res.data);
                    this.$emit('traerdata');
                    this.form.estado = this.form.estado_envio;
                    
                    this.$refs.Close2.click();
                  
                });
              }
            },
        },
        watch: {
          area(){
            this.form.estado = this.estado
            this.form.area = this.area
            this.form.id = this.id
            this.form.id_modal = this.area+'-'+this.id       
            this.form.substate = this.substate  
          
          },
          id(){
            this.form.estado = this.estado
            this.form.area = this.area
            this.form.id = this.id
            this.form.id_modal = this.area+'-'+this.id       
            this.form.substate = this.substate  
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