require('./bootstrap');
import { createApp } from 'vue';
window.Vue = require('vue');

import App from './components/App.vue';
import VueResource from 'vue-resource';
import { createRouter, createWebHistory } from 'vue-router';
import { routes } from './routes';

const router = new createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(router);
app.mount("#app");
