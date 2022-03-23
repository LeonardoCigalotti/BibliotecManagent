@extends('layoutInicioAdmin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{url('css/cadLivro.css')}}">
@endsection

@section('header')
    Editando Reserva
@endsection

@section('body')
<form method="post"  action="/admin/minhasreservas/update/{id}"  class="cadLivro">
    @csrf
    @method('PUT')
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
            <label for="reservaDias" class="texto">Acrescentar dias (max 5 dias, min 1 dia)</label>
            <input type="number"  id="reservaDias" name="reservaDias" min="1" max="5" value="5">
        </div>


        <button type="submit" class="formButton">Editar Reserva</button>
    </div>
</form>
@endsection


