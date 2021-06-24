@extends('templates.template')

@section('page_title', 'Index')

@section('content')
<a href="{{ route('comics.create') }}">Aggiungi Fumetto...</a>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Titolo</th>
      <th>Prezzo</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
    @foreach($comics as $comic)
    <tr>
      <td>{{ $comic->id }}</td>
      <td>{{ $comic->title }}</td>
      <td>{{ $comic->price }}</td>
      <td><a href="{{ route('comics.show', $comic->id) }}">Dettagli...</a></td>
    </tr>
    @endforeach
  </tbody>

</table>

    
@endsection