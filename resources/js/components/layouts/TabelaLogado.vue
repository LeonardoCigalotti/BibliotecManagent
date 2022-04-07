<template>
    <a href="#">
        <button class="reservar" @click="ReservarAdmin()">Reservar</button>
    </a>
</template>

<script>
export default {
    methods: {
        ReservarAdmin() {
            let text = "Você deseja reservar este livro?";
                if (confirm(text) == true) {
                    windows.close;
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
