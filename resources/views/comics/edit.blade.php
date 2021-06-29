  @extends('templates.template')

  @section('page_title', 'Edit')

  @section('content')
  <a href="{{ route('comics.index') }}">Torna alla home</a>


  @include("partials.components.errors")

  <form action="{{ route('comics.update', $comic) }}" method="post" id="comicform">
      @csrf

      @method('PATCH')

      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" value="{{old('title',  $comic->title)}}"><br>



      <label for="description">Enter description here...</label>
      <textarea rows="5" cols="50" name="description" name="description" form="comicform" id="description">{{old('description',  $comic->description)}}
      </textarea><br>

      <label for="thumb">Path Immagine</label>
      <input type="text" name="thumb" id="thumb" value="{{old('thumb',  $comic->thumb)}}"><br>


      <label for="price">Prezzo</label>
      <input type="text" name="price" id="price" value="{{old('price',  $comic->price)}}"><br>

      <label for="series">Serie</label>
      <input type="text" name="series" id="series" value="{{old('series',  $comic->series)}}"><br>

      <label for="sale_date">Data vendita</label>
      <input type="date" name="sale_date" id="sale_date" value="{{old('sale_date',  $comic->sale_date)}}"><br>

      <label for="type">tipo</label>
      <input type="text" name="type" id="type" value="{{old('type',  $comic->type)}}"><br>


      <input type="submit" value="Salva">
  </form>

  @endsection
