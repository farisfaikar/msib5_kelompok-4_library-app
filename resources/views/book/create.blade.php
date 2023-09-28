@extends('layouts.main')

@section('container')
  <section class="p-4">
    <h1 class="text-3xl font-semibold text-gray-800">Create Book</h1>
    <form action="{{ route("book.store") }}" method="post" class="mt-4 space-y-4">
      @csrf

      <div>
        <label for="inputTitle" class="block text-sm font-medium text-gray-700">Title</label>
        <input id="inputTitle" type="text" name="title" autofocus required class="mt-1 p-2 w-full rounded-md border border-gray-300">
      </div>

      <div>
        <label for="inputAuthor" class="block text-sm font-medium text-gray-700">Author</label>
        <input id="inputAuthor" type="text" name="author" required class="mt-1 p-2 w-full rounded-md border border-gray-300">
      </div>

      <div>
        <label for="inputSynopsis" class="block text-sm font-medium text-gray-700">Synopsis</label>
        <textarea id="inputSynopsis" name="synopsis" required class="mt-1 p-2 w-full rounded-md border border-gray-300"></textarea>
      </div>

      <div>
        <label for="inputPublisher" class="block text-sm font-medium text-gray-700">Publisher</label>
        <input id="inputPublisher" type="text" name="publisher" required class="mt-1 p-2 w-full rounded-md border border-gray-300">
      </div>

      <div>
        <label for="inputCategory" class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category_uuid" id="inputCategory" required class="mt-1 p-2 w-full rounded-md border border-gray-300">
          <option value="" disabled selected>-- Choose Category --</option>
          @foreach ($categories as $category)
            <option value="{{ $category->uuid }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Submit</button>
      </div>
    </form>
  </section>
@endsection
