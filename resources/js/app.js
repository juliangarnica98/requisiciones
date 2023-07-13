/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-component', require('./components/auth/login/Login.vue').default);
Vue.component('register-component', require('./components/auth/register/Register.vue').default);
Vue.component('app-component', require('./components/modules/admin/IndexComponent.vue').default);


import router from './routes'

const app = new Vue({
    el: '#app',
    router
});
