{{-- <div class="currently-market">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">

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

                    @foreach($books as $data)
                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                   <a href="{{route('home.book.details', $data->id)}}"><img src="{{$data->book_img}}" alt=""
                                         style="border-radius: 10px; width:300px;">
                                   </a>
                                </div>
                                <div class="right-content">
                                    <h4 style="color:black; ">{{$data->title}}</h4>
                                    <span class="author">
                                            <h6 style="color: black;">Зохиолч: {{$data->author->name}}</h6>
                                        </span>
                                            <h5 style="color: black;">Ангилал: {{$data->category->cat_title}}</h5><br>
                                        </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
