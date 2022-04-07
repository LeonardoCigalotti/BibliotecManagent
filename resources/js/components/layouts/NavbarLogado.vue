<template>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/inicio">Home</router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/meus-livros">Meus Livros</router-link>
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
</template>

<style>
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
