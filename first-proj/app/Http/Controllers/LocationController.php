<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    function store(Request $request) {
        $location = new Location();
        $location->name = $request->input('locationName');
        $location->description = $request->input('locationContent');
        $location->status = $request->input('status');
        $location->save();
        return redirect('locationlist');
    }

    function show(Request $request) {
        return view('location-list', ['list' => Location::all()]);
    }

    function returnHome() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        return view('welcome', ['list' => Location::all()], compact('data'));
    }

}
