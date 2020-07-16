require('./bootstrap');

window.Vue = require('vue');

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.component('test', require('./components/Test.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);

const app = new Vue({
    el: '#root'
});
