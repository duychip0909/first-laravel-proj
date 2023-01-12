<?php

namespace app\Repositories\Implements;

use App\Models\Location;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\LocationRepositoryInterface;
use Illuminate\Support\Facades\Config;

class LocationRepository extends BaseRepository implements LocationRepositoryInterface
{
    protected $model_class = Location::class;

}
