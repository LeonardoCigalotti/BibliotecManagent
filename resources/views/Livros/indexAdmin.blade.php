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
                    <td>{{ $livro->semana }}</td>
                    <td><button class="reservar" onclick="myFunction()"><span nome="livroId" id="{{ $livro->id }}">Reservar</span></button></td>
                                <script>
                                    function myFunction() {
                                        let text = "Você deseja reservar este livro?";
                                        if (confirm(text) == true) {
                                            window.location.href = "http://localhost:8000/admin/reservar/{{ $livro->id }}";
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

