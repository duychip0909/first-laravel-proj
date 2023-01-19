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
            @foreach($locations as $location)
                <tr>
                    <td><strong>{{$location->id}}</strong></td>
                    <td>{{$location->name}}</td>
                    <td>
                        <div class="text-truncate" style="width: 800px">{{$location->description}}</div>
                    </td>
                    <td>{{$location->regions->region}}</td>
                    <td>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input status-switch" data-action="hide/{{$location->id}}" {{$location->deleted_at == null ? 'checked' : ''}} type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('location.edit', ['id' => $location->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <button class="dropdown-item" wire:click="destroy({{$location->id}})"><i class="bx bx-trash me-1"></i> Delete</button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@livewireScripts
@section('customScript')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        window.addEventListener('deleted', event => {
            Toast.fire({
                icon: 'success',
                title: 'Delete location successfully'
            })
        })
    </script>
@endsection
