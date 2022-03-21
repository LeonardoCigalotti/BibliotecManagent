@extends('layoutInicio')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/entrar.css')}}">
@endsection

@section('body')

@section('header')
Novo Registro/Register
@endsection
            <form method="POST">
                @csrf
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required><br>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Registrar</button>
            </form>
@endsection

