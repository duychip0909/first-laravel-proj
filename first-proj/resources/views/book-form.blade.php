@extends('layouts.admin')
@section('content')
    <div id="book-form" class="d-grid">
        <div class="sub-banner">
            <img src="https://images.unsplash.com/photo-1505576391880-b3f9d713dc4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper text-center">
                <h2 class="title m-0">Make a Booking</h2>
                <p class="description m-0 mb-3">There’s nine individually designed rooms by local artists which look and feel completely unique.</p>
                <form action="/storeBooking" method="get">
                    @csrf
                    <div class="input-gr">
                        <label for="">Name</label>
                        <input type="text" name="name">
                    </div>

                    <div class="input-gr">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number">
                    </div>

                    <div class="input-gr">
                        <label for="">Email</label>
                        <input type="text" name="email">
                    </div>

                    <div class="input-gr">
                        <label for="">Room</label>
                        <input type="text" name="room_type">
                    </div>

                    <div class="input-gr">
                        <label for="">Region</label>
                        <input type="text" name="region_id">
                    </div>

                    <div class="input-gr">
                        <label for="">Adults</label>
                        <select name="adult_quantity" id=""></select>
                    </div>

                    <div class="input-gr">
                        <label for="">Children</label>
                        <input type="text" name="children_quantity">
                    </div>

                    <div class="input-gr">
                        <label for="">Messages</label>
                        <input type="text" name="message">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
