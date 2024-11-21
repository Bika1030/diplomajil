<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('admin.author',compact('authors'));
    }

    public function store(Request $request){
//        dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/author/', $filename);
            $validatedData['image'] = 'uploads/author/' . $filename;
        } else {
            $validatedData['image'] = null;
        }

        Author::query()->create([
           'name' => $validatedData['name'],
           'description' => $validatedData['description'],
           'image' => $validatedData['image'],
        ]);

        return redirect()->back()->with('message','Author Added Successfully');
    }

    public function author_delete($id){

        $data= Author::find($id);

        $data->delete();

        return redirect()->back()->with('message','Author Deleted Succesfully');
    }

    public function edit($id){
        $data = Author::find($id);

        return view('admin.edit_author',compact('data'));
    }


 public function update(Request $request, $id)
 {
        $data = Author::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $author_image=$request->image;

        if($author_image){
            $auther_image_name = time().'.'.$author_image->getClientOriginalExtension();
            $request->image->move('auther',$auther_image_name);
            $data->image = $auther_image_name;
        }
        $data->save();

        return redirect()->back()->with('message','Author Updated Succesfully');

 }


}
