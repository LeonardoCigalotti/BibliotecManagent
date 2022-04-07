<template>
    <div>
        <header>
            Gerenciamento Biblioteca - Login
        </header>
        <form method="POST">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" required><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Entrar</button>
        </form>
    </div>
</template>

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
    padding: 3px;
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
