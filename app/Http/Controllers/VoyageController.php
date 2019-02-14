<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;


class VoyageController extends Controller
{
    function index() {
        $voyages = Voyage::all();
        return view('site.voyages')->with('voyages', $voyages);
    }

    // function index(Request $request) {
    //     $voyages = Voyage::where(function($query) {
    //         $query->where('period', "=", $request);
    //     })->get();
    //     return view('site.voyages')->with('voyages', $voyages);
    // }

    function show($id) {
        $voyage = Voyage::findOrFail($id);
        return view('site.voyage')->with('voyage', $voyage);
    }
}
