@extends('layouts.main')

@section('container')
  <section>
    <h1>Book Index</h1>
    <p>Contains a list of books kept by the library.</p>
    <table>
      <tr>
        <th>No.</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Synopsis</th>
        <th>Publisher</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Harry Potter</td>
        <td>J.K. Rowling</td>
        <td>Wizard thingy idk</td>
        <td>Some publisher.id</td>
        <td>Fantasy</td>
        <td><a href="{{ route('book.edit', 1) }}">Edit</a><a href="{{ route('book.destroy', 1) }}">Delete</a></td>
      </tr>
    </table>
  </section>
@endsection
