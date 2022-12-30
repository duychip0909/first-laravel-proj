@extends('layouts.navbar')
@section('content')

    <div id="locationList" class="flex-fill">
        <section class="container">
            <div class="d-flex justify-content-between align-items-center my-5">
                <h2 class="headingTitle m-0">Location List</h2>
                <form method="get" class="form-filter">
                    @csrf
                    <select name="filter" id="regionSelect">
                        <option>Pick one...</option>
                        @foreach($regionList as $region)
                            <option value="{{$region->id}}">{{$region->region}}</option>
                        @endforeach
                    </select>
                </form>
                <form action="/test">
                    <button type="submit" class="btn-search">Search</button>
                </form>
            </div>
            <div class="d-grid template">
                @foreach($locationFound as $location)
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="ratio ratio-4x3">
                                    <img src="{{$location->image}}" class="img-fluid" alt="...">
                                </div>
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
