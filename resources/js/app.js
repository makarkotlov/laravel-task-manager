
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

<<<<<<< HEAD
// window.Vue = require('vue');
=======
window.Vue = require('vue');
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

<<<<<<< HEAD
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
=======
Vue.component('example-component', require('./components/ExampleComponent.vue'));
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
// const app = new Vue({
//     el: '#app'
// });
=======
const app = new Vue({
    el: '#app'
});
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
