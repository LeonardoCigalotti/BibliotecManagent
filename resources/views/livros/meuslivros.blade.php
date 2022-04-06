@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/meusLivros.css')}}">
@endsection

@section('header')
    Meus Livros
@endsection

@section('body')
    <a href="{{route('criar_livros') }}">
        <button class="novo">Cadastrar livro novo</button>
    </a>
    @if ($errors->any())
        <div class="mensagem">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(!empty($mensagem))
        <div class="mensagem">
            <p> {{ $mensagem }} </p>
        </div>
    @endif

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Reservado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->title}}</td>
                    <td>{{ $livro->descricao}}</td>
                    <td>{{ $livro->autor}}</td>
                    @if (!empty($livro->reservaDias))
                        <td>{{ $livro->reservaDias }} dias</td>
                    @else
                        <td>Nenhuma reserva</td>
                    @endif
                    <td>
                        <a href="/admin/meuslivros/{{ $livro->id }}/editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/meuslivros/excluir/{{ $livro->id }}"
                        onsubmit="return confirm('Tem certeza que deseja remover este livro??')">
                            @csrf
                            @method('DELETE')
                            <button class="excluir">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection


