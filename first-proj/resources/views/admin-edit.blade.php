<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    @include('layouts/header')
    <body class="antialiased">
        <div class="main-block">
            <form action="/update/{{$location->id}}" method="post">
                @method('put')
                @csrf
                <div class="title">
                    <h2>Information Upload</h2>
                </div>
                <div class="info">
                    <input class="fname" type="text" name="locationName" placeholder="Location name here..." value="{{$location->name}}">
                    <input type="text" name="locationContent" placeholder="Content here..." value="{{$location->description}}">
                    <input type="text" name="image" placeholder="Image here..." value="{{$location->image}}">
                    <input type="text" name="status" placeholder="Status here..." value="{{$location->status}}">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
