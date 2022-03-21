@extends('layoutInicio')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/layoutInicio.css')}}">
@endsection

@section('body')

@section('header')
Entrar/Login
@endsection
            <form>
                <label for="email">E-mail:</label>
                <input type="tex" id="email"><br>
                <label for="password">Senha:</label>
                <input type="password" id="password"><br><br>
                <button type="submit">Entrar</button>
            </form>
@endsection

