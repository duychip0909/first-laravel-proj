<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar_style.css') }}">
    <title>Laravel</title>
</head>
<body>
    <div class="d-flex">
        <section id="sidebar" class="my-0">
            <div class="navbar__hotel">
                <a href="#" class="logo">The hotel</a>
                <ul class="list-unstyled mt-4 m-0">
                    <li class="link-item"><a href="#">Dashboard</a></li>
                    <li class="menu-header">LOCATIONS</li>
                    <li class="link-item"><a href="/locationadd">Add Location</a></li>
                    <li class="link-item"><a href="#">Add Location Details</a></li>
                    <li class="link-item"><a href="/locationlist">View All Locations</a></li>
                    <li class="menu-header">USERS</li>
                    <li class="link-item"><a href="{{route('user-list')}}">View All Users</a></li>
                    <li class="menu-header">BOOKING</li>
                    <li class="link-item"><a href="{{route('order-list')}}">New Booking</a></li>
                    <li class="link-item"><a href="#">View Booking</a></li>
                    <li class="link-item"><a href="#">Edit Booking</a></li>
                    <li class="menu-header">STAFF</li>
                    <li class="link-item"><a href="#">Add Staff Details</a></li>
                    <li class="link-item"><a href="#">Edit Staff Details</a></li>
                    <li class="link-item"><a href="#">View All Staff</a></li>
                    <li class="menu-header">ROOMS</li>
                    <li class="link-item"><a href="#">Add Room Details</a></li>
                    <li class="link-item"><a href="#">Edit Room Details</a></li>
                    <li class="link-item"><a href="{{route('routeRoomAdd')}}">View All Rooms</a></li>
                    <li class="logout animate p-2 d-flex align-items-center justify-content-center mt-4 mb-2"><a href="{{route('logout')}}">Log Out</a></li>
                </ul>
            </div>
        </section>
        @include('sweetalert::alert')
        @yield('content')
    </div>
    <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-3.6.3.js"></script>
    <script src="//cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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

        $(function() {
            $('select').on('change', function() {
                let type = $(this).val();
                $('.form-filter').attr('action', '/filter/' + type);
                $('.form-filter').trigger('submit');
            })
        })

        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('input[name="status"]').on('change', function() {
                var checkbox = $(this);
                $.post(checkbox.data('action'), function (response) {
                    response.deleted_at == null
                        ? checkbox.prop('checked', true)
                        : checkbox.removeProp('checked');

                })
            })
        })

        const toastLiveExample = document.getElementById('liveToast');
        window.addEventListener('load', (event) => {
            const toast = new bootstrap.Toast(toastLiveExample)
            toast.show()
        });
    </script>
</body>
</html>
