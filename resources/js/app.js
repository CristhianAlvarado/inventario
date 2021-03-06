/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import lang from 'element-ui/lib/locale/lang/es'
import locale from 'element-ui/lib/locale'
import moment from 'moment';

locale.use(lang)



export default ElementUI;

Vue.use(ElementUI, { size: 'small' })

Vue.prototype.$eventHub = new Vue()


Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('periodo-component', require('./components/PeriodoComponent.vue').default);

//Componentes de almacen
Vue.component('almacen-index', require('./views/almacen/index.vue').default);
Vue.component('almacen-create', require('./views/almacen/form.vue').default);
Vue.component('almacen-series', require('./views/almacen/series.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
