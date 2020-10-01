<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
            .swiper-container {
              width: 100%;
              padding-top: 50px;
              padding-bottom: 50px;
            }

            .swiper-slide {
              background-position: center;
              background-size: cover;
              width: 300px;
              height: 300px;

            }
        </style>
    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('welcome') }}">Cinema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('showtime') }}">Showtime</a>
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
                @role('admin')
                    <a href="{{ url('/home') }}">Dashboard</a>
                @endrole
                @role('user')
                    <a href="{{ url('/home') }}">Profile</a>
                @endrole
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
        <div class="content-container">
          <div class="jumbotron shadow" style="padding: 2rem 2rem">
            <h1><center>Select Movies</center></h1>
              <!-- Slider main container -->
              <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide" style="background-image:url(/images/movie4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/images/movie5.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(/images/movie6.jpg)"></div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

              </div>
          </div>
          <div class="jumbotron shadow">
            <h1><center>Select Date</center></h1>
            <div class="btn-group" style="display: flex; margin: 0px 300px 0px 300px;" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary">1/10<br>Monday</button>
              <button type="button" class="btn btn-secondary">2/10<br>Tuesday</button>
              <button type="button" class="btn btn-secondary">3/10<br>Wednesday</button>
              <button type="button" class="btn btn-secondary">4/10<br>Thursday</button>
              <button type="button" class="btn btn-secondary">5/10<br>Friday</button>
            </div>
          </div>
        </div>
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            pagination: {
              el: '.swiper-pagination',
            },
          });
        </script>
    </body>
</html>
