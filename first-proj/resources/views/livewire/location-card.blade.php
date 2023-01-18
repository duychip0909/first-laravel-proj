<div>
    @livewireStyles
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" wire:loading.remove>
        @foreach($locations as $location)
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
        <div class="d-flex align-items-center justify-content-center mt-5">
            <div wire:loading class="spinner-border spinner-border-lg text-primary"></div>
        </div>
</div>
