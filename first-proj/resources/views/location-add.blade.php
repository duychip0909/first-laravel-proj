@extends('layouts.navbar')
@section('content')
    <div id="locationList" class="flex-fill">
        <section>
            <div class="container">
                <div class="box-header">
                    <h2 class="box-title fw-bold">Manage Location</h2>
                    <a href="javascript:;" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#AddNewLocation">
                        <img src="{{asset('imgs/add.svg')}}" alt="" class="d-inline me-1 add-icon">
                        Add New Location
                    </a>
                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $location)
                            <tr>
                                <td>{{$location->id}}</td>
                                <td>{{$location->name}}</td>
                                <td class="text-wrap text-start">{{$location->description}}</td>
                                <td>{{$location->status}}</td>
                                <td>
                                    <a href="/update/{{$location->id}}" data-json="{{json_encode($location)}}" data-action="update" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#EditLocation"><img src="{{asset('imgs/edit.svg')}}" alt=""></a>
                                    <a href="/delete/{{$location->id}}" data-action="remove" data-bs-toggle="modal" data-bs-target="#confirmRemove"><img src="{{asset('imgs/bin.svg')}}" alt=""></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="confirmRemove" tabindex="-1" aria-labelledby="popUpConfirm" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <h2 class="m-0">
                                Are you sure about that?
                            </h2>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <form action="" method="post" class="d-flex align-items-center justify-content-evenly w-100">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="AddNewLocation" tabindex="-1" aria-labelledby="AddNewLocation" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fw-bold fs-3" id="AddNewLocation">Add New Location</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/store" method="post">
                                @csrf
                                @method('post')
                                <div class="info">
                                    <div class="inputWrap">
                                        <label for="name" class="mb-1">Name</label>
                                        <input class="fname mb-3" type="text" name="locationName" placeholder="Location name here...">
                                    </div>
                                    <div class="inputWrap">
                                        <label for="Description" class="mb-1">Description</label>
                                        <input type="text" class="mb-3" name="locationContent" placeholder="Content here...">
                                    </div>

                                      <div class="inputWrap">
                                          <label for="Image" class="mb-1">Image Link</label>
                                          <input type="text" class="mb-3" name="image" placeholder="Image here...">
                                      </div>

                                    <div class="inputWrap">
                                        <label for="status" class="mb-1">Status</label>
                                         <input type="text" class="mb-3" name="status" placeholder="Status here...">
                                     </div>
                                </div>
                                <button class="btn-confirm" role="button"><span class="text">Confirm</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade" id="EditLocation" tabindex="-1" aria-labelledby="EditLocation" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fw-bold fs-3" id="EditLocation">Edit Location</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                <div class="modal-body">
                                    <form method="post">
                                        @csrf
                                        @method('put')
                                        <div class="info">
                                            <div class="inputWrap">
                                                <label for="name" class="mb-1">Name</label>
                                                <input class="fname mb-3" type="text" name="locationName" placeholder="Location name here...">
                                            </div>
                                            <div class="inputWrap">
                                                <label for="Description" class="mb-1">Description</label>
                                                <input type="text" class="mb-3" name="locationContent" placeholder="Content here...">
                                            </div>

                                            <div class="inputWrap">
                                                <label for="Image" class="mb-1">Image Link</label>
                                                <input type="text" class="mb-3" name="image" placeholder="Image here...">
                                            </div>

                                            <div class="inputWrap">
                                                <label for="status" class="mb-1">Status</label>
                                                <input type="text" class="mb-3" name="status" placeholder="Status here...">
                                            </div>
                                        </div>
                                        <button class="btn-confirm" role="button" data-action="update" type="submit"><span class="text">Update</span></button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

@endsection
