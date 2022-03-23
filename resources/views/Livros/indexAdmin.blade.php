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
    @if ($errors->any())
        <div class="mensagem">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Reservado</th>
                    <th>Registrado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->title}}</td>
                        <td>{{ $livro->descricao }}</td>
                        <td>{{ $livro->autor }}</td>
                        @if (!empty($livros->reserva))
                            <td>Reservado</td>
                        @else
                            <td>Disponível</td>
                        @endif
                        <td>{{ $livro->name }}</td>
                        <td>
                            <a href="/admin/reservar/{{ $livro->id }}">
                                <button class="reservar" onclick="myFunction()">Reservar</button>
                            </a>
                        </td>
                            <script>
                                function myFunction() {
                                    let text = "Você deseja reservar este livro?";
                                    if (confirm(text) == true) {
                                        windows.close;
                                    } else {
                                        windows.close;
                                    }
                                }
                            </script>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

