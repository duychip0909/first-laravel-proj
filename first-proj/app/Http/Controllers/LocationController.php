<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Egulias\EmailValidator\Parser\CommentStrategy\LocalComment;
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
        return redirect('locationadd');
    }

    public function index() {
//        $locations = DB::table('locations')->get();
        return view('location-add', ['list' => Location::all()]);
    }

    public function list() {
        return view('location-list', ['list' => Location::all()]);
    }

    public function edit($id) {
        $location = Location::findOrFail($id);
        return view('admin-edit', compact('location'));
    }

    public function destroy($id) {
        $location = Location::find($id);
        $location->delete();
        return redirect('locationadd');
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

    function location_detail($id) {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        $location = Location::where('id', '=', $id)->select('*')->first();
        return view('location-detail', compact('data', 'location'));
    }

    function returnHome() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        return view('welcome', ['list' => Location::all()], compact('data'));
    }



}
