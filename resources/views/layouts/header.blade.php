<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('header/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('header/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('header/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('header/css/style.css') }}">

    <title>NERDS</title>
</head>
<body>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>



<header class="site-navbar site-navbar-target bg-white" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div class="col-lg-4">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('boards.index') }}" class="nav-link">게시판</a></li>
                        <li><a href="{{ route('gallery.index') }}" class="nav-link">사진첩</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 text-center">
                <div class="site-logo">
                    <a href="{{ route('index') }}"><b>NERDS</b></a>
                </div>


                <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-4">
                <nav class="site-navigation text-left mr-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('videos.show') }}" class="nav-link">동영상</a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

</header>



<script src="{{ asset('header/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('header/js/popper.min.js')}}"></script>
<script src="{{ asset('header/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('header/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('header/js/main.js') }}"></script>
</body>
</html>
