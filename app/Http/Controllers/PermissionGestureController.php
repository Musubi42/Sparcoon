<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionGestureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        $user = User::findOrFail($id);
        $role = Role::findOrFail(2);
        $role->givePermissionTo('object.create');
        $role->givePermissionTo('patrimoine.index');
        $user->assignRole($role);

        return redirect()->route('accueil')->with('success', 'Le rôle a bien été assigné.');
    }

    public function createPermissions()
    {
      
            Permission::create(['name'=>'categorie.create']);
            Permission::create(['name'=>'categorie.update']);
            Permission::create(['name'=>'categorie.show']);
            Permission::create(['name'=>'categorie.delete']);
            Permission::create(['name'=>'image.create']);
            Permission::create(['name'=>'image.update']);
            Permission::create(['name'=>'image.show']);
            Permission::create(['name'=>'image.delete']);
            Permission::create(['name'=>'object.create']);
            Permission::create(['name'=>'object.update']);
            Permission::create(['name'=>'object.show']);
            Permission::create(['name'=>'object.delete']);
            Permission::create(['name'=>'patrimoine.index']);
        
        return redirect()->route('accueil')->with('success', 'Les permissions par défaut ont été initialisées.');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
