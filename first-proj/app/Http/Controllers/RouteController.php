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

    function admin() {
        return view('register');
    }

    function edit() {
        return view('admin-edit');
    }

    function sidebar() {
        return view('layouts.navbar');
    }

    function login() {
        return view('login');
    }

//    function locationlist() {
//        return view('location-list');
//    }

}
