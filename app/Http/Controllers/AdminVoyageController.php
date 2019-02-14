<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request; 
use Validator;

class AdminVoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $voyages = Voyage::all();
        return view('admin.voyages')->with('voyages', $voyages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.voyages_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'label' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $voyage = new Voyage;
        $voyage->label = $request->label;
        $voyage->description = $request->description;
        $voyage->country = $request->country;
        $voyage->period = $request->period;
        $voyage->save();

        return redirect()->route('voyages.index')->with('saved', 'Le voyage " '. $voyage->label .' " a bien été enregistré !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        return view('admin.voyages_show', ['voyage'=>$voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        return view('admin.voyages_edit', ['voyage'=>$voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->label = $request->label;
        $voyage->description = $request->description;
        $voyage->country = $request->country;
        $voyage->period = $request->period;
        $voyage->save();

        return redirect()->route('voyages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect()->route('voyages.index')->with('deleted', 'Le voyage " '. $voyage->label .' " a bien été supprimé !');
    }
}
