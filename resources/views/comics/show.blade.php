@extends('templates.template')

@section('page_title', 'Show')

@section('content')
<a href="{{ route('comics.index') }}">Torna alla home</a>

<ul>
    <li>ID: {{ $comic->id }}</li>
    <li>TITOLO: {{ $comic->title }}</li>
    <li>DESCRIZIONE: {{ $comic->description }}</li>
    <li>
        <img src="{{$comic->thumb}}" alt="">
    </li>
    <li>PREZZO: {{ $comic->price }}</li>
    <li>TIPOLOGIA: {{ $comic->series }}</li>
    <li>DATA VENDITA: {{ $comic->sale_date }}</li>
    <li>TIPO: {{ $comic->type }}</li>
</ul>


@endsection
