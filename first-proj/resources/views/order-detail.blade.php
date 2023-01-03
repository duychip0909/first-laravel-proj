@extends('layouts.navbar')
@section('content')
    <div>
        <h2>Mã hoá đơn: {{$orderFound->id}}</h2>
        <h2>Người order: {{$orderFound->user->name}}</h2>
        <h2>Số điện thoại: {{$orderFound->phone_number}}</h2>
        <h2>Email: {{$orderFound->email}}</h2>
        <h2>Loại phòng: {{$orderFound->room->room_type}}</h2>
        <h2>Số lượng trẻ em: {{$orderFound->children_quantity}}</h2>
        <h2>Số lượng người lớn: {{$orderFound->adult_quantity}}</h2>
        <h2>Tin nhắn: {{$orderFound->message}}</h2>
        <h2>Địa điểm order: {{$orderFound->location->name}}</h2>
        <h2>Thời gian order: {{$orderFound->created_at}}</h2>
    </div>
@endsection
