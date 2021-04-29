<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=main, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
{{--<script type="text/javascript">
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
    </style>--}}
    <title>Bluespec</title>
</head>

<body>
    <div id="app">
       <!-- <div class="NavigationButton menu_white"> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bluespec Digital Media</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/clienthomepage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/clientthreeD">3D Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/clienttwoD">2D Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/clientmotionGraphics">Motion Graphics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/clientlogoAnimation">Logo Animation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contacts">Contact Us</a>
                        </li>
                    </ul>
                      @if (Route::has('login'))
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
                </div> 
        </nav>
    </div> 
    </div>
    <main>
    <div>
        @yield('content')
    </div>
    </main>
    <div class="container">
        <h1>Social Media Links</h1>
        <div class="row row-cols-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Facebook</h5>
                    <img src="https://clipart.info/images/ccovers/1509135366facebook-logo-glass-3d-png-hd.png" width="25%" class="card-img-top" alt="...">
                    <p class="card-text">Click the button below to see our facebook feed.</p>
                    <a href="https://www.facebook.com/search/top?q=Bluespec%20Digital%20Media" class="btn btn-primary">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Instagram</h5>
                    <img src="https://sguru.org/wp-content/uploads/2018/01/3d-transparent-glass-instagram-icon.png" class="card-img-top" alt="...">
                    <p class="card-text">Click the button below to see our Instagram feed.</p>
                    <a href="https://www.instagram.com/bluespec_digital_media" class="btn btn-primary">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Twitter</h5>
                        <img src="https://images.vexels.com/media/users/3/132556/isolated/preview/b2314c5cc836a5a3f6448bc4f98f37d8-twitter-square-icon-by-vexels.png" class="card-img-top" alt="...">
                        <p class="card-text">Click the button below to see our Twitter feed.</p>
                        <a href="https://twitter.com/Pxl_Lvr" class="btn btn-primary">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Youtube</h5>
                        <img src="https://www.purepowder.com/wp-content/uploads/2012/09/youtube-logo-square-youtubelogo-20120605t021741-6mjjuus.jpg" class="card-img-top" alt="...">
                        <p class="card-text">Click on the button below to view our YouTube channel</p>
                        <a href="https://www.youtube.com/channel/UCkRgyQGjvej44vO_szOH3Og" class="btn btn-primary">YouTube</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LinkedIn</h5>
                        <img src="https://th.bing.com/th/id/R7c956e6461858f2a5b8b9979afec0296?rik=bRrx9uACzA4JlQ&riu=http%3a%2f%2fwordspicturesweb.com%2fwp-content%2fuploads%2f2011%2f06%2fLinked-in-square-logo.jpg&ehk=hQOpS6nddY2uy7%2fqMi%2fc%2fLLO0klAbwvNi3uVf7ueQ0c%3d&risl=&pid=ImgRaw" class="card-img-top" alt="...">
                        <p class="card-text">Click on the button below to view our LinkedIn profile</p>
                        <a href="https://uk.linkedin.com/in/bluespec" class="btn btn-primary">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="container">
        <h1>Clients of Bluespec</h1>
        <div class="row row-cols-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Film 4</h5>
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/49/Film4.svg/1200px-Film4.svg.png" width="25%" class="card-img-top" alt="Film 4 logo">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">B and Q</h5>
                    <img src="https://media.glassdoor.com/sqll/22546/b-and-q-squarelogo.png" class="card-img-top" alt="B and Q logo">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formula 1</h5>
                        <img src="https://s3.amazonaws.com/cdn.designcrowd.com/blog/2017/April/35-Famous-Square-Logos/14_300.png" class="card-img-top" alt="formula 1 logo">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">IBM</h5>
                        <img src="https://www.ibm.com/design/language/75a0bc9739aef97f0b8b8183648ff51e/core_blue70_on_blue20.svg" class="card-img-top" alt="IBM logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer>
    </footer>
</body>
</html>