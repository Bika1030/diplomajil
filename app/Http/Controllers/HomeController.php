<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\YourModel;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        $categories = Category::all();
        return view('home.index', compact('categories', 'books'));
    }

    public function read($id)
    {
        $book = Book::query()->findOrFail($id);
        if ($book->book_pdf) {
            return response()->file($book->book_pdf);
        } else {
            return redirect()->back()->with('error', 'PDF not found');
        }
    }

    public function book_details($id)
    {
        $book = Book::query()->findOrFail($id);
        return view('home.book_details', compact('book'));
    }

    public function authors()
    {
        $authors = Author::all();
        return view('home.author', compact('authors'));
    }

    public function explore(){
        $data = Book::all();
        return view('home.explore',compact('data'));
    }

    public function categories()
    {


    }

    public function search(Request $request){

        $search = $request->search;

        $data = Book::where('title','LIKE','%'.$search.'%')->get();

         return view('home.explore',compact('data'));
    }
}
