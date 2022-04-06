<template>
    <button class="reservar" @click="Reservar()">Reservar</button>
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

<style scoped>
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
</style>

