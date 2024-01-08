<template>
    <div class="page-container" id="page-content">
       
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row" >
                        <div class="">
                            <div class="">
                                <h1 class="text-start title " >DASHBOARD ENTREVISTAS</h1>
                                <!-- <h1 class="text-center title">DASHBOARD <i class="fas fa-chart-bar"></i></h1> -->
                              
                                <Int></Int>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="">
                            <div class="">
                                <h2 class="text-start title">DASHBOARD REQUISICIONES </h2>
                                <Req></Req>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
    </div>
</template>

<script>
import Req from  './Requisition/IndexComponent.vue';
import Int from  './Interview/IndexComponent.vue';
export default {
    components:{Req,Int},
    data() {
        return {
        };
    },
};
</script>
<style scoped>
.title{
    font-size: 1.5rem;
    color: var(--text-dark-color);
}
.border-none{
    border: 0;
}
.table-head{
    background:var(--primary-color);;
    color: var(--toggle-color);
}
.btn-lili {
    background-color: #e85199;
    color: white;
    border-radius: 25px;
}
.btn-lili:hover {
    background-color:  #a87bc7;
    color: white;
    border-radius: 25px;
}
</style>
