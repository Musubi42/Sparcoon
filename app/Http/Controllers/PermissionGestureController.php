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
    $user->assignRole($role);

    return redirect()->route('accueil')->with('success', 'Le rôle a bien été assigné.');
  }

  public function createPermissions()
  {
    // Add permissions here
    // Permission of categorie
    Permission::create(['name' => 'categorie.create']);
    Permission::create(['name' => 'categorie.update']);
    Permission::create(['name' => 'categorie.show']);
    Permission::create(['name' => 'categorie.delete']);

    // Permission of image
    Permission::create(['name' => 'image.create']);
    Permission::create(['name' => 'image.update']);
    Permission::create(['name' => 'image.show']);
    Permission::create(['name' => 'image.delete']);

    // Permission of object
    Permission::create(['name' => 'object.create']);
    Permission::create(['name' => 'object.update']);
    Permission::create(['name' => 'object.show']);
    Permission::create(['name' => 'object.delete']);

    // Permission of patrimoine
    Permission::create(['name' => 'patrimoine.index']);

    // Permission of Intervenant
    Permission::create(['name' => 'intervenant.index']);


    // Create role
    $ceo = Role::create(['name' => 'CEO']);
    $soignant = Role::create(['name' => 'Soignant']);
    $patient = Role::create(['name' => 'Patient']);


    // Assign permissions to roles
    $ceo->givePermissionTo(['categorie.create', 'categorie.update', 'categorie.show', 'categorie.delete', 'image.create', 'image.update', 'image.show', 'image.delete', 'object.create', 'object.update', 'object.show', 'object.delete', 'patrimoine.index']);
    $soignant->givePermissionTo([
      'categorie.create', 'categorie.update', 'categorie.show', 'categorie.delete', 'image.create', 'image.update', 'image.show', 'image.delete', 'object.create', 'object.update', 'object.show', 'object.delete', 'patrimoine.index'
    ]);
    $patient->givePermissionTo([
      'categorie.show', 'image.show', 'object.show',  'patrimoine.index'
    ]);
    return redirect()->route('accueil')->with('success', 'Les permissions par défaut ont été initialisées ainsi que les rôles.');
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
