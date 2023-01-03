@extends('layouts.admin')
@section('content')
    <div id="book-form" class="d-grid">
        <div class="sub-banner">
            <img src="https://images.unsplash.com/photo-1505576391880-b3f9d713dc4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper text-center booking mb-3">
                <h2 class="title m-0">Make a Booking</h2>
                <p class="description m-0 mb-3">There’s nine individually designed rooms by local artists which look and feel completely unique.</p>
                <form action="/storeBooking" method="get">
                    @csrf
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="input-gr col-4">
                            <label for="" class="d-block">Name</label>
                            <input type="text" name="name" class="w-100">
                        </div>

                        <div class="input-gr col-4">
                            <label for="" class="d-block">Phone number</label>
                            <input type="text" name="phone_number" class="w-100">
                        </div>

                        <div class="input-gr col-4">
                            <label for="" class="d-block">Email</label>
                            <input type="text" name="email" class="w-100">
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="input-gr col-6">
                            <label for="">Room</label>
                            <select name="room_id" id="">
                                @foreach($rooms as $room)
                                     <option value="{{$room->id}}">{{$room->room_type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-gr col-6">
                            <label for="">Location</label>
                            <select name="location_id" id="">
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="input-gr col-6">
                            <label for="">Adults</label>
                            <select name="adult_quantity" id="">
                                @for($i = 1; $i <= 30; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="input-gr col-6">
                            <label for="">Children</label>
                            <select name="children_quantity" id="">
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="input-gr w-100 mb-4">
                        <label for="" class="d-block">Messages</label>
                        <textarea name="message" id="" cols="30" rows="5" class="w-100 p-2" style="resize: none;"></textarea>
                    </div>

                    <button type="submit" class="learnmore-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
