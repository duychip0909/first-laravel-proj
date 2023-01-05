<?php

namespace App\Repositories\Eloquent;

use App\Models\Location;
use App\Repositories\LocationRepositoryInterfaceInterface;
use Faker\Provider\Base;

class LocationRepository extends BaseRepository implements LocationRepositoryInterfaceInterface
{
    protected $model_class = Location::class;
}
