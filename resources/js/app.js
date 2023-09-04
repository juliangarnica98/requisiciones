/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('login-component', require('./components/auth/login/Login.vue').default);
Vue.component('register-component', require('./components/auth/register/Register.vue').default);
Vue.component('admin-component', require('./components/modules/admin/IndexComponent.vue').default);
Vue.component('boss-component', require('./components/modules/user/IndexComponent.vue').default);
Vue.component('interview-component', require('./components/modules/InterviewComponent.vue').default);


import router from './routes'
// import Toasted from 'vue-toasted';
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const options = {
  confirmButtonColor: '#81D3D0',
  cancelButtonColor: '#E52B7F',
  confirmButtonText: 'CONFIRMAR',
  cancelButtonText: `CANCELAR`,
};
const option = {}



Vue.use(Toast, option);
Vue.use(VueSweetalert2, options);

const app = new Vue({
    el: '#app',
    router,
});
