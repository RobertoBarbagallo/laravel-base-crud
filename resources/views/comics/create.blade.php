@extends('templates.template')

@section('page_title', 'Create')

@section('content')
<a href="{{ route('comics.index') }}">Torna alla home</a>

@include("partials.components.errors")
<form action="{{ route('comics.store') }}" method="post" id="comicform">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title"><br>

    <label for="description">Enter description here...</label>
    <textarea rows="5" cols="50" name="description" form="comicform" id="description">
    </textarea><br>

    <label for="thumb">Path Immagine</label>
    <input type="text" name="thumb" id="thumb"><br>


    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price"><br>

    <label for="series">Serie</label>
    <input type="text" name="series" id="series"><br>

    <label for="sale_date">Data vendita</label>
    <input type="date" name="sale_date" id="sale_date"><br>

    <label for="type">tipo</label>
    <input type="text" name="type" id="type"><br>

    <input type="submit" value="Invia"><br>
</form>


@endsection
