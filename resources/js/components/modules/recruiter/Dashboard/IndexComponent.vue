<template>
    <div class="page-container" id="page-content">
        <!-- <Nav :actual="this.rut_act"></Nav> -->
        <div>
            <h1 class="text-center title">DASHBOARD</h1>
        </div>
        <div class="padding pt-5">
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 grid-margin">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>ENTREVISTAS</b></h5>
                                <Int></Int>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> <b>REQUISICIONES</b></h5>
                                <Req></Req>
                            </div>
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
    color: var(--text-dark-color);
}
.border-none{
    border: 0;
}
.table-head{
    background:var(--primary-color);;
    color: var(--toggle-color);
}
</style>
