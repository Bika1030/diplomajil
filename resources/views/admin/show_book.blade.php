<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .table_center{
            text-align: center;
            margin: auto;
            border: 1px solid yellowgreen;
            margin-top: 50px;
        }
        th{
            border-right: 1px solid yellowgreen;
            color: black;
            background-color: skyblue;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .img_book{
            width: 100px;
            height: auto;
        }
        .img_author{
            width: 80px;
            border-radius: 50%;
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
              <div>

              @if(session()->has('message'))

                   <div class="alert alert-success">
                      {{session()->get('message')}}

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                   </div>
                   @endif

                <table class="table_center">
                    <tr>
                        <th>Book Title</th>
                       <th>Author Name</th>
                        <th>Author Image</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Book Image</th>

                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach($books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author->name}}</td>
                        <td>
                            <img class="img_author" src="{{$book->author->image}}" alt="">
                        </td>

                        <td>{{$book->quantity}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->category->cat_title}}</td>
                        <td>
                            <img class="img_book" src="{{$book->book_img}}" alt="">
                        </td>
                        <td>
                            <a onclick="comfirmation(event)" href="{{url('book_delete',$book->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="{{url('edit_book',$book->id)}}" class="btn btn-info">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
              </div>
          </div>
        </div>
      </div>




     <script type="text/javascript">
            function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            consoLe.Log(urlToRedirect);
            swal({
            title: "Are you sure to Delete this",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
        .then((willCancel) => {
            if (willCancel) {
            window.location.href= urlToRedirect;
            }
        });
        }

     </script>

      @include('admin.footer')
  </body>
</html>
