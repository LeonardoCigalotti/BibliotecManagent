@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/meusLivros.css')}}">
@endsection

@section('header')
    Minhas Reservas
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
                    <th>Reservado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="/admin/meuslivros//editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/meuslivros/excluir/"
                        onsubmit="return confirm('Tem certeza que deseja remover este livro??')">
                            @csrf
                            @method('DELETE')
                            <button class="excluir">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection


