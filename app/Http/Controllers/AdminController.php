<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Category;

use function Pest\Laravel\delete;
use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    //
    public function index(){
       if(Auth::id())
       {
        $user_type = Auth()->user()->usertype;

        if($user_type == 'admin'){
            return view('admin.index');
        }
        else if($user_type == 'user'){
            $books = Book::all();
            $categories = Category::all();
            return view('home.index',compact('books', 'categories'));
        }
       }
       else{
        return redirect()->back();
       }
    }

    public function category_page(){
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data = new Category;

        $data->cat_title = $request->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function cat_delete($id){
        $data= Category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category Deleted Succesfully');

    }

    public function edit_category($id){

        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->cat_title = $request->cat_name;

        $data->save();

        return redirect('/category_page')->with('message', 'Category Updated Successfully');
    }

    public function add_book()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('admin.add_book',compact('categories','authors'));
    }

    public function store_book(Request $request)
    {
        $validatedData = $request->validate([
            'book_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'description' => 'required|string',
            'category' => 'exists:categories,id',
            'author_id' => 'exists:authors,id',
            'book_img' => 'required|image',
            'book_pdf' => 'required|mimes:pdf'
        ]);



        if ($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/book/image', $filename);
            $validatedData['book_img'] = 'uploads/book/image/' . $filename;
        } else {
            $validatedData['book_img'] = null;
        }

        if ($request->hasFile('book_pdf')) {
            $file = $request->file('book_pdf');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/book/pdf', $filename);
            $validatedData['book_pdf'] = 'uploads/book/pdf/' . $filename;
        } else {
            $validatedData['book_pdf'] = null;
        }


        Book::query()->create([
            'title' => $validatedData['book_name'],
            'quantity' => $validatedData['quantity'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category'],
            'author_id' => $validatedData['author_id'],
            'book_img' => $validatedData['book_img'],
            'book_pdf' => $validatedData['book_pdf'],
        ]);

        return redirect()->back()->with('message','Successfully');
    }

    public function show_book()
    {
        $books = book::all();

        return view('admin.show_book', compact('books'));
    }

    public function book_delete($id){
        $data = Book::find($id);

        $data->delete();

        return redirect()->back()->with('message','Book Deleted Succesfully');
    }
    public function edit_book($id)
    {
        $data = Book::find($id);

        $category = Category::all();


       return view('admin.edit_book',compact('data','category'));

    }

    public function update_book(Request $request,$id){
        $data = Book::find($id);

        $data->title = $request->title;

        $data->quantity = $request->quantity;

        $data->description = $request->description;

        $data->category_id = $request->category;

        $book_image=$request->book_img;

        if($book_image){
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('book',$book_image_name);
            $data->book_img = $book_image_name;
        }

        $data->save();

        return redirect('/show_book')->with('message','Book Updated Succesfully');

    }
}
