@extends('layoutInicio')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/entrar.css')}}">
@endsection

@section('body')

@section('header')
Entrar/Login
@endsection
            <form method="POST">
                @csrf
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required><br>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Entrar</button>
            </form>
@endsection

