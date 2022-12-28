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
        @extends('layouts.app')
        @section('content')
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
                    <h2 class="section-title fw-bold">Our Location</h2>
                    <div class="swiper location">
                        <div class="swiper-wrapper">
                            @foreach($list as $location)
                                <div class="swiper-slide">
                                    <div class="card-location">
                                        <div class="card-img">
                                            <img src="{{$location->image}}" alt="" />
                                        </div>
                                        <div class="card-content">
                                            <a href="/location-detail/{{$location->id}}" class="btn-view">View hotel</a>
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
            <section class="new-place d-grid">
                <div class="left-side d-flex align-items-start justify-content-center flex-column">
                    <h2 class="header-title m-0">New places, new spaces</h2>
                    <p class="my-4">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                    <a href="#" class="learnmore-btn">Learn more</a>
                </div>
                <div class="right-side">
                    <div class="image-frame">
                        <img src="https://images.unsplash.com/photo-1536086845112-89de23aa4772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                </div>
            </section>
            <section class="takealook-section">
                <h2 class="header-title text-center mb-5">Take a look around</h2>
                <div class="swiper takealook">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="https://images.unsplash.com/photo-1555921015-5532091f6026?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="https://images.unsplash.com/photo-1543355890-20bc0a26fda1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="https://images.unsplash.com/photo-1581350845039-3318c9bd4cac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1439&q=80"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="https://images.unsplash.com/photo-1581350845039-3318c9bd4cac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1439&q=80"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="https://images.unsplash.com/photo-1594461140689-e82a4e3279a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="new-place d-grid">
                <div class="left-side d-flex align-items-start justify-content-center flex-column">
                    <h2 class="header-title m-0">Conscious Hotel The Tire Station</h2>
                    <p class="my-4">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                    <a href="#" class="learnmore-btn">get directions</a>
                </div>
                <div class="right-side">
                    <div class="image-frame split">
                        <img src="https://images.unsplash.com/photo-1600869080148-338f85fb17f8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=669&q=80" alt="">
                        <img src="https://images.unsplash.com/photo-1588776873786-a51f317c3dbf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
                    </div>
                </div>
            </section>
            @include('components.notify-form')
        @endsection
    </body>
</html>
