@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/perfil.css')}}">
@endsection

@section('body')

@section('header')
    Perfil
@endsection
        @foreach ($usuario as $user)
            <div class="corpo">
                <label>Nome: </label>
                <input type="text" value="{{ $user->name }}" readonly><br>
            </div>

            <div class="corpo">
                <label>E-mail: </label>
                <input type="email" value="{{ $user->email }}" readonly>
            </div>

            <div class="corpo">
                <a href="/admin/perfil/editar/{id}">
                    <button>Editar perfil</button>
                </a>
            </div>
        @endforeach
@endsection

