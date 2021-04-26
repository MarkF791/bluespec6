<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=main, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function() {
            var light_pos = $('#white_div').offset().top;
            var light_height = $('#white_div').height();
            var menu_pos = $('.NavigationButton').offset().top;
            var menu_height = $('.NavigationButton').height();
            var scroll = $(window).scrollTop();
            console.log('light', light_pos);
            console.log('menu', menu_pos);
            console.log('scroll', scroll);

            if (menu_pos > light_pos && menu_pos < (light_pos + light_height)) {
                $('.NavigationButton').addClass('menu_white');
                $('.NavigationButton').removeClass('menu_black');
            } else {
                $('.NavigationButton').removeClass('menu_white');
                $('.NavigationButton').addClass('menu_black');
            }

        })
    })
</script>
    <style>
        .NavigationButton {
            position: fixed;
            top: 5%;
            right: 5%;
            z-index: 99999;
            font-family: neuzeit-grotesk, sans-serif;
            font-weight: 700;
            color: inherit;
        }

        .menu_white {
            color: #fff;
        }

        .menu_black {
            color: #000;
        }
    </style>
    <title>Bluespec</title>
</head>

<body>
    <div id="app">
       <!-- <div class="NavigationButton menu_white"> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bluespec</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/threeD">3D Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/twoD">2D Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/motionGraphics">Motion Graphics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/logoAnimation">Logo Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contacts">Contact Us</a>
                        </li>
                    </ul>
         <!--               @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div> -->
        </nav>
    </div> 
    </div>
    <main>
    <div>
        @yield('content')
    </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer>
        <div class="container" style="padding:20; background-color:white;" >
            <h2> Clients of Bluespec </h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" class="rounded mx-auto d-block">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-30" src="http://1.bp.blogspot.com/-tmKk3fLw9CA/ULSHZqwPOvI/AAAAAAAABzc/saBRPwXHT_8/s1600/film4-logo.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-30" src="https://vignette2.wikia.nocookie.net/logopedia/images/6/66/B%26Q_logo.svg/revision/latest/scale-to-width-down/425?cb=20140301175121" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-30" src="http://1.bp.blogspot.com/-tmKk3fLw9CA/ULSHZqwPOvI/AAAAAAAABzc/saBRPwXHT_8/s1600/film4-logo.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </footer>
</body>
</html>