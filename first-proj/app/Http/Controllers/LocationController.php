<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use App\Models\Region;
use Egulias\EmailValidator\Parser\CommentStrategy\LocalComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use DB;

class LocationController extends Controller
{

    public function index() {
        return view('location-list', [
            'locationFound' => Location::all(),
            'regionList' => Region::all()
        ]);
    }

    public function list() {
        return view('location-add', [
            'locationFound' => Location::withTrashed()->get(),
            'regionList' => Region::all()
        ]);
    }

    public function edit($id) {
        $location = Location::find($id);
        $regionList = Region::all();
        return view('location-edit', compact('location', 'regionList'));
    }

    function filter($id) {
        return view('location-list', [
            'locationFound' => Region::find($id)->locations,
            'regionList' => Region::all(),
        ]);
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
        $locations = Location::all();
        $rooms = Room::all();
        return view('book-form', compact('locations', 'rooms'));
    }


    public function storeBooking(Request $request) {
        $currentUser = User::find(Auth::id())->id;
        $order = new Order;
        $order->name = $request->input('name');
        $order->phone_number = $request->input('phone_number');
        $order->email = $request->input('email');
        $order->room_id = $request->input('room_id');
        $order->user_id = $currentUser;
        $order->location_id = $request->input('location_id');
        $order->adult_quantity = $request->input('adult_quantity');
        $order->children_quantity = $request->input('children_quantity');
        $order->message = $request->input('message');
        $order->save();
        if ($order->save()) {
            return redirect('/')->with('success', 'Order successfully');
        } else {
            return redirect('/')->with('failure', 'Order fail');
        }
    }

    public function hide($id) {
        $item = Location::withTrashed()->where('id', $id)->first();
        if ($item->deleted_at != null)
            $item->restore();
        else
            $item->delete();

        return $item;
    }
}
