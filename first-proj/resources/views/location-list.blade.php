@extends('layouts.admin.master')
@section('content')
    <form method="get" class="form-filter">
        @csrf
        <select name="filter" id="regionSelect">
            <option>Pick one...</option>
            @foreach($regionList as $region)
                <option value="{{$region->id}}">{{$region->region}}</option>
            @endforeach
        </select>
    </form>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @foreach($locationFound as $location)
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="{{$location->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$location->name}}</h5>
                    <p class="card-text">{{$location->description}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('customScript')
    <script>
        $(function() {
            $('select').on('change', function() {
                let type = $(this).val();
                $('.form-filter').attr('action', '/filter/' + type);
                $('.form-filter').trigger('submit');
            })
        })
    </script>
@endsection
