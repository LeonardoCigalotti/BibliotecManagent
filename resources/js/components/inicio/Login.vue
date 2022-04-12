<template>
        <aside class="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                <router-link class="nav-link" to="/login">Login</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/registrar" class="nav-link">Registre-se</router-link>
                </li>
            </ul>
        </aside>
        <main class="conteudo">
            <header>
                Gerenciamento Biblioteca - Login
            </header>

            <div>
                <form @submit.prevent="fazerLogin">
                    <label for="email">E-mail:</label>
                    <input  v-model="email" type="text" id="email" name="email" required><br>

                    <label for="password">Senha:</label>
                    <input v-model="senha" type="password" id="password" name="password" required><br><br>

                    <button type="submit">Entrar</button>
                </form>
            </div>
        </main>
</template>

<script>
export default {
    data(){
        return {
            email:'',
            senha:''
        }
    },
    methods: {
        fazerLogin(){
            let password = this.senha;
            let email = this.email;
             this.axios.get(`/api/entrar?password=${password}&email=${email}`)
                    .then(promise =>(
                       this.$router.push({name:"indexAdmin"})
                       //console.log(promise.data.data)
                    ))
                    .catch(error =>{
                        console.log(error)
                    });
        }
    }
}
</script>

<style>
form{
    display: block;
    text-align: center;
    padding: 20px;
}
form label{
    font-size: xx-large;
    text-align: center;
}
form input{
    width: 600px;
    height: 40px;
    margin-top: 8px;
    padding: 3px;
    margin-left: 5px;
}
form button{
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 25px;
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
}
</style>
