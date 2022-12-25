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
            <section>
                <div class="container">
                    <div class="box-header">
                        <h2 class="box-title">Manage Location</h2>
                        <a href="#" class="btn btn-add">Add New Location</a>
                    </div>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $location)
                                <tr>
                                    <td>{{$location->id}}</td>
                                    <td>{{$location-> name}}</td>
                                    <td>{{$location-> description}}</td>
                                    <td>{{$location->status}}</td>
                                    <td>
                                        <form action="/delete/{{$location->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                        <a href="/edit/{{$location->id}}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
