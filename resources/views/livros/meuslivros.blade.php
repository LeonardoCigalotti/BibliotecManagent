@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/inicio.css')}}">
@endsection

@section('header')
    Meus Livros
@endsection

@section('body')
    <a href="{{route('criar_livros') }}">
        <button class="novo">Cadastrar livro novo</button>
    </a>

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
                    <td>##</td>
                    <td>##</td>
                    <td>
                        <button class="Editar">Editar</button>
                        <button class="Editar">Excluir</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
