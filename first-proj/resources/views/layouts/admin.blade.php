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
    <title>Admin</title>
</head>
<body>
    @yield('content')
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
