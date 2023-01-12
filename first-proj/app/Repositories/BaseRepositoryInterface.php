<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{
    public function destroy($id);

    public function store($data);

    public function  hide($id);
}
