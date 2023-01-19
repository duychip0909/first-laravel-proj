<?php

namespace App\Http\Livewire;

use App\Http\Requests\locationAddRequest;
use App\Models\Location;
use App\Models\Region;
use Livewire\Component;

class LocationStore extends Component
{
    public $locations;

    public function mount()
    {
        $this->locations = Location::all();
    }

    public function store(locationAddRequest $request)
    {
        $validated = $request->validated();
        $record = Location::newQuery()->create($validated);
        $record->save();
        $record->refresh();
        $this->mount();
    }

    public function render()
    {
        $regionList = Region::all();
        return view('livewire.location-store', compact('regionList'));
    }
}
