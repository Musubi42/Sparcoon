<?php

namespace App\Http\Controllers;

use App\Models\objectEstate;
use App\Http\Requests\StoreobjectEstateRequest;
use App\Http\Requests\UpdateobjectEstateRequest;
use Illuminate\Support\Facades\Validator;

class ObjectEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectEstates = objectEstate::all();
        return view('patrimoine.patrimoine', compact('objectEstates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patrimoine.objet_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreobjectEstateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreobjectEstateRequest $request)
    {
        Validator::make($request->all())->validated();

        $objectEstate = new objectEstate([
            'name' => $request->name,
            'description' => $request->description,
            'date_acquisition' => $request->date_acquisition,
            'value' => $request->value,
        ]);

        $objectEstate->save();
        
        return redirect('/patrimoine')->with('success', 'Objet créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function show(objectEstate $objectEstate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function edit(objectEstate $objectEstate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateobjectEstateRequest  $request
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateobjectEstateRequest $request, objectEstate $objectEstate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(objectEstate $objectEstate)
    {
        //
    }
}
