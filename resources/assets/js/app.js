import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(VueRouter);
Vue.use(VueResource);

/* eslint-disable no-new */
var router = new VueRouter({
    history: true,
    root: 'dashboard'
});


router.map({
    '/': {
        component: require('./components/Home.vue')
    },
    '/admin/': {
        name: 'admin',
        component: require('./components/Admin.vue')
    },
    '/client': {
        name: 'site',
        component: require('./components/Client.vue')
    }
});

router.start(App, 'body');