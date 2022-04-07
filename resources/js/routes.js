const Index = () => import('./components/inicio/Index.vue' /* webpackChunkName: "resource/js/components/inicio/index" */);
const Registrar = () => import('./components/inicio/Registrar.vue' /* webpackChunkName: "resource/js/components/inicio/registrar" */);
const Login = () => import('./components/inicio/Login.vue' /* webpackChunkName: "resource/js/components/inicio/login" */);

const IndexAdmin = () => import('./components/inicio/Index.vue' /* webpackChunkName: "resource/js/components/inicio/index" */);

export const routes = [
    {
        name: 'index',
        path: '/',
        component: Index
    },
    {
        name: 'registrar',
        path: '/registrar',
        component: Registrar
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'indexAdmin',
        path: '/admin/index',
        component: IndexAdmin
    }
]
