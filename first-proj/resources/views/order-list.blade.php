@extends('layouts.navbar')
@section('content')
    <section class="container">
        <div class="table-wrapper">
            <table class="table mt-5">
                <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Enquiry</th>
                    <th scope="col">Message</th>
                    <th scope="col">User</th>
                    <th scope="col">Region</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td><a href="/view-detail/{{$order->id}}">{{$order->id}}</a></td>
                        <td>{{$order->name}}</td>
                        <td class="text-wrap text-start">{{$order->email}}</td>
                        <td>{{$order->enquiry}}</td>
                        <td>{{$order->message}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->region->region}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
