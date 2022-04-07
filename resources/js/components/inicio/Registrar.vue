<template>
    <div>
        <header>
            Gerenciamento Biblioteca - Registrar-se
        </header>
        <form @submit.prevent="adicionarUsuario">
            <label for="name">Nome:</label>
            <input  v-model="nome" type="text" id="name" name="name" class="form-control" required><br>

            <label for="email">E-mail:</label>
            <input v-model="email" type="text" id="email" name="email" class="form-control"  required><br>

            <label for="password">Senha:</label>
            <input v-model="senha" type="password" id="password" name="password" class="form-control"  required><br><br>

            <button>Registrar</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            form: [],
            nome:'',
            email:'',
            senha:''
        }
    },
    methods: {
        adicionarUsuario(){
            this.axios.post('/api/registrar', this.form)
                    .then(promise =>(
                        this.$router.push({name:"index"})
                    ))
                    .catch(error =>{
                        console.log(error)
                    });
        }
    }
}
</script>

<style scoped>
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
</style>
