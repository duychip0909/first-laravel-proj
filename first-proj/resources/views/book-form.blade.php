@extends('layouts.app')
@section('content')
    <form action="/storeBooking" method="get">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">

        <label for="">Email</label>
        <input type="text" name="email">

        <label for="">Enquiry</label>
        <input type="text" name="enquiry">

        <label for="">Messages</label>
        <input type="text" name="message">

        <label for="">Region</label>
        <input type="text" name="region_id">

        <button type="submit">Submit</button>
    </form>
@endsection
