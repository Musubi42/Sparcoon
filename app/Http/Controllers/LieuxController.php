<?php

namespace App\Http\Controllers;

use App\Models\Lieux;
use App\Http\Requests\StoreLieuxRequest;
use App\Http\Requests\UpdateLieuxRequest;

class LieuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lieux = auth()->user()->lieux;
        return view('lieux.index', compact('lieux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lieux.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLieuxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLieuxRequest $request)
    {
        $validated = $request->validated();
        $lieux = new Lieux(
            [
                'name' => $request->name,
                'description' => $request->description,
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
                'rank' => $request->rank,
                'user_id' => auth()->user()->id,
            ]
        );

        $lieux->save();

        return redirect()->route('lieux.index')->with('success', 'Votre lieu a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lieux  $lieux
     * @return \Illuminate\Http\Response
     */
    public function show(Lieux $lieux)
    {
        return view('lieux.show', compact('lieux'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lieux  $lieux
     * @return \Illuminate\Http\Response
     */
    public function edit(Lieux $lieux)
    {
        return view('lieux.edit', compact('lieux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLieuxRequest  $request
     * @param  \App\Models\Lieux  $lieux
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLieuxRequest $request, Lieux $lieux)
    {
        $validated = $request->validated();
        $lieux->name = $request->name;
        $lieux->description = $request->description;
        $lieux->adresse = $request->adresse;
        $lieux->telephone = $request->telephone;
        $lieux->rank = $request->rank;
        $lieux->save();

        return redirect()->route('lieux.index')->with('success', 'Votre lieu a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lieux  $lieux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lieux $lieux)
    {
        $lieux->delete();

        return redirect()->route('lieux.index')->with('success', 'Votre lieu a bien été supprimé');
    }
}
