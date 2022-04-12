const Index = () => import('./components/inicio/Index.vue' /* webpackChunkName: "resource/js/components/inicio/index" */);
const Registrar = () => import('./components/inicio/Registrar.vue' /* webpackChunkName: "resource/js/components/inicio/registrar" */);
const Login = () => import('./components/inicio/Login.vue' /* webpackChunkName: "resource/js/components/inicio/login" */);

<<<<<<< HEAD
=======
const Perfil = () =>import('./components/usuario/Perfil.vue' /* webpackChunkName: "resource/js/components/usuario/perfil" */)

>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
const IndexAdmin = () => import('./components/livros/Inicio.vue' /* webpackChunkName: "resource/js/components/livros/inicio" */);
const MeusLivros = () => import('./components/livros/MeusLivros.vue' /* webpackChunkName: "resource/js/components/livros/meuslivros" */);
const AdicionarLivro = () => import('./components/livros/Criar.vue' /* webpackChunkName: "resource/js/components/livros/criar" */);
const EditarLivro = () => import('./components/livros/Editar.vue' /* webpackChunkName: "resource/js/components/livros/editar" */);

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
<<<<<<< HEAD
=======
        name: 'perfil',
        path: '/admin/perfil',
        component: Perfil
    },


    {
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        name: 'indexAdmin',
        path: '/admin/index',
        component: IndexAdmin
    },
    {
        name: 'meusLivros',
        path: '/admin/meuslivros',
        component: MeusLivros
    },
    {
        name: 'adicionarLivro',
        path: '/admin/novolivro',
        component: AdicionarLivro
    },
    {
        name: 'editarLivro',
        path: '/admin/editarlivro',
        component: EditarLivro
    }
]
