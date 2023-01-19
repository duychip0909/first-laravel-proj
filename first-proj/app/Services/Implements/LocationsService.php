<?php

namespace App\Services\Implements;

use App\Repositories\Interfaces\LocationRepositoryInterface;
use App\Services\Interfaces\ILocationsService;

class LocationsService implements ILocationsService
{
    protected $locationRepository;

    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    function destroy($id)
    {
        return $this->locationRepository->destroy($id);
    }

    function store($data)
    {
        return $this->locationRepository->store($data);
    }

    function hide($id)
    {
        return $this->locationRepository->hide($id);
    }

    function update($data, $id)
    {
        return $this->locationRepository->update($data, $id);
    }

}
