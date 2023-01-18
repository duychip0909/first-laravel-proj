<?php

namespace App\Http\Livewire;

use App\Models\Region;
use Livewire\Component;

class LocationFilter extends Component
{
    public $region_id;

    public $query;

    public function render()
    {
        $locationType = Region::all();
        return view('livewire.location-filter', compact('locationType'));
    }

    public function filter()
    {
        $this->emitTo('location-card', 'reloadLocations', $this->region_id, $this->query);
    }
}
