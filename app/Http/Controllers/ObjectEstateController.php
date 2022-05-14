<?php

namespace App\Http\Controllers;

use App\Models\objectEstate;
use App\Http\Requests\StoreobjectEstateRequest;
use App\Http\Requests\UpdateobjectEstateRequest;
use App\Models\Categorie;
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
        $categories = Categorie::all();
        return view('patrimoine.objet_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreobjectEstateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreobjectEstateRequest $request)
    {
        Validator::make($request->all(),
        [
            'name' => 'required|string|max:255',
            'date_acquisition' => 'required|date',
            'value' => 'required|numeric',
            'categorie_id' => 'required|numeric',
            'patrimoine_id' => 'required|numeric',
            'description' => 'required|string|max:255',
        ])->validated();

        $objectEstate = new objectEstate([
            'name' => $request->name,
            'description' => $request->description,
            'date_acquisition' => $request->date_acquisition,
            'categorie_id' => $request->categorie_id,
            'patrimoine_id'=> $request->patrimoine_id,
            'value' => $request->value,
        ]);

        $objectEstate->save();
        
        return redirect()->route('objectEstates.index')->with('success', 'Objet créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function show(objectEstate $objectEstate)
    {
        return view('patrimoine.objet_show', compact('objectEstate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function edit(objectEstate $objectEstate)
    {
        return view('patrimoine.objet_modify', compact('objectEstate'));
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
        Validator::make($request->all())->validated();

        $objectEstate->name = $request->name;
        $objectEstate->description = $request->description;
        $objectEstate->date_acquisition = $request->date_acquisition;
        $objectEstate->value = $request->value;

        $objectEstate->save();

        return redirect('/patrimoine')->with('success', 'Objet modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\objectEstate  $objectEstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(objectEstate $objectEstate)
    {
        $objectEstate->delete();

        return redirect('/patrimoine')->with('success', 'Objet supprimé avec succès');
    }
}
