<template>
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
                    <td>
                        <TabelaLogado v-if="usuarioEstaLogado" />
                        <TabelaDeslogado v-else />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import TabelaDeslogado from './TabelaDeslogado.vue';
import TabelaLogado from './TabelaLogado.vue';

export default {
    components: {
        TabelaDeslogado,
        TabelaLogado
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
</style>
