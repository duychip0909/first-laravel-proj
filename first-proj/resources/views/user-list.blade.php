@extends('layouts.navbar')
@section('content')
    <div id="locationList" class="flex-fill">
        <section class="container">
            <div class="container">
                <div class="box-header">
                    <h2 class="box-title fw-bold">Manage Users</h2>
                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td class="text-wrap">{{$user->email}}</td>
                                <td>{{$user->password}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection
