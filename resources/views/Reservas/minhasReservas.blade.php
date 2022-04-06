@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/meusLivros.css')}}">
@endsection

@section('header')
    Minhas Reservas
@endsection

@section('body')
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
                    <th>Registrado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->title }}</td>
                    <td>{{ $reserva->descricao }}</td>
                    <td>{{ $reserva->autor }}</td>
                    <td>{{ $reserva->reservaDias }} dias</td>
                    <td>{{ $reserva->name }}</td>
                    <td>
                        <a href="/admin/minhasreservas/{{ $reserva->id }}/editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/minhasreservas/excluir/{{ $reserva->id }}"
                        onsubmit="return confirm('Tem certeza que deseja cancelar esta reserva??')">
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
