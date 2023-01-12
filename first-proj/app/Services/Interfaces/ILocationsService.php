<?php

namespace App\Services\Interfaces;

interface ILocationsService
{
    function destroy($id);

    function store($data);

    function hide($id);
}
