@extends('layouts.main')

@section('container')
<<<<<<< HEAD
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
=======

<section class="py-4 sm:px-10 px-4 bg-base-200">
  <div class="flex flex-col md:flex-row justify-between">
    <div>
      <h1 class="text-3xl font-black">Books</h1>
      <p class="text-lg">Contains a list of books kept by the library.</p>
    </div>
    <a href="{{ route("book.create") }}" class="btn btn-primary mt-4 md:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Add Book</a>
  </div>
  <div class="overflow-x-auto">

    <table class="table my-4">
      <!-- head -->
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Author</th>
          <th>Synopsis</th>
          <th>Publisher</th>
          <th>Category</th>
          <th class="pr-0"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->title }}</td>
              <td>{{ $book->author }}</td>
              <td>{{ (strlen($book->synopsis) > 100) ? substr($book->synopsis, 0, 100) . '...' : $book->synopsis }}</td>
              <td>{{ $book->publisher }}</td>
              <td>
                <div class="tooltip cursor-pointer rounded-full text-black bg-base-content py-1 px-2" data-tip="{{ $book->category->description }}" style="background-color: {{ $book->category->color }}">
                  <p>{{ $book->category->category_name }}</p>
                </div>
              </td>
              <td class="flex pr-0">
                <a href="{{ route('book.edit', $book) }}" class="btn-edit inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
                <a onclick="delete_modal_{{ $loop->iteration }}.showModal()" class="btn-delete inline-flex items-center cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 stroke-error">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </a>
              </td>
            </tr>

            <!-- Open the modal using ID.showModal() method -->
            <dialog id="delete_modal_{{ $loop->iteration }}" class="modal modal-bottom sm:modal-middle">
              <div class="modal-box">
                <h3 class="font-bold text-lg">Delete Book</h3>
                <p class="py-4">Are you sure you want to delete this book?</p>
                <div class="modal-action">
                  <form action="{{ route('book.destroy', $book) }}" method="post" class="inline-block">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-error">
                      Delete
                    </button>
                    <button type="button" class="btn btn-ghost" onclick="delete_modal_{{ $loop->iteration }}.close()">
                      Cancel
                    </button>
                  </form>
                </div>
              </div>
            </dialog>
        @endforeach
    </table>
  </div>
</section>

>>>>>>> 2555e953fa9f22c7065de8b34eb611c6327a73ba
@endsection
