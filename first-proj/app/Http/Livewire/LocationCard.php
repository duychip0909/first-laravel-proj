<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Services\Interfaces\ILocationsService;
use Livewire\Component;

class LocationCard extends Component
{
    public $locations;

    protected $listeners = ['reloadLocations'];

    public function mount()
    {
        $this->locations = Location::all();
    }

    public function reloadLocations($region_id, $query)
    {
        $this->locations = Location::query();

        if ($region_id) {
            $this->locations = $this->locations->where('region_id', $region_id);
        }

        if ($query) {
            $this->locations = $this->locations->where('name', 'like', '%' . $query . '%')->orWhere('description', 'like', '%' . $query . '%');
        }

        $this->locations = $this->locations->get();
    }

    public function render()
    {
        return view('livewire.location-card');
    }
}
