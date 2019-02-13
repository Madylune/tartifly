<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('admin');
    }

    function home() {
        return view('site.welcome');
    }

    function about() {
        return view('site.about');
    }

    function messages() {
        return view('site.messages');
    }

    function admin() {
        return view('admin.index');
    }
}
