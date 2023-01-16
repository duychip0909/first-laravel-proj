<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Room;
use App\Models\User;
use App\Models\Order;

class RouteController extends Controller
{


    function returnAbout() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        $list = Location::all();
        return view('welcome', compact('data', 'list'));
    }

    function returnOurroom() {
        return view('our-rooms');
    }

    function returnContact() {
        return view('contact');
    }

    function edit() {
        return view('admin-edit');
    }

    function sidebar() {
        return view('layouts.navbar');
    }

    function admin() {
        return view('login-form');
    }

    function register() {
        return view('register');
    }

    function orderlist() {
        $orders = Order::all();
        return view('order-list', compact('orders'));
    }
}
