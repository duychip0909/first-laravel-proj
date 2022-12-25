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
            <div class="quote">
                <p>{{$data['content']}}</p>

                <div class="image-des">
                    <img src="{{ asset('imgs/icon-safari.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="container-xl">
            <section class="loation-list">
                <h2 class="section-title">Our Location</h2>
                <div class="swiper location">
                    <div class="swiper-wrapper">
                        @foreach($list as $location)
                            <div class="swiper-slide">
                                <div class="card-location">
                                    <div class="card-img">
                                        <img src="{{$location->image}}" alt="" />
                                    </div>
                                    <div class="card-content">
                                        <a href="#" class="btn-view">View hotel</a>
                                        <div class="location-name">{{$location->name}}</div>
                                        <div class="location-des">{{$location->description}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiperHeaderBanner = new Swiper(".headerSwiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true
                },
                speed: 1200
            });

            var swiperLocation = new Swiper(".location", {
                slidesPerView: 5,
                spaceBetween: 40,
                slidesPerGroup: 1,
                speed: 1500,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true
                }
            });
        </script>
    </body>
</html>
