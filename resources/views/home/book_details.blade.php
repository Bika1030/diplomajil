<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>
<style>
    *{
        box-sizing:border-box;
    }
</style>
<body>

@include('home.header')
<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Дэлгэрэнгүй<em></h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="left-image">
                    <img src=" {{asset($book->book_img)}}" alt="" style="width: 300px; box-sizing:border-box;">
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <h4 style="color: black; font-size: 35px;">{{$book->title}}</h4>
                <span class="author">
               <a href="{{route('home.authors')}}"><img src="{{asset($book->author->image)}}" alt="" style="max-width: 60px; border-radius: 50%;"></a>
            <h6 style="color: black; font-size: 35px; margin-top: 5px;">Зохиолч:  {{$book->author->name}}</h6>
          </span>
                <div class="col-5">
              <span class="ends" style="color: black; font-size: 15px;">
                Зарагдаж буй тоо хэмжээ:<strong>{{$book->quantity}}</strong>
              </span>
              <p style="color: black; font-size: 35px; display:inline-block">{{$book->description}}</p>
                </div>
                <div class="">
                    <a class="btn btn-primary" href="{{ route('home.book.read', $book->id) }}"
                       target="_blank">Унших</a>
                </div>
            </div>


        </div>

    </div>
</div>
</div>

@include('home.footer')

</body>
</html>
