<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    @include('layouts/header')
    <body class="antialiased">
        <div class="wrapper">
            <div class="swiper headerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1536238349444-c05ffb6837e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt=""></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1532313944948-f7c5433f64e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/flagged/photo-1555445777-a34b0190e76d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1700&q=80" alt=""></div>
                </div>
            </div>
            <h2 class="swiper-banner">{{$data['title']}}</h2>
        </div>
        <div class="container">
            <ul>
                @foreach($recentPosts as $post)
                    <li>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->content}}</p>
                    </li>
                @endforeach
            </ul>

            <div class="quote">
                <p>{{$data['content']}}</p>

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
