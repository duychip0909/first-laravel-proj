<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;

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

    function location_detail() {
        $data = [
            'title' => 'Welcome to The hotel',
            'content' => 'A series of open-house hotels inspired by the diversity and originality of the streets and scenes that surround us.'
        ];
        return view('location-detail', compact('data'));
    }

}
