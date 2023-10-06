@extends('layouts.main')

@section('container')
  <section class="bg-base-200 px-4 py-4 sm:px-10">
    <div class="flex flex-col justify-between md:flex-row">
      <div>
        <h1 class="text-3xl font-black">Books</h1>
        <p class="text-lg">Contains a list of books kept by the library.</p>
      </div>
      <a href="{{ route('book.create') }}" class="btn btn-primary mt-4 md:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg> Add Book</a>
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
              <td>{{ strlen($book->synopsis) > 100 ? substr($book->synopsis, 0, 100) . '...' : $book->synopsis }}</td>
              <td>{{ $book->publisher }}</td>
              <td>
                <div class="tooltip cursor-pointer rounded-full bg-base-content px-2 py-1 text-black" data-tip="{{ $book->category->description }}" style="background-color: {{ $book->category->color }}">
                  <p>{{ $book->category->category_name }}</p>
                </div>
              </td>
              <td class="flex flex-col gap-2 pr-0 sm:flex-row">
                <a href="{{ route('book.edit', $book) }}" class="btn btn-ghost inline-flex w-16 items-center p-2">
                  Edit
                </a>
                <a onclick="delete_modal_{{ $loop->iteration }}.showModal()" class="btn btn-ghost inline-flex w-16 cursor-pointer items-center p-2 text-error hover:bg-error hover:text-base-100">
                  Delete
                </a>
              </td>
            </tr>

            <!-- Open the modal using ID.showModal() method -->
            <dialog id="delete_modal_{{ $loop->iteration }}" class="modal modal-bottom sm:modal-middle">
              <div class="modal-box">
                <h3 class="text-lg font-bold">Delete Book</h3>
                <p class="py-4">Are you sure you want to delete this book?</p>
                <div class="modal-action">
                  <form action="{{ route('book.destroy', $book) }}" method="post" class="inline-block">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-error text-base-100">
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
@endsection
