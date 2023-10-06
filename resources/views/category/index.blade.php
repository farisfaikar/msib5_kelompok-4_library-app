@extends('layouts.main')

@section('container')
  <section class="bg-base-200 px-4 py-4 sm:px-10">
    <div class="flex flex-col justify-between md:flex-row">
      <div>
        <h1 class="text-3xl font-black">Categories</h1>
        <p class="text-lg">Contains a list of book categories.</p>
      </div>
      <a id="category-form-add" class="btn btn-primary mt-4 md:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg> Add Category</a>
    </div>

    <div id="category-form" class="mt-4 hidden rounded-lg bg-base-100 p-4">
      <div id="category-preview" class="tooltip w-fit cursor-pointer rounded-full bg-white px-2 py-1 text-black" data-tip="Example description">
        <p>Category Preview</p>
      </div>
      <div class="flex flex-col gap-4 pt-2 lg:flex-row">
        <div class="form-control w-full">
          <label class="label">
            <span class="label-text">Category Name</span>
          </label>
          <input type="text" maxLength="20" name="category_name" placeholder="Enter category name here." class="input input-bordered w-full bg-base-200" required />
        </div>
        <div class="form-control w-full">
          <label class="label">
            <span class="label-text">Description</span>
          </label>
          <input type="text" maxLength="160" name="description" placeholder="Enter category description here." class="input input-bordered w-full bg-base-200" required />
        </div>
        <div class="w-full">
          <label class="label">
            <span class="label-text flex-1">Color</span>
          </label>
          <div class="flex gap-2">
            <button id="randomize-color-button" class="btn self-end border-base-content border-opacity-20">
              <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="fill-base-content stroke-base-content">
                <path d="M1.705 8.005a.75.75 0 0 1 .834.656 5.5 5.5 0 0 0 9.592 2.97l-1.204-1.204a.25.25 0 0 1 .177-.427h3.646a.25.25 0 0 1 .25.25v3.646a.25.25 0 0 1-.427.177l-1.38-1.38A7.002 7.002 0 0 1 1.05 8.84a.75.75 0 0 1 .656-.834ZM8 2.5a5.487 5.487 0 0 0-4.131 1.869l1.204 1.204A.25.25 0 0 1 4.896 6H1.25A.25.25 0 0 1 1 5.75V2.104a.25.25 0 0 1 .427-.177l1.38 1.38A7.002 7.002 0 0 1 14.95 7.16a.75.75 0 0 1-1.49.178A5.5 5.5 0 0 0 8 2.5Z"></path>
              </svg>
            </button>
            <input id="input-color" type="color" name="color" maxlength="7" class="input input-bordered w-full bg-base-200 p-0" value="#c8cad0" required />
          </div>
        </div>
        <div class="flex items-end justify-end gap-4">
          <button id="category-form-cancel" class="btn btn-ghost">Cancel</button>
          <button class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="table my-4">
        <!-- head -->
        <thead>
          <tr>
            <th>Category</th>
            <th>Description</th>
            <th class="pr-0"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>
                <div class="w-fit cursor-pointer rounded-full px-2 py-1 text-black" data-tip="{{ $category->description }}" style="background-color: {{ $category->color }}">
                  <p>{{ $category->category_name }}</p>
                </div>
              </td>
              <td>{{ $category->description }}</td>
              <td class="flex flex-col gap-2 pr-0 sm:flex-row">
                <a href="{{ route('category.edit', $category) }}" class="btn btn-ghost inline-flex w-16 items-center">
                  Edit
                </a>
                <a onclick="delete_modal_{{ $loop->iteration }}.showModal()" class="btn btn-ghost inline-flex w-16 cursor-pointer items-center text-error hover:bg-error hover:text-base-100">
                  Delete
                </a>
              </td>
            </tr>

            <!-- Open the modal using ID.showModal() method -->
            <dialog id="delete_modal_{{ $loop->iteration }}" class="modal modal-bottom sm:modal-middle">
              <div class="modal-box">
                <h3 class="text-lg font-bold">Delete Book</h3>
                <p class="py-4">Are you sure you want to delete this category?</p>
                <div class="modal-action">
                  <form action="{{ route('category.destroy', $category) }}" method="post" class="inline-block">
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
@endsection
