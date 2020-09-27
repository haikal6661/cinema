<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #showTab .active {
              color: red;
            }
            #showTab :hover {
              color: forestgreen;
              transition: color 0.5s;
            }
        </style>
    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cinema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Showtime <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cinema</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="ml-2">
            @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/home') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <span>|</span>
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
          </div>
        </div>
      </nav>

    <body>
        <div class="container-fluid">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 850px;">
              <div class="carousel-item active">
                <img src="/storage/uploads/joker-cover.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/storage/uploads/batman-cover.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item slider-fullscreen-image">
                <img src="/storage/uploads/man-of-steel.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="content-container">
          <div class="jumbotron shadow" style="padding: 2rem 2rem">
            <ul class="nav nav-tabs" id="showTab">
              <li class=""><a data-toggle="tab" href="#nowShowing"><h1>Now Showing</h1></a></li>
              <li class="" style="padding-left: 20px;"><a data-toggle="tab" href="#comingSoon"><h1>Coming Soon</h1></a></li>
            </ul>
          
            <div class="tab-content">
              <div id="nowShowing" class="tab-pane fade in active">
                <div class="row">
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie1.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Avengers (End Game)</h5>
                      <p class="card-text">2018</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie2.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Aquaman</h5>
                      <p class="card-text">2017</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie3.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Joker</h5>
                      <p class="card-text">2019</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie4.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Hacker</h5>
                      <p class="card-text">2015</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie5.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Legend</h5>
                      <p class="card-text">2017</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie6.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Bloodshot</h5>
                      <p class="card-text">2019</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie7.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Jigsaw</h5>
                      <p class="card-text">2018</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="comingSoon" class="tab-pane fade">
                <div class="row">
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie5.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Legend</h5>
                      <p class="card-text">2017</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie6.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Bloodshot</h5>
                      <p class="card-text">2019</p>
                    </div>
                  </div>
                  <div class="card shadow" style="width: 12rem; margin:10px;">
                    <img class="card-img-top" src="/images/movie7.jpg" alt="Card image cap" style="height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">Jigsaw</h5>
                      <p class="card-text">2018</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </body>
</html>
<script>
  $(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.tab', function(e) {
      localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
      $('#showTab a[href="' + activeTab + '"]').tab('show');
    }
  });
  </script>
