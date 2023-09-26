@extends('layouts.main')

@section('container')
  <section>
    <h1>Edit Book</h1>
    <form action="{{ route("book.update", $book) }}" method="post">
      @method('put')
      @csrf
      <div>
        <label for="inputTitle">Title</label>
        <input id="inputTitle" type="text" name="title" value="{{ $book->title }}" autofocus required>
      </div>
      <div>
        <label for="inputAuthor">Author</label>
        <input id="inputAuthor" type="text" name="author" value="{{ $book->author }}" required>
      </div>
      <div>
        <label for="inputSynopsis">Synopsis</label>
        <textarea id="inputSynopsis" name="synopsis" required>{{ $book->synopsis }}</textarea>
      </div>
      <div>
        <label for="inputPublisher">Publisher</label>
        <input id="inputPublisher" type="text" name="publisher" value="{{ $book->publisher }}" required>
      </div>
      <div>
        <label for="inputCategory">Category</label>
        <select name="category_uuid" id="inputCategory">
          <option value="" disabled>-- Choose Category --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->uuid }}" {{ $category->uuid === $book->category_uuid ? 'selected' : '' }}>{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </section>
@endsection
