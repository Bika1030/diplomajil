<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')
  </head>

<body>

 @include('home.header')


 <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class=""></div>
            <h2><em>Номнууд</em></h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>

            </ul>
          </div>
        </div>
        <form action="{{url('search')}}" method="get">

            @csrf
            

            <div class="row" style="margin: 30px; border-radius: 5px;">
                    <div class="col-md-8">
                        <input class="form-control" type="search" placeholder="Хайх номоо оруулна уу" style="border-radius: 8px; font-weight: bold;">
                    </div>
                    <div  class="col-md-4">
                    <input class="btn btn-info" type="submit" value="search" style="font-weight: bold;">
                    </div>
            </div>
        </form>


        <div class="col-lg-12">
          <div class="row grid">

          @foreach($data as $data)
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                <img src="{{$data->book_img}}" alt=""
                style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                  <img src="{{$data->author->image}}" alt="" style="max-width: 50px; border-radius: 50%;">
                  <h6>{{$data->author->name}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    <br>Ангилал :<h5>{{$data->category->cat_title}}</h5>
                    <br>
                  </span>

                  <div class="text-button">
                                        <a href="{{route('home.book.details', $data->id)}}">Дэлгэрэнгүй</a>
                                    </div>

                 </br>


                  <div class="">
                  <a class="btn btn-primary" href="{{route('home.book.read', $data->id) }}"
                  target="_blank">Унших</a>
                  </div>
                </div>
              </div>
            </div>

           @endforeach

          


          </div>
        </div>
      </div>
    </div>
  </div>

  @include('home.footer')




  </body>
</html>
