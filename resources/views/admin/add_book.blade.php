<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style>
        .div_center {
            text-align: center;
            margin: auto;
        }

        .title_deg {
            color: white;
            padding: 35px;
            font-size: 40px;
            font-weight: bold;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_pad {
            padding: 10px;
        }
    </style>
</head>
<body>
@include('admin.header')
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_center">

                <div>
                  @if(session()->has('message'))

                  <div class="alert alert-success">
                     {{session()->get('message')}}

                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  </div>
                  @endif

                </div>
                   


                    <h1 class="title_deg">Add books</h1>

                    <form action="{{url('store_book')}}" method="Post" enctype="multipart/form-data">

                        @csrf
                        <div class="div_pad">
                            <label for="">Book Title</label>
                            <input type="text" name="book_name">
                        </div>
                        <div class="div_pad">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity">
                        </div>
                        <div class="div_pad">
                            <label for="">Description</label>
                            <textarea name="description" id=""></textarea>
                        </div>
                        <div class="div_pad">
                            <label for="">Category</label>
                            <select name="category" required>
                                <option value="">Select a Category</option>
                                @foreach($categories as $data)
                                    <option value="{{$data->id}}">{{$data->cat_title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="div_pad">
                            <label for="">Author</label>
                            <select name="author_id" required>
                                <option value="">Select a Author</option>
                                @foreach($authors as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_pad">
                            <label for="">Book Image</label>
                            <input type="file" name="book_img">
                        </div>

                        <div class="div_pad">
                            <label for="">Book PDF</label>
                            <input type="file" name="book_pdf">
                        </div>

                        <div class="div_pad">
                            <input type="submit" value="Add books" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@include('admin.footer')
</body>
</html>
