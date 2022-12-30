@extends('layouts.navbar')
@section('content')
    <div>
        <h2>Mã hoá đơn: {{$orderFound->id}}</h2>
        <h2>Người order: {{$orderFound->user->name}}</h2>
        <h2>Email: {{$orderFound->email}}</h2>
        <h2>Yêu cầu: {{$orderFound->enquiry}}</h2>
        <h2>Tin nhắn: {{$orderFound->message}}</h2>
        <h2>Vùng miền order: {{$orderFound->region->region}}</h2>
        <h2>Thời gian order: {{$orderFound->created_at}}</h2>
    </div>
@endsection
