<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            margin: auto;
        }
        .title{
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: white;
        }
        .div_pad{
            text-align: center;
            display: inline-block;
        }
    </style>
</head>
<body>
@include('admin.header')
<div class="d-flex align-items-stretch">
    @include('admin.sidebar')
    <div class="d-flex align-items-stretch">

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="div_center">

            <h2 class="title">Update Author</h2>

            <form action="{{ url('author/update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="div_pad">
                    <label for="auther_name">Author Name</label>
                    <input type="text" id="name" name="name" value="{{ $data->name }}" required>
                </div>

                <div class="div_pad">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="{{ $data->description }}" required>
                </div>

                <div class="div_pad">
                    <label>Current Author Image</label>
                    <img style="width: 80px; border-radius: 50%; margin: auto;" src="/auther/{{ $data->image }}" alt="Author Image">
                </div>

                <div class="div_pad">
                    <label for="image">New Author Image (Optional)</label>
                    <input type="file" id="image" name="image">
                </div>
                <input type="submit" class="btn btn-info" value="UPDATE" style="">
            <form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>


@include('admin.footer')

</body>
</html>
