require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)




//Routes
import { routes } from './routers';



//Register Routes
const router = new VueRouter({
    routes,
    mode: 'history',
})



import App from './components/App'
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});



// import VueRouter from 'vue-router';
// import routes from './routers'
//
//
// Vue.use(VueRouter);
//
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// /*const app = new Vue({
//     el: '#app',
// });*/
//
// const app = new Vue({
//     el: '#app',
//     router: new VueRouter(routes)
// }).$mount('#app')
