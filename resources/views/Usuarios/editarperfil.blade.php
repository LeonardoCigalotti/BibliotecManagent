@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/perfil.css')}}">
@endsection

@section('body')

@section('header')
    Editar Perfil
@endsection

@if ($errors->any())
    <div class="mensagem">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
    </div>
@endif
            <form method="POST" action="/admin/perfil/editar/{id}">
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="id" value="{{ $usuario->id }}" hidden>
                </div>
                <div class="corpo">
                    <label for="name">Novo Nome: </label>
                    <input type="text" class="input" name="name" id="name" value="{{ $usuario->name }}">
                </div>

                <div class="corpo">
                    <label for="email">Novo Nome: </label>
                    <input type="email" class="input" name="email" id="email" value="{{ $usuario->email }}">
                </div>

                <button type="submit">Atualizar</button>
            </form>
@endsection

