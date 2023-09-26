@extends('layouts.main')

@section('container')
  <section>
    <h1>Create Book</h1>
    <form action="{{ route("book.store") }}" method="post">
      @csrf
      <div>
        <label for="inputTitle">Title</label>
        <input id="inputTitle" type="text" name="title" autofocus required>
      </div>
      <div>
        <label for="inputAuthor">Author</label>
        <input id="inputAuthor" type="text" name="author" required>
      </div>
      <div>
        <label for="inputSynopsis">Synopsis</label>
        <textarea id="inputSynopsis" name="synopsis" required></textarea>
      </div>
      <div>
        <label for="inputPublisher">Publisher</label>
        <input id="inputPublisher" type="text" name="publisher" required>
      </div>
      <div>
        <label for="inputCategory">Category</label>
        <select name="category_uuid" id="inputCategory">
          <option value="" disabled selected>-- Choose Category --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->uuid }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </section>
@endsection
