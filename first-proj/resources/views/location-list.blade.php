<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    @include('layouts/header')
    <body class="antialiased">
        <div id="locationList">
            <div class="container">
                <table border="1">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>des</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $location)
                        <tr>
                            <td>{{$location-> name}}</td>
                            <td>{{$location-> description}}</td>
                            <td>{{$location->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
