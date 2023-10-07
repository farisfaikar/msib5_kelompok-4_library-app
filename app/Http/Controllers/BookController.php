<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    protected $book;
    protected $category;

    public function __construct(Book $book, Category $category)
    {
        $this->book = $book;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Readiverse | Books";
        $books = $this->book->paginate(10);
        return view("book.index", compact("title", "books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Readiverse | Add Book";
        $categories = $this->category->all();
        return view("book.create", compact("title", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $input = $request->all();
        $book = new Book();
        $book->uuid = Str::uuid();
        $book->title = $input["title"];
        $book->author = $input["author"];
        $book->synopsis = $input["synopsis"];
        $book->publisher = $input["publisher"];
        $book->category_uuid = $input["category_uuid"];
        $book->save();

        return redirect()->route("book.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $title = "Readiverse | Edit Book";
        $book = $this->book->find($book->uuid);
        $categories = $this->category->all();
        return view("book.edit", compact("title", "book", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $input = $request->all();
        $book = $this->book->find($book->uuid);
        $book->title = $input["title"];
        $book->author = $input["author"];
        $book->synopsis = $input["synopsis"];
        $book->publisher = $input["publisher"];
        $book->category_uuid = $input["category_uuid"];
        $book->save();

        return redirect()->to($input["prev_url"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Book $book)
    {
        $book = $this->book->find($book->uuid);
        $book->delete();

        $paginator = $this->book->paginate(10);
        $redirectToPage = ($request->page <= $paginator->lastPage()) ? $request->page : $paginator->lastPage();

        return redirect()->route("book.index", ["page" => $redirectToPage]);
    }
}