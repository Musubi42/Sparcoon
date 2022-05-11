<?php

namespace App\Http\Controllers;

use App\Models\ExampleImage;
use App\Http\Requests\StoreExampleImageRequest;
use App\Http\Requests\UpdateExampleImageRequest;

class ExampleImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examples.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExampleImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExampleImageRequest $request)
    {
        $exampleImage = new ExampleImage([
            'name' => $request->name,
            'path' => $request->path,
            'extension' => $request->extension,
        ]);

        $exampleImage->save();
        return redirect()->route('examples.index')->with('success', 'L\'image est bien enregistrée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExampleImage  $exampleImage
     * @return \Illuminate\Http\Response
     */
    public function show(ExampleImage $exampleImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExampleImage  $exampleImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ExampleImage $exampleImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExampleImageRequest  $request
     * @param  \App\Models\ExampleImage  $exampleImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExampleImageRequest $request, ExampleImage $exampleImage)
    {
        $exampleImage->update($request->all());

        return redirect()->route('examples.index')->with('success', 'L\'image est bien modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExampleImage  $exampleImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExampleImage $exampleImage)
    {
        $exampleImage->delete();
        return view('examples.index')->with('success', 'L\'image est bien supprimée.');
    }
}
