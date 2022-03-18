@extends('navbar')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
@endsection

@section('header')
    Entrar/login
@endsection

@section('body')

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" required>
        </div>

        <button type="submit" class="entrar">Entrar</button>
    </form>
    <a href="#">
        <button class="registrar">
            Registrar-se
        </button>
    </a>

@endsection

