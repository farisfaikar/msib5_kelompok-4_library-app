@extends('layouts.main')

@section('container')

<section class="py-4 sm:px-10 px-4 bg-base-200">
  <div class="flex flex-col sm:flex-row justify-between">
    <div>
      <h1 class="text-3xl font-black">Categories</h1>
      <p class="text-lg">Contains a list of book categories.</p>
    </div>
    <a id="category-form-add" class="btn btn-primary mt-4 sm:w-auto sm:flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Add Category</a>
  </div>

  <div id="category-form" class="hidden p-4 bg-base-100 rounded-lg mt-4">
    <div id="category-preview" class="tooltip cursor-pointer rounded-full text-black py-1 px-2 w-fit bg-white" data-tip="Example description" >
      <p>Category Preview</p>
    </div>  
    <div class="flex lg:flex-row flex-col gap-4 pt-2">
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
        <button id="randomize-color-button" class="btn border-base-content border-opacity-20 self-end">
          <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="stroke-base-content fill-base-content">
            <path d="M1.705 8.005a.75.75 0 0 1 .834.656 5.5 5.5 0 0 0 9.592 2.97l-1.204-1.204a.25.25 0 0 1 .177-.427h3.646a.25.25 0 0 1 .25.25v3.646a.25.25 0 0 1-.427.177l-1.38-1.38A7.002 7.002 0 0 1 1.05 8.84a.75.75 0 0 1 .656-.834ZM8 2.5a5.487 5.487 0 0 0-4.131 1.869l1.204 1.204A.25.25 0 0 1 4.896 6H1.25A.25.25 0 0 1 1 5.75V2.104a.25.25 0 0 1 .427-.177l1.38 1.38A7.002 7.002 0 0 1 14.95 7.16a.75.75 0 0 1-1.49.178A5.5 5.5 0 0 0 8 2.5Z"></path>
        </svg>
        </button>
          <input id="input-color" type="color" name="color" maxlength="7" class="input input-bordered w-full bg-base-200 p-0" value="#c8cad0" required />
        </div>
      </div>
      <div class="flex justify-end items-end gap-4">
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
                <div class="cursor-pointer rounded-full text-black py-1 px-2 w-fit" data-tip="{{ $category->description }}" style="background-color: {{ $category->color }}">
                  <p>{{ $category->category_name }}</p>
                </div>  
              </td>
              <td>{{ $category->description }}</td>
              <td class="flex pr-0">
                <a href="{{ route('category.edit', $category) }}" class="btn-edit inline-flex items-center">
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
