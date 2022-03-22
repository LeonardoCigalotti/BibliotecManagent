@extends('layoutInicio')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/inicio.css')}}">
@endsection

@section('body')

@section('header')
Início/Home
@endsection
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
                    <td>##</td>
                    <td><button class="reservar" onclick="myFunction()">Reservar</button></td>

                    <script>
                        function myFunction() {
                            let text = "Você não está logado\nDeseja logar?";
                            if (confirm(text) == true) {
                                window.location.href = "http://localhost:8000/entrar";
                            } else {
                                windows.close;
                            }
                        }
                    </script>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
