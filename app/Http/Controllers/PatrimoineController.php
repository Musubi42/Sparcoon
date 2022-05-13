<?php

namespace App\Http\Controllers;

use App\Models\Patrimoine;
use App\Http\Requests\StorePatrimoineRequest;
use App\Http\Requests\UpdatePatrimoineRequest;

class PatrimoineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatrimoineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatrimoineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimoine  $patrimoine
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimoine $patrimoine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrimoine  $patrimoine
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrimoine $patrimoine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatrimoineRequest  $request
     * @param  \App\Models\Patrimoine  $patrimoine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatrimoineRequest $request, Patrimoine $patrimoine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimoine  $patrimoine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrimoine $patrimoine)
    {
        //
    }
}
