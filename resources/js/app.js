/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
//componente de multi-select


//Componentes de login y entrevista
Vue.component('login-component', require('./components/auth/login/Login.vue').default);
Vue.component('interview-component', require('./components/modules/InterviewComponent.vue').default);

//componentes de diferentes roles
Vue.component('admin-component', require('./components/modules/admin/IndexComponent.vue').default);
Vue.component('boss-component', require('./components/modules/user/IndexComponent.vue').default);
Vue.component('director-component', require('./components/modules/director/IndexComponent.vue').default);
Vue.component('recruiter-component', require('./components/modules/recruiter/IndexComponent.vue').default);
Vue.component('generalist-component', require('./components/modules/generalist/IndexComponent.vue').default);
Vue.component('specialist-component', require('./components/modules/specialist/IndexComponent.vue').default);
Vue.component('generalistcomercial-component', require('./components/modules/generalistcomercial/IndexComponent.vue').default);

//componente de librerias
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('apexchart', VueApexCharts);


import router from './routes'
// import Toasted from 'vue-toasted';
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import VueApexCharts from 'vue-apexcharts'

const options = {
  confirmButtonColor: '#81D3D0',
  cancelButtonColor: '#E52B7F',
  confirmButtonText: 'CONFIRMAR',
  cancelButtonText: `CANCELAR`,
};
const option = {}



Vue.use(Toast, option);
Vue.use(VueSweetalert2, options);
Vue.use(VueApexCharts);

const app = new Vue({
    el: '#app',
    router,
});
