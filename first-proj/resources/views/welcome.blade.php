<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        <header>
            <nav>
                <a href="#" class="nav-logo">
                    The hotel
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Our Rooms</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
                <a href="#" class="book-btn">BOOK</a>
            </nav>
        </header>
        <div class="wrapper">
            <div class="swiper headerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1536238349444-c05ffb6837e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt=""></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1532313944948-f7c5433f64e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/flagged/photo-1555445777-a34b0190e76d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1700&q=80" alt=""></div>
                </div>
            </div>
            <h2 class="swiper-banner">Welcome to The hotel</h2>
        </div>
        <div class="container">
            <div class="quote">
                <p>A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.</p>
                <div class="image-des">
                    <img src="{{ asset('imgs/icon-safari.png') }}" alt="">
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".headerSwiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteration: true
                },
                speed: 800
            });
        </script>
    </body>
</html>
