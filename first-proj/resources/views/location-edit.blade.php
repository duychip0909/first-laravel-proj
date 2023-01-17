@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Form create location</h5> <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('location.update', ['id' => $location->id])}}">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Location Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="basic-default-name" value="{{$location->name}}" placeholder="John Doe">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Location Content</label>
                    <div class="col-sm-10">
                        <textarea type="text" cols="10" rows="10" style="resize: none" class="form-control" name="description" id="basic-default-company" placeholder="ACME Inc.">
                            {{$location->description}}
                        </textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Image</label>
                    <div class="col-sm-10">
                        <input type="text" id="basic-default-phone" value="{{$location->image}}" name="image" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Region</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Region Options</label>
                            <select class="form-select" name="region_id" id="inputGroupSelect01">
                                @foreach($regionList as $region)
                                    <option value="{{$region->id}}">{{$region->region}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
