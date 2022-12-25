<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
//use DB;

class LocationController extends Controller
{
    public function store(Request $request) {
        $location = new Location;
        $location->name = $request->input('locationName');
        $location->description = $request->input('locationContent');
        $location->image = $request->input('image');
        $location->status = $request->input('status');
        $location->save();
        return redirect('locationlist');
    }

    public function index() {
//        $locations = DB::table('locations')->get();
        return view('location-list', ['list' => Location::all()]);
    }

    public function edit($id) {
        $location = Location::findOrFail($id);
        return view('admin-edit', compact('location'));
    }

    public function destroy($id) {
        $location = Location::find($id);
        $location->delete();
        return redirect('locationlist');
    }

    public function update(Request $request, $id) {
        $location = Location::find($id);
        $location->name = $request->input('locationName');
        $location->description = $request->input('locationContent');
        $location->image = $request->input('image');
        $location->status = $request->input('status');
        $location->save();
        return redirect('locationlist');
    }

//    function show(Request $request) {
//        return view('location-list', ['list' => Location::all()]);
//    }

    function returnHome() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        return view('welcome', ['list' => Location::all()], compact('data'));
    }

}
