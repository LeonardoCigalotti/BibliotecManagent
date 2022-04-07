<template>
    <div>
        <header>
            Gerenciamento Biblioteca - Editar Livro
        </header>
        <form method="post"  action=""  class="cadLivro">
            <div>
                <div>
                    <input type="text" name="id" hidden>
                </div>
                <div>
                    <label for="title" class="texto">Título</label>
                    <input type="text" class="input" name="title" id="title">
                </div>

                <div>
                    <label for="book" class="texto">Descrição do livro</label>
                    <textarea name="descricao" id="book" class="textarea"></textarea>
                </div>

                <div>
                    <label for="autor" class="texto">Autor(es)</label>
                    <input type="text" class="input" name="autor" id="autor">
                </div>

                <button type="submit" class="formButton">Editar Livro</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    
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
</style>