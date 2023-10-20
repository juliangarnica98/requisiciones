<template>
    <div class="page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <!-- <div>
            <h1 class="text-center title">DASHBOARD</h1>
        </div> -->
        <div class="padding pt-1">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row">
                        <div class="">
                            <div class="">
                                <h1 class="text-center title">DASHBOARD ENTREVISTAS</h1>
                                <Int></Int>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center title">DASHBOARD REQUISICIONES</h1>
                                <Req></Req>
                            </div>
                        </div>
                    </div> -->
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
    background-color: rgba(3, 168, 162, 0.9);
    color: white;
    border-radius: 25px;
}
</style>
