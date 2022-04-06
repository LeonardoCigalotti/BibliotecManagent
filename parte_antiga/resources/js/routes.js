const Welcome = () => import('./components/inicio/Welcome.vue' /* webpackChunkName: "resource/js/components/inicio/welcome" */);
export const routes = [
    {
        name: 'inicio',
        path: '/',
        component: Welcome
    }
]
