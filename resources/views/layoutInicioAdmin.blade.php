<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('css/layoutInicio.css')}}">
    <title>Gerenciamento de Biblioteca</title>
    @yield('css')
</head>
<body>
    <div class="tabela">
        <aside class="menu">
            <ul>
            <li><a href="/admin/index">Inicio</a></li>
                <li><a href="/admin/meuslivros">Meus Livros</a></li>
                <li id="reservas"><a id="none" href="/admin/minhasreservas">Minhas Reservas</a></li>
                <li><a href="#">Meu Perfil</a></li>
                <li><a href="/sair">Sair</a></li>
            </ul>
            <footer>
                <p>&copy;Copyright 2022 Leonardo Cigalotti</p>
            </footer>
        </aside>
        <main class="conteudo">
        <header>
            Gerenciamento Biblioteca - @yield('header')
        </header>
            @yield('body')
        </main>
    </div>
</body>
</html>

