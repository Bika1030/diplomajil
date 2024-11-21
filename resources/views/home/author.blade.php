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
                    <div class="line-dec"></div>
                    <h2><em>Зохиолч</em></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="filters">
                    <ul>
                  

                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row grid">

                    @foreach($authors as $item)

                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                    <img src="{{$item->image}}" alt=""
                                         style="border-radius: 20px; min-width: 195px;">
                                </div>
                                <div class="right-content">
                                    <h4>{{$item->name}}</h4>
                                    <span class="author">
                  </span>
                                    <div class="line-dec"></div>
                                    <span class="bid">
                    Зохиосон ном: <br><strong> {{ $item->books()->count()}}</strong><br>
                  </span>
                                    <div class="text-button">
                                        <a href="details.html">Дэлгэрэнгүй</a>
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
