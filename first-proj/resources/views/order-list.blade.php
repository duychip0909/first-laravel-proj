@extends('layouts.navbar')
@section('content')
    <section class="container">
        <div class="table-wrapper">
            <table class="table mt-5">
                <thead>
                <tr class="text-nowrap text-center">
                    <th scope="col">Order ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Room</th>
                    <th scope="col">User</th>
                    <th scope="col">Location</th>
                    <th scope="col">Adult Quantity</th>
                    <th scope="col">Children Quantity</th>
                    <th scope="col">Message</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="text-nowrap text-center">
                        <td><a href="/view-detail/{{$order->id}}">{{$order->id}}</a></td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone_number}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->room->room_type}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->location->name}}</td>
                        <td>{{$order->adult_quantity}}</td>
                        <td>{{$order->children_quantity}}</td>
                        <td class="text-wrap">{{$order->message}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
