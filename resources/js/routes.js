const Registrar = () => import('./components/inicio/Registrar.vue' /* webpackChunkName: "resource/js/components/inicio/registrar" */);

const Welcome = () => import('./components/inicio/Welcome.vue' /* webpackChunkName: "resource/js/components/inicio/welcome" */);
export const routes = [
    {
        name: 'inicio',
        path: '/',
        component: Welcome
    },
    {
        name: 'registrar',
        path: '/registrar',
        component: Registrar
    }
]
