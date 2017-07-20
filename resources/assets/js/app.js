// 0. 如果使用模块化机制编程，導入Vue和VueRouter，要调用 Vue.use(VueRouter)
import Vue from 'vue'
require('./bootstrap');

window.axios = require('axios');
window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};
import VueRouter from 'vue-router'
import store from './store/index';
import routes from './routes.js';
import {mapState} from 'vuex';

Vue.use(VueRouter)
const router = new VueRouter({
         mode: 'history',
         base:'/api/',
         routes // （缩写）相当于 routes: routes
})
const app = new Vue({
  router,
  store,
  components: {
            'mainmenu': require('./components/Mainmenu.vue')
  }

}).$mount('#app')

