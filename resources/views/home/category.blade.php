


<div class="home-main-area mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="category-area mb-30">
                    <h3><a href="#">Ангилал</a></h3>
                    @foreach($categories as $category)
                    <div class="category-menu" style="display: block;">
                        <nav class="menu">
                            <ul>
                                <li><a href="">{{$category->cat_title}}</a></li>
                             </ul>
                        </nav>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            @foreach($books as $data)
              <div class="book">
                <div class="background"></div>
                <div class="background-texture"></div>
                <section class="carousel">
                  <div class="carousel__container">
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/708392/pexels-photo-708392.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/1785001/pexels-photo-1785001.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/1071882/pexels-photo-1071882.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/6945/sunset-summer-golden-hour-paul-filitchkin.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">
                          <span class="fas fa-play-circle"></span>
                          <span class="fas fa-plus-circle"></span>
                        </div>
                        <h5 class="carousel-item__details--title">Descriptive Title</h5>
                        <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <img
                        class="carousel-item__img"
                        src="https://images.pexels.com/photos/1964471/pexels-photo-1964471.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                        alt="people"
                      />
                      <div class="carousel-item__details">
                        <div class="controls">

                        </div>
                        <h5 class="carousel-item__details--title">{{$data->title}}</h5>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
        </div>
        @endforeach
    </div>
</div>



