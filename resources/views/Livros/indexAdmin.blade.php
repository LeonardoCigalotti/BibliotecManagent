@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/inicio.css')}}">
@endsection

@section('header')
    Início
@endsection

@section('body')
    @if(!empty($mensagem))
    <div class="mensagem">
        <p>   {{ $mensagem }} </p>
    </div>
    @endif

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Registrado por</th>
                    <th>Reservado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->title}}</td>
                    <td>{{ $livro->descricao}}</td>
                    <td>{{ $livro->autor}}</td>
                    <td>{{$usuarios}}</td>
                    <td>##</td>
                    <td><button class="reservar">Reservar</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

