require('./bootstrap');
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import {routes} from './routes';

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('admin', require('./components/Admin.vue').default);
Vue.component('people', require('./components/People.vue').default);
Vue.component('photography', require('./components/Photography.vue').default);
Vue.component('graphic-design', require('./components/GraphicDesign.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('parties', require('./components/Parties.vue').default);
Vue.component('top-menu', require('./components/TopMenu.vue').default);
Vue.component('families', require('./components/Families.vue').default);
Vue.component('commercial', require('./components/Commercial.vue').default);
Vue.component('sidebar', require('./components/Sidebar.vue').default);
Vue.component('back-to-top', require('./components/BackToTop.vue').default);
Vue.component('menu-mobile', require('./components/MenuMobile.vue').default);
Vue.component('view-controller', require('./components/ViewController.vue').default);
const router = new VueRouter({
    routes,
    mode: 'history'
});
const app = new Vue({
    el: "#app",
    router,
    mounted()
    {
    }
});