@extends('layouts.main')

@section('container')
  <section>
    <h1 class="text-center text-4xl font-medium font-jakarta-sans uppercase py-5">Book Index</h1>
    <p class="ml-5">Contains a list of books kept by the library.</p>
    <a href="{{ route("book.create") }}" class="btn btn-success ml-5 mt-2 inline-flex text-md items-center px-2.5 py-0.5">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5 ml-1.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
      </svg>         
      Add Book
    </a>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5 mt-4">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
          <tr>
            <th class="px-6 py-3">Title</th>
            <th class="px-6 py-3">Author</th>
            <th class="px-6 py-3">Synopsis</th>
            <th class="px-6 py-3">Publisher</th>
            <th class="px-6 py-3">Category</th>
            <th class="px-6 py-3">Action</th>
          </tr>
        </thead>
        @foreach ($books as $book)
        <tbody>
          <tr class="bg-white border-b hover:bg-gray-50">
            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $book->title }}</td>
            <td class="px-6 py-4">{{ $book->author }}</td>
            <td class="px-6 py-4">{{ (strlen($book->synopsis) > 20) ? substr($book->synopsis, 0, 10) . '...' : $book->synopsis }}</td>
            <td class="px-6 py-4">{{ $book->publisher }}</td>
            <td class="px-6 py-4">{{ $book->category->category_name }}</td>
            <td class="px-6 py-4 text-right">
              <a href="{{ route('book.edit', $book) }}">Edit</a>
              <form action="{{ route('book.destroy', $book) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
  </section>
@endsection
