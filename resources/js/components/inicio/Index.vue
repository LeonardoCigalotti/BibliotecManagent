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
                Gerenciamento Biblioteca - Início
            </header>

            <div class="listar">
                <table>
                    <thead class="linha">
                        <tr>
                            <th>Livro</th>
                            <th>Descrição</th>
                            <th>Autor(es)</th>
                            <th>Reservado</th>
                            <th>Registrado por</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="reservar" @click="Reservar()">Reservar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
</template>

<script>

export default {
     methods: {
        Reservar(){
            let text = "Você não está logado\nDeseja logar?";
            if (confirm(text) == true) {
                window.location.href = "/entrar";
            } else {
                windows.close;
            }
        }
    }
}
</script>

<style>
div.listar{
    padding: 30px;
    padding-left: 50px;
    padding-right: 50px;
}

div.listar table{
    border-collapse: collapse;
    display: block;
    margin: auto;
}

div.listar th{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 25px;
    padding: 10px;
    text-align: center;
    border: solid black;
    font-family: Arial, Helvetica, sans-serif;
}

div.listar td{
    font-size: 15px;
    padding: 10px;
    text-align: center;
    border: solid black;
    font-family: Arial, Helvetica, sans-serif;
}
button.reservar{
    padding: 10px;
    text-align: center;
    font-size: 15px;
    background-color: cyan;
    color: black;
    border: none;
    border-radius: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
button.reservar:hover{
    text-decoration: underline;
    background-color: rgb(5, 197, 197);
    cursor: pointer;
    opacity: 0.7;
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
