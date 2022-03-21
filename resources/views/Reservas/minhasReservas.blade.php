@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/inicio.css')}}">
@endsection

@section('header')
    Minhas Reservas
@endsection

@section('body')

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
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
                    <td>
                        <form method="post" action="/admin/meuslivros/excluir/{{ $livro->id }}"
                        onsubmit="return confirm('Tem certeza que deseja remover este livro??')">
                            @csrf
                            @method('DELETE')
                            <button class="excluir">Cancelar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection


