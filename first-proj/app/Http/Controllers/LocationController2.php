<?php

namespace App\Http\Controllers;

use App\Http\Requests\locationAddRequest;
use App\Models\Location;
use App\Services\Interfaces\ILocationsService;
use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LocationController2 extends Controller
{
    private $LocationsService;

    public function __construct(ILocationsService $LocationsService)
    {
        $this->LocationsService = $LocationsService;
    }

    public function destroy($id) {
        $this->LocationsService->destroy($id);
        toast('Delete location successfully','success');
        return back();
    }

    public function store(locationAddRequest $request)
    {
        try {
            $validated = $request->validated();
            $this->LocationsService->store($validated);
            if ($validated == null) {
                toast('Missing requirements','error');
                return back();
            }
            toast('Create new location successfully','success');
            return back();
        } catch (Exception $e) {
            toast('Error' . $e->getMessage() ,'error');
            return back();
        }
    }

    public function hide($id)
    {
        return $this->LocationsService->hide($id);
    }

}
