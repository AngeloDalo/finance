require('./bootstrap');

window.Vue = require('vue');

import App from './views/App';
import All from './pages/All';
import Campagna from './pages/Campagna';
import Casa from './pages/Casa';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:  [
            {
                path: '/',
                name: 'apartment',
                props: true,
                component: All
            },
            {
                path: '/transazioni-campagna',
                name: 'campagna',
                component: Campagna
            },
            {
                path: '/transazioni-casa',
                name: 'casa',
                component: Casa
            },
        ]
});

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});
