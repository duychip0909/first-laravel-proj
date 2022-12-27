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
    <link rel="stylesheet" href="{{ asset('css/sidebar_style.css') }}">
    <title>Laravel</title>
</head>
<body>
    <div class="d-flex">
        <section id="sidebar">
            <div class="navbar__hotel">
                <a href="#" class="logo">The hotel</a>
                <ul class="list-unstyled mt-4 m-0">
                    <li class="link-item"><a href="#">Dashboard</a></li>
                    <li class="menu-header">LOCATIONS</li>
                    <li class="link-item"><a href="/locationadd">Add Location</a></li>
                    <li class="link-item"><a href="#">Add Location Details</a></li>
                    <li class="link-item"><a href="/locationlist">View All Locations</a></li>
                    <li class="menu-header">BOOKING</li>
                    <li class="link-item"><a href="#">New Booking</a></li>
                    <li class="link-item"><a href="#">View Booking</a></li>
                    <li class="link-item"><a href="#">Edit Booking</a></li>
                    <li class="menu-header">STAFF</li>
                    <li class="link-item"><a href="#">Add Staff Details</a></li>
                    <li class="link-item"><a href="#">Edit Staff Details</a></li>
                    <li class="link-item"><a href="#">View All Staff</a></li>
                    <li class="menu-header">ROOMS</li>
                    <li class="link-item"><a href="#">Add Room Details</a></li>
                    <li class="link-item"><a href="#">Edit Room Details</a></li>
                    <li class="link-item"><a href="#">View All Rooms</a></li>
                    <li class="logout animate p-2 d-flex align-items-center justify-content-center mt-4 mb-2"><a href="#">Log Out</a></li>
                </ul>
            </div>
        </section>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        //THIS SCRIPT IS FOR CRUD ACTION IN MANAGING LOCATION
        (function ($) {
            $(function () {
                $('a[data-action="remove"]').on('click', function (e) {
                    e.preventDefault();
                    $('#confirmRemove form').attr('action', $(this).attr('href'));
                });
                $('a[data-action="update"]').on('click', function(e) {
                    e.preventDefault();
                    $('#EditLocation form').attr('action', $(this).attr('href'));
                });
            });
        })(jQuery);

        $('a[data-json]').on('click', function() {
            $('#EditLocation input[name="locationName"]').val($(this).data('json').name);
            $('#EditLocation input[name="locationContent"]').val($(this).data('json').description);
            $('#EditLocation input[name="image"]').val($(this).data('json').image);
            $('#EditLocation input[name="status"]').val($(this).data('json').status);
        });
    </script>
</body>
</html>
