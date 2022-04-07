<template>
    <div class="tabela">
    <aside>
        <Barra />
    </aside>
    <main class="conteudo">
        <router-view></router-view>
    </main>
    </div>
</template>

<script>
import Barra from './layouts/Barra.vue';

export default {
    components: {
        Barra
  }
}
</script>

<style>
div.tabela {
    display: grid;
    grid-template-columns: 0fr 7fr 0px;
    grid-template-rows: 0px 9fr 0fr;
    grid-template-areas:
       'top top top'
       'menu conteudo lateral-direita'
       'rodape rodape rodape';
    font-family: 'Open Sans', sans-serif;
    height: 700px;
}
aside{
    background-color: grey;
    grid-area: menu;
    font-size: 18px;
}
main.conteudo{
    background-color: ghostwhite;
    grid-area: conteudo;
}
header{
    display: block;
    background-color: #a9a9a9;
    padding: 3%;
    text-align: center;
    font-size: 25px;
}
</style>
