require('./bootstrap')
import { createApp } from 'vue';
window.Vue = require('vue');

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './components/App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import { routes } from './routes';


const router = new createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(VueAxios, axios)
app.use(router);
app.mount("#app");



