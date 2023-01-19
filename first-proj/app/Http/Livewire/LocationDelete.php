<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;

class LocationDelete extends Component
{
    public $locations;

    protected $listeners = [
        'destroy' => 'destroy'
    ];

    public function mount()
    {
        $this->locations = Location::all();
    }

    public function destroy($id)
    {
        $location = Location::query();
        $location->withTrashed()->where('id', $id)->forceDelete();
        $this->mount();
        $this->dispatchBrowserEvent('deleted');
    }

    public function render()
    {
        return view('livewire.location-delete');
    }
}
