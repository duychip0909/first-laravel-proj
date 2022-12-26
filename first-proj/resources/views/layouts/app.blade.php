<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel</title>
</head>
<body>
    <header>
        <nav>
            <a href="/" class="nav-logo">
                The hotel
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="rooms" class="nav-link">Our Rooms</a></li>
                <li class="nav-item"><a href="about" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
            </ul>
            <a href="#" class="book-btn">BOOK</a>
        </nav>
    </header>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
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
