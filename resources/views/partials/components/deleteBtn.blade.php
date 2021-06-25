<form action="{{ route('comics.destroy', $id) }}" method="post" class="eraser">
  @csrf
  @method('DELETE')

  <input type="submit" value="Cancella">
</form>