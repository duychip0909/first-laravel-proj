@extends('layouts.navbar')
@section('content')
    <div id="locationList" class="flex-fill">
        <section class="container">
            <h2 class="headingTitle">Location List</h2>
            <div class="d-grid template">
                @foreach($list as $location)
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$location->image}}" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$location->name}}</h5>
                                    <p class="card-text">{{$location->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </div>

@endsection
