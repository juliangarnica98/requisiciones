<template>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        <Aside></Aside>
        <div class="body-wrapper"  >
            <Header :name='this.name'></Header>
            <div class="container-fluid " style="height: 100vh; ">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech" >
                        <div class="container-fluid pt-3">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<script>
    import Aside from './nav/SidenavComponent.vue';
    import Header from './nav/HeaderComponent.vue';
    
    export default {
        components: { Aside, Header },
        props:['name'],
        data() {
            return {
                
            }
        },
    }
</script>
<style scoped>
    .fondo{
        background-image: url('../../../../../public/images/fondo.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
