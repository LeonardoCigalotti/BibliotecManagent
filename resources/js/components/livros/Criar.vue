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
                Gerenciamento Biblioteca - Novo Livro
            </header>

           <form  @submit.prevent="criarLivro" class="cadLivro">
                <div>
                    <div>
                        <label for="title" class="texto">Título</label>
                        <input v-model="title" type="text" class="input" name="title" id="title" required>
                    </div>

                    <div>
                        <label for="book" class="texto">Descrição do livro</label>
                        <textarea v-model="descricao" name="descricao" id="book" class="textarea" required></textarea>
                    </div>

                    <div>
                        <label for="autor" class="texto">Autor(es)</label>
                        <input v-model="autor" type="text" class="input" name="autor" id="autor" required>
                    </div>

                    <button type="submit" class="formButton">Cadastrar Livro</button>
                </div>
            </form>
        </main>
</template>

<script>
export default {
    data(){
        return {
            title:'',
            descricao:'',
            autor:''
        }
    },
    methods: {
        criarLivro(){
            let title = this.title;
            let descricao = this.descricao;
            let autor = this.autor;
             this.axios.get(`/api/newlivro?title=${title}&descricao=${descricao}&autor=${autor}`)
                    .then(promise =>(
                       //this.$router.push({name:"indexAdmin"})
                       console.log(promise.data.data)
                    ))
                    .catch(error =>{
                        console.log(error)
                    });
        }
    }
}
</script>

<style scoped>
form.cadLivro{
    display: block;
    margin: auto;
    width: 70%;
    padding: 30px;
    padding-left: 100px;
    padding-right: 100px;
}
label.texto{
    font-size: 14pt;
    font-weight: bold;
    display: block;
    text-align: left;
    margin-bottom: 5px;
    margin-top: 20px;
}
input.input, textarea.textarea{
    width: 90%;
    height: 35px;
    padding-left: 15px;
    border: 1px solid black;
    border-radius: 5px;
}
textarea.textarea{
    height: 150px;

}
button.formButton{
    text-align: right;
    margin: 20px 0px;
    margin-left: 300px;
    background-color: greenyellow;
    font-size: 18px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid black;
}
button.formButton:hover{
    background-color: rgb(119, 177, 31);
    opacity: 0.7;
    text-decoration: underline;
    cursor: pointer;
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
