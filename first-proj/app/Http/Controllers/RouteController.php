<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{
    function returnHome() {
        $data = [
           'title' => 'Page title example',
           'content' => 'Page content'
        ];

        $recentPosts = [
            (object) [
                'title' => 'post #1',
                'content' => 'post content #1'
            ],
            (object) [
                'title' => 'post #2',
                'content' => 'post content #2'
            ],
            (object) [
                'title' => 'post #3',
                'content' => 'post content #3'
            ],
            (object) [
                'title' => 'post #4',
                'content' => 'post content #4'
            ]
        ];

        return view('welcome', compact('data', 'recentPosts'));
    }
    function returnAbout() {
        return view('about-us');
    }

    function returnOurroom() {
        return view('our-rooms');
    }

    function returnContact() {
        return view('contact');
    }
}
