<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\User;
use App\Models\Order;

class RouteController extends Controller
{


    function returnAbout() {
        return view('about-us');
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
        return view('login');
    }

    function register() {
        return view('register');
    }

    function orderlist() {
        $orders = Order::all();
        return view('order-list', compact('orders'));
    }
}
