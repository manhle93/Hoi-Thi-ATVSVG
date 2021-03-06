/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Lightbox from 'vue-easy-lightbox'
 
Vue.use(Lightbox)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('add-package', require('./components/AddPackage.vue').default);
Vue.component('show-package', require('./components/Package.vue').default);
Vue.component('add-question', require('./components/AddQuestion.vue').default);
Vue.component('show-question', require('./components/ShowQuestion.vue').default);


Vue.component('game-play', require('./components/game.vue').default);
Vue.component('game-reset', require('./components/gamereset.vue').default);
Vue.component('game-request', require('./components/resquest.vue').default);

Vue.component('doi-matkhau', require('./components/changpass.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
