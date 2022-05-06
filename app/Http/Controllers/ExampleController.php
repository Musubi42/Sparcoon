<?php

namespace App\Http\Controllers;

use App\Models\Example;
use App\Http\Requests\StoreExampleRequest;
use App\Http\Requests\UpdateExampleRequest;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examples = Example::paginate(10);
        return view('example.index', compact('examples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExampleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExampleRequest $request)
    {
        $validated = $request->validated();
        $example  = new Example([
            'title'=> $request->title,
            'user_id'=> auth()->user()->id,
        ]);

        $example->save();
        return redirect()->route('examples.index')->with('success', 'L\'exemple est bien enregistré.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    {
        return view('example.show', compact('example'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function edit(Example $example)
    {
        return view('example.update', compact('example'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExampleRequest  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExampleRequest $request, Example $example)
    {
        $example->update($request->all());
        return redirect()->route('examples.index')->with('success', 'L\'exemple est bien modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        Example::destroy($example->id);
        return redirect()->route('examples.index')->with('success', 'L\'exemple est bien supprimé.');
    }
}
