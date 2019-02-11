<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('site.welcome');
    }

    function about() {
        return view('site.about');
    }

    function messages() {
        return view('site.messages');
    }
}
