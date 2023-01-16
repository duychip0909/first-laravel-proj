@extends('layouts.admin.master')
@section('content')
{{--    <div id="locationList" class="flex-fill">--}}
{{--        <section>--}}
{{--            <div class="container">--}}
{{--                <div class="box-header">--}}
{{--                    <h2 class="box-title fw-bold">Manage Location</h2>--}}
{{--                    <a href="javascript:;" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#AddNewLocation">--}}
{{--                        <img src="{{asset('imgs/add.svg')}}" alt="" class="d-inline me-1 add-icon">--}}
{{--                        Add New Location--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="table-wrapper">--}}
{{--                    <table>--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>ID</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Description</th>--}}
{{--                            <th>Region</th>--}}
{{--                            <th>Actions</th>--}}
{{--                            <th>Status</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($locationFound as $location)--}}
{{--                            <tr>--}}
{{--                                <td>{{$location->id}}</td>--}}
{{--                                <td>{{$location->name}}</td>--}}
{{--                                <td class="text-wrap text-start">{{$location->description}}</td>--}}
{{--                                <td>--}}
{{--                                    <div class="region region_{{$location->regions->id}}">--}}
{{--                                        {{$location->regions->region}}--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="/update/{{$location->id}}" data-json="{{json_encode($location)}}" data-action="update" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#EditLocation"><img src="{{asset('imgs/edit.svg')}}" alt=""></a>--}}
{{--                                    <a href="/delete/{{$location->id}}" data-action="remove" data-bs-toggle="modal" data-bs-target="#confirmRemove"><img src="{{asset('imgs/bin.svg')}}" alt=""></a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="checkbox-wrapper-3">--}}
{{--                                        <input--}}
{{--                                            type="checkbox"--}}
{{--                                            name="status"--}}
{{--                                            id="cbx-{{$location->id}}"--}}
{{--                                            data-action="hide/{{$location->id}}"--}}
{{--                                            {{$location->deleted_at == null ? 'checked' : ''}}--}}
{{--                                        />--}}
{{--                                        <label for="cbx-{{$location->id}}" class="toggle"><span></span></label>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal fade" id="confirmRemove" tabindex="-1" aria-labelledby="popUpConfirm" aria-hidden="true">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-body text-center">--}}
{{--                            <h2 class="m-0">--}}
{{--                                Are you sure about that?--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="modal-footer justify-content-center">--}}
{{--                            <form method="post" class="d-flex align-items-center justify-content-evenly w-100">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}
{{--                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                <button type="submit" class="btn btn-primary">Confirm</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal fade" id="AddNewLocation" tabindex="-1" aria-labelledby="AddNewLocation" aria-hidden="true">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h1 class="modal-title fw-bold fs-3" id="AddNewLocation">Add New Location</h1>--}}
{{--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}
{{--                            <form action='store' method="post">--}}
{{--                                @csrf--}}
{{--                                @method('post')--}}
{{--                                <div class="info">--}}
{{--                                    <div class="inputWrap">--}}
{{--                                        <label for="name" class="mb-1">Name</label>--}}
{{--                                        <input class="fname mb-3" type="text" name="name" placeholder="Location name here...">--}}
{{--                                    </div>--}}
{{--                                    <div class="inputWrap">--}}
{{--                                        <label for="Description" class="mb-1">Description</label>--}}
{{--                                        <input type="text" class="mb-3" name="description" placeholder="Content here...">--}}
{{--                                    </div>--}}

{{--                                      <div class="inputWrap">--}}
{{--                                          <label for="Image" class="mb-1">Image Link</label>--}}
{{--                                          <input type="text" class="mb-3" name="image" placeholder="Image here...">--}}
{{--                                      </div>--}}

{{--                                    <div class="inputWrap">--}}
{{--                                        <label for="region_id" class="mb-1">Region</label>--}}
{{--                                        <select name="region_id" id="" class="d-block region_select mb-3">--}}
{{--                                            @foreach($regionList as $region)--}}
{{--                                                <option value="{{$region->id}}">{{$region->region}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="btn-confirm" role="button"><span class="text">Confirm</span></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal fade" id="EditLocation" tabindex="-1" aria-labelledby="EditLocation" aria-hidden="true">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h1 class="modal-title fw-bold fs-3" id="EditLocation">Edit Location</h1>--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                            </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <form method="post">--}}
{{--                                        @csrf--}}
{{--                                        <div class="info">--}}
{{--                                            <div class="inputWrap">--}}
{{--                                                <label for="name" class="mb-1">Name</label>--}}
{{--                                                <input class="fname mb-3" type="text" name="locationName" placeholder="Location name here...">--}}
{{--                                            </div>--}}
{{--                                            <div class="inputWrap">--}}
{{--                                                <label for="Description" class="mb-1">Description</label>--}}
{{--                                                <input type="text" class="mb-3" name="locationContent" placeholder="Content here...">--}}
{{--                                            </div>--}}

{{--                                            <div class="inputWrap">--}}
{{--                                                <label for="Image" class="mb-1">Image Link</label>--}}
{{--                                                <input type="text" class="mb-3" name="image" placeholder="Image here...">--}}
{{--                                            </div>--}}

{{--                                            <div class="inputWrap">--}}
{{--                                                <label for="status" class="mb-1">Status</label>--}}
{{--                                                <input type="text" class="mb-3" name="status" placeholder="Status here...">--}}
{{--                                            </div>--}}

{{--                                            <div class="inputWrap">--}}
{{--                                                <label for="region_id" class="mb-1">Region</label>--}}
{{--                                                <select name="region_id" id="" class="mb-3">--}}
{{--                                                    @foreach($regionList as $region)--}}
{{--                                                        <option value="{{$region->id}}">{{$region->region}}</option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button class="btn-confirm" role="button" data-action="update" type="submit"><span class="text">Update</span></button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </section>--}}
{{--    </div>--}}
    <div class="card">
        <h5 class="card-header">Location Overview</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Region</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($locationFound as $location)
                    <tr>
                        <td><strong>{{$location->id}}</strong></td>
                        <td>{{$location->name}}</td>
                        <td>
                            <div class="text-truncate" style="width: 800px">{{$location->description}}</div>
                        </td>
                        <td>{{$location->regions->region}}</td>
                        <td>
                            <div class="form-check form-switch m-0">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
