@extends('layouts.navbar')
@section('content')
    <form action="/storeRoom" method="get">
        @csrf
        <div class="input-gr">
            <label for="">Type</label>
            <input type="text" name="room_type">
        </div>

        <div class="input-gr">
            <label for="">Description</label>
            <input type="text" name="room_description">
        </div>

        <div class="input-gr">
            <label for="">Price</label>
            <input type="text" name="room_price">
        </div>

        <div class="input-gr">
            <label for="">Adult quantity</label>
            <input type="text" name="adult_quantity">
        </div>

        <div class="input-gr">
            <label for="">Children quantity</label>
            <input type="text" name="children_quantity">
        </div>

            <button type="submit">Submit</button>
    </form>
@endsection
