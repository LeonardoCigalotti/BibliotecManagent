<template>
        <aside class="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <router-link class="nav-link" to="/admin/index">Home</router-link>
                </li>
                <li class="nav-item">
                <router-link class="nav-link" to="/admin/meuslivros">Meus Livros</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/admin/minhas-reservas" class="nav-link">Minhas Reservas</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/admin/perfil" class="nav-link">Perfil</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/sair" class="nav-link">Logout</router-link>
                </li>
            </ul>
        </aside>
        <main class="conteudo">
            <header>
                Gerenciamento Biblioteca - Perfil
            </header>

            <div class="corpo">
                <div v-for="user in users" :key="user.id">
                    <div class="corpo">
                        <label>Nome: </label>
                        <input type="text" readonly><br>
                    </div>

                    <div class="corpo">
                        <label>E-mail: </label>
                        <input type="email" readonly>
                    </div>

                    <div class="corpo">
                        <a href="/admin/perfil/editar/{id}">
                            <button>Editar perfil</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
</template>

<script>

export default {
    data(){
        return {
            users:[]
        }
    },
    mounted(){
        this.mostrarPerfil()
    },
    methods:{
        async mostrarPerfil(){
            await this.axios.get('/api/perfil').then(response=>{
                this.users = response.data
            }).catch(error =>{
                console.log(error);
            });
        }
    }
}
</script>

<style>
div.corpo{
    display: block;
    text-align: center;
    margin-top: 20px;
    padding: 20px;
}
label{
    font-size: 30px;
    padding: 40px 0px 0px 0px;
    margin-top: 20px;
}
input{
    width: 50%;
    padding: 10px;
    font-size: 20px;
}
button{
    background-color: rgb(224, 151, 98);
    padding: 5px 10px;
    font-size: 16px;
    margin: 10px;
}
form button{
    background-color: greenyellow;
    margin-left: 500px;
    padding: 6px 12px
}
ul {
    padding-inline-start: 5px;
    margin-top: 80px;
    list-style: none;
    width: 120px;
    height: 50px;
    padding: 10px;
}

li {
    position: relative;
    margin-top: 40px;
    list-style: none;
    width: 120px;
    height: 30px;
    text-align: center;
    padding: 10px 0px 0px;
}
.nav-link {
    color: rgb(0, 0, 255);
    cursor: pointer;
    border-radius: 25px;
}
.nav-link:hover {
    padding: 10px;
    color: blue;
    background-color: #ababab;
    border-radius: 25px;
    border: 1px solid black;
    cursor: pointer;
    text-decoration-line: underline;
}
</style>

