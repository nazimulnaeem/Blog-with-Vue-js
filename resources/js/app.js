
require('./bootstrap');


window.Vue = require('vue');


// for vuex support
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"
const store = new Vuex.Store(storeData)
// end vuex support

// editor support for textarea
import 'v-markdown-editor/dist/index.css';
import Editor from 'v-markdown-editor'
// global register
Vue.use(Editor);
// end editor support

//===== support moment js for date and time formate ======/////
import {filter} from "./filter"
//==== end moment js======///

// vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from './routes';
// end vue router



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-master', require('./components/admin/AdminMaster.vue').default);
Vue.component('home-page', require('./components/public/PublicMaster.vue').default);

// v-form

import { Form, HasError, AlertError } from 'vform'
/// form ta jodi ami globaly use korte chai tahole window.form aakare define kore dite hobe
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
// end v form

// for sweet alert2 message
import Swal from 'sweetalert2'
window.swal = Swal;
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
// window.toast = Toast
// end sweet alert2

const router = new VueRouter({
    routes, // short for `routes: routes`
    // mode:'history'
    mode:'hash'
  })


  // app.js er mordhe amra jatogula instance toiri korbo sobgulo vue instance er mordhe define kore dite hobe 
  // na hole kaj korbena 
const app = new Vue({
    el: '#app',
    router,
    store   

});
