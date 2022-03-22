@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/perfil.css')}}">
@endsection

@section('body')

@section('header')
Perfil
@endsection
            @foreach ($usuarios as $usuario)
            <div class="corpo">
                <label>Nome: </label>
                <input type="text" value="{{ $usuario->name }}" readonly><br>
            </div>

            <div class="corpo">
                <label>E-mail: </label>
                <input type="email" value="{{ $usuario->email }}" readonly>
            </div>

            <div class="corpo">
                <button> Trocar senha</button>
            </div>
            @endforeach


@endsection

