@extends('layouts.main')

@section('container')
  <section>
    <h1>Book Index</h1>
    <p>Contains a list of books kept by the library.</p>
    <a href="{{ route("book.create") }}">Add Book</a>
    <table>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Synopsis</th>
        <th>Publisher</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
      @foreach ($books as $book)
      <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ (strlen($book->synopsis) > 20) ? substr($book->synopsis, 0, 10) . '...' : $book->synopsis }}</td>
        <td>{{ $book->publisher }}</td>
        <td>{{ $book->category->category_name }}</td>
        <td>
          <a href="{{ route('book.edit', $book) }}">Edit</a>
          <form action="{{ route('book.destroy', $book) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </section>
@endsection
