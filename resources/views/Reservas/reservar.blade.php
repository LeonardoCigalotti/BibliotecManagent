@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/cadLivro.css')}}">
@endsection

@section('header')
    Reservando livro
@endsection

@section('body')
<form method="post"  action="/admin/reservar/{id}"  class="cadLivro">
    @csrf
    <div>
        <div>
            <input type="text" name="id" value="{{ $livro->id }}" hidden>
        </div>
        <div>
            <label for="title" class="texto">Título</label>
            <input type="text" class="input" name="title" id="title" value="{{ $livro->title }}" readonly>
        </div>

        <div>
            <label for="book" class="texto">Descrição do livro</label>
            <textarea name="descricao" id="book" class="textarea" readonly>{{ $livro->descricao }}</textarea>
        </div>

        <div>
            <label for="autor" class="texto">Autor(es)</label>
            <input type="text" class="input" name="autor" id="autor" value="{{ $livro->autor }}" readonly>
        </div>

        <div>
            <label for="semana" class="texto">Quantas semanas?</label>
            <select id="semana" name="semana">
                <option value="1">1 Semana</option>
                <option value="2">2 Semanas</option>
                <option value="3">3 Semanas</option>
                <option value="4">4 Semanas</option>
            </select>
        </div>

        <button type="submit" class="formButton">Reservar Livro</button>
    </div>
</form>
@endsection


