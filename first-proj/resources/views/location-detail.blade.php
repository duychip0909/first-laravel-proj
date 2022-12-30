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
            @include('components.location-detail-banner')
            <div class="container mt-5">
                <div class="quote">
                    <p class="m-0">{{$data['content']}}</p>
                    <div class="image-des">
                        <img src="{{ asset('imgs/icon-safari.png') }}" alt="">
                    </div>
                </div>
            </div>
            @include('components.information-receive')
            <div class="card-overlay g-0 position-relative">
                <div class="card-overlay-content">
                    <h2 class="m-0">Sleep With Us</h2>
                    <p class="my-4">Since hotel policies regarding early check-in (generally before 2:00 pm) or late checkout (generally after 12:00 pm) vary by location and by hotel, please call the hotel directly prior to your arrival to make any necessary arrangements. </p>
                    <a href="#" class="learnmore-btn">View Accomodations</a>
                </div>
                <div class="overlay">
                    <img src="https://images.unsplash.com/photo-1571508601891-ca5e7a713859?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                </div>
            </div>
            <section class="new-place d-grid m-0">
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
            <section class="text-center our-neighbor container">
                <div class="d-grid content">
                    <div class="first-section">
                        <div class="card our-neighbor1">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7f6541c7-0f71-4281-a0d6-45f12f0c1cf6/dfhliag-7a10a8b0-9671-4e34-935a-9ba24afabec4.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzdmNjU0MWM3LTBmNzEtNDI4MS1hMGQ2LTQ1ZjEyZjBjMWNmNlwvZGZobGlhZy03YTEwYThiMC05NjcxLTRlMzQtOTM1YS05YmEyNGFmYWJlYzQuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.1XJ0XKHBzOz45kx0TUDvauV5fIJVPzxlusSUUwwFKXc" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                        <div class="card our-neighbor2">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bc0e2e82-b032-47b7-a03e-9330876eedfa/dfl5ljr-b508f33b-56dc-41be-9af9-6d562de97e0e.png/v1/fill/w_1280,h_1743,q_80,strp/superman_bruce_campbell_color_by_garnabiuth_dfl5ljr-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTc0MyIsInBhdGgiOiJcL2ZcL2JjMGUyZTgyLWIwMzItNDdiNy1hMDNlLTkzMzA4NzZlZWRmYVwvZGZsNWxqci1iNTA4ZjMzYi01NmRjLTQxYmUtOWFmOS02ZDU2MmRlOTdlMGUucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.jFJl_gbdKdnHhiUfcgWJlJ1iFkFx_O_oXyfimaMNahc" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                    </div>
                    <div class="second-section">
                        <div class="card our-neighbor3">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bc0e2e82-b032-47b7-a03e-9330876eedfa/ddse0eh-33d24eb3-2a90-4377-ae3c-43e2d74b9b90.jpg/v1/fill/w_1280,h_1727,q_75,strp/parallax_hal_jordan_by_garnabiuth_ddse0eh-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTcyNyIsInBhdGgiOiJcL2ZcL2JjMGUyZTgyLWIwMzItNDdiNy1hMDNlLTkzMzA4NzZlZWRmYVwvZGRzZTBlaC0zM2QyNGViMy0yYTkwLTQzNzctYWUzYy00M2UyZDc0YjliOTAuanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.94HW2qHd9nrYzNeOyVCw8FWq8Q-pN4eLpiMCcrauwYM" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                        <div class="card our-neighbor4">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/01ee2fa2-550c-44a7-9c54-9b09bdf80188/de6yilt-99a3315a-88eb-4973-994d-7e691bbc61c8.jpg/v1/fill/w_1280,h_1715,q_75,strp/nightwing_by_mariano1990_de6yilt-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTcxNSIsInBhdGgiOiJcL2ZcLzAxZWUyZmEyLTU1MGMtNDRhNy05YzU0LTliMDliZGY4MDE4OFwvZGU2eWlsdC05OWEzMzE1YS04OGViLTQ5NzMtOTk0ZC03ZTY5MWJiYzYxYzguanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.6BrHatBwxEmmDTsEd-V_V2Et-qTBcnK11GLJ4uEY72k" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                    </div>
                    <div class="third-section">
                        <div class="card our-neighbor5">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/01ee2fa2-550c-44a7-9c54-9b09bdf80188/de8k2uz-4be4710f-d49f-4ddd-bf40-9e7db5d3e833.jpg/v1/fill/w_1600,h_2141,q_75,strp/dr__fate_by_mariano1990_de8k2uz-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MjE0MSIsInBhdGgiOiJcL2ZcLzAxZWUyZmEyLTU1MGMtNDRhNy05YzU0LTliMDliZGY4MDE4OFwvZGU4azJ1ei00YmU0NzEwZi1kNDlmLTRkZGQtYmY0MC05ZTdkYjVkM2U4MzMuanBnIiwid2lkdGgiOiI8PTE2MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.0oRJ2BFeR1EDnAtchZErGwVm5fGGgxGsl972VF3JOjE" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                        <div class="card our-neighbor6">
                            <div class="image-location">
                                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/01ee2fa2-550c-44a7-9c54-9b09bdf80188/de4i6a7-d32405c6-fb5f-4bbc-9d8f-11e569cc4f24.jpg/v1/fill/w_1280,h_1978,q_75,strp/hawkman_by_mariano1990_de4i6a7-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTk3OCIsInBhdGgiOiJcL2ZcLzAxZWUyZmEyLTU1MGMtNDRhNy05YzU0LTliMDliZGY4MDE4OFwvZGU0aTZhNy1kMzI0MDVjNi1mYjVmLTRiYmMtOWQ4Zi0xMWU1NjljYzRmMjQuanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.IBC-vPlBZ-PJ92SE9ZImDowxqPAoJELenGVjPHFS89o" alt="" class="top-image">
                            </div>
                            <div class="content">
                                <h2 class="title">The Grand Market</h2>
                                <p class="description">The reputable one-Michelin-star restaurant Sra Bua by Kiin Kiin at The Hotel Bangkok welcomes the warm summer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="new-place d-grid m-0">
                <div class="left-side d-flex align-items-start justify-content-center flex-column">
                    <h2 class="header-title m-0">The Hotel</h2>
                    <p class="my-4">address here...</p>
                    <a href="#" class="learnmore-btn">Get Directions</a>
                </div>
                <div class="right-side">
                    <div class="image-frame">
                        <img src="https://images.unsplash.com/photo-1536086845112-89de23aa4772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                </div>
            </section>
            @include('components.notify-form')
        @endsection
    </body>
</html>
