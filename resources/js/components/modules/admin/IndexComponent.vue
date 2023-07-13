<template>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        <Aside></Aside>
        <div class="body-wrapper">
            <Header></Header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech">
                        <router-view></router-view>
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
