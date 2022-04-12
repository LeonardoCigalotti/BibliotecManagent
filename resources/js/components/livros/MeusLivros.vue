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
                Gerenciamento Biblioteca - Meus Livros
            </header>

            <router-link to="/admin/novolivro"><button class="novo">Cadastrar Livro Novo</button></router-link>

            <div class="listar">
                <table>
                    <thead class="linha">
                        <tr>
                            <th>Livro</th>
                            <th>Descrição</th>
                            <th>Autor(es)</th>
                            <th>Reservado por</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="/admin/meuslivros/{{ $livro->id }}/editar">
                                    <button class="editar">Editar</button>
                                </a>
                                <form method="post" action="/admin/meuslivros/excluir/{{ $livro->id }}"
                                onsubmit="return confirm('Tem certeza que deseja remover este livro??')">
                                    <button class="excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
</template>

<script>

export default {

}
</script>

<style>
div.listar{
    padding: 30px;
}
div.listar table{
    border-collapse: collapse;
    margin: auto;
    width: 100%;
    display:table;
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
button.novo{
    margin: 25px 0px 1px 400px;
    padding: 15px;
    text-align: center;
    font-size: 25px;
    background-color: greenyellow;
    color: black;
    border: none;
    border-radius: 25px;
    font-family: Arial, Helvetica, sans-serif;
}
button.novo:hover{
    background-color: rgb(142, 212, 36);
    text-decoration: underline;
    cursor: pointer;
    opacity: 0.7;
}
button.editar{
    padding: 15px 18px;
    margin-bottom: 1px;
    text-align: center;
    font-size: 15px;
    background-color: rgb(217, 255, 0);
    color: black;
    border: none;
    border-radius: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
button.editar:hover{
    text-decoration: underline;
    background-color: rgba(217, 255, 0, 0.623);
    cursor: pointer;
    opacity: 0.7;
}
button.excluir{
    padding: 15px;
    margin-top: 1px;
    text-align: center;
    font-size: 15px;
    background-color: rgb(255, 17, 0);
    color: black;
    border: none;
    border-radius: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
button.excluir:hover{
    text-decoration: underline;
    background-color: rgba(255, 17, 0, 0.534);
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
