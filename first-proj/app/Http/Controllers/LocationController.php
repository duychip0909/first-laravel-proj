<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Order;
use App\Models\User;
use App\Models\Region;
use Egulias\EmailValidator\Parser\CommentStrategy\LocalComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use DB;

class LocationController extends Controller
{
    public function store(Request $request) {
        $location = new Location;
        $location->name = $request->input('locationName');
        $location->description = $request->input('locationContent');
        $location->image = $request->input('image');
        $location->status = $request->input('status');
        $location->region_id = $request->input('region_id');
        $location->save();
        return redirect('locationadd');
    }

    public function index() {
        return view('location-list', [
            'locationFound' => Location::all(),
            'regionList' => Region::all()
        ]);
    }

    public function list() {
        return view('location-add', [
            'locationFound' => Location::all(),
            'regionList' => Region::all()
        ]);
    }

    public function edit($id) {
        $location = Location::findOrFail($id);
        return view('admin-edit', compact('location'));
    }

    public function destroy($id) {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect('locationadd');
    }

    function filter($id) {
        return view('location-list', [
            'locationFound' => Region::find($id)->locations,
            'regionList' => Region::all(),
        ]);
    }

    public function update(Request $request, $id) {
        $location = Location::findOrFail($id);
        $location->name = $request->input('locationName');
        $location->description = $request->input('locationContent');
        $location->image = $request->input('image');
        $location->status = $request->input('status');
        $location->region_id = $request->input('region_id');
        $location->save();
        return redirect('locationadd');
    }



    function location_detail($id) {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        $locationList = Location::all();
        $searchedInfo = Location::where('id', '=', $id)->select('*')->first();
        return view('location-detail', compact('data', 'searchedInfo', 'locationList'));
    }

    function returnHome() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        return view('welcome', ['list' => Location::all()], compact('data'));
    }

    public function book() {
        return view('book-form');
    }

    public function storeBooking(Request $request) {
        $currentUser = User::find(Auth::id())->id;
        $order = new Order;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->enquiry = $request->input('enquiry');
        $order->message = $request->input('message');
        $order->user_id = $currentUser;
        $order->region_id = $request->input('region_id');
        $order->save();
        return redirect('locationadd');
    }
}
