@extends('layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/cadLivro.css')}}">
@endsection

@section('header')
    Adicionar novo livro
@endsection

@section('body')
<form method="post" class="cadLivro">
    @csrf
    <div>
        <div>
            <label for="title" class="texto">Título</label>
            <input type="text" class="input" name="title" id="title">
        </div>

        <div>
            <label for="book" class="texto">Descrição do livro</label>
            <textarea name="body" id="book" class="textarea"></textarea>
        </div>

        <div>
            <label for="autor" class="texto">Autor(es)</label>
            <input type="text" class="input" name="autor" id="autor">
        </div>

        <button type="submit" class="formButton">Cadastrar Livro</button>
    </div>
</form>
@endsection

