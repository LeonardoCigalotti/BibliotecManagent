<template>
  <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Reservado por</th>
                    <th>Registrado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> dias</td>
                    <td></td>
                    <td>
                        <a href="/admin/minhasreservas/{{ $reserva->id }}/editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/minhasreservas/excluir/{{ $reserva->id }}"
                        onsubmit="return confirm('Tem certeza que deseja cancelar esta reserva??')">
                            <button class="excluir">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
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
</style>
