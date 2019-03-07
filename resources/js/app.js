/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app-components', require('./components/App.vue').default);
Vue.component('background-component', require('./components/Background.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('aboutus-component', require('./components/AboutUs.vue').default);
Vue.component('menu-component', require('./components/Menu.vue').default);
Vue.component('thisweek-component', require('./components/ThisWeek.vue').default);
Vue.component('gallery-component', require('./components/Gallery.vue').default);
Vue.component('contact-component', require('./components/Contact.vue').default);
Vue.component('fullpage-component', require('./components/FullPage.vue').default);
// Vue.component('section-container', require('./components/SectionContainer.vue').default);



/**
 * import vue full page plugin and use it within vue instance
 */
import Scrollspy from 'vue2-scrollspy';
import VueFullPage from 'vue-fullpage.js'

Vue.use(Scrollspy);
// Vue.use(Scrollspy, options);
Vue.use(VueFullPage);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
