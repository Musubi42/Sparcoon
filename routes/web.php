<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PatrimoineController;
use App\Http\Controllers\ObjectEstateController;
use App\Http\Controllers\PermissionGestureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('accueil');
})->name('accueil')->middleware('auth');

Route::get('/profil', function () {
  return view('auth.home');
})->name('profil')->middleware('auth');

Route::middleware('auth')->group(function () {

  Route::get('/depenses', function () {
    return view('depenses');
  })->name('dep');

  Route::get('/traitements', function () {
    return view('traitements');
  })->name('traitement');

  Route::get('/calendrier', function () {
    return view('calendrier');
  })->name('cal');


  Route::middleware('auth')->group(function () {
    Route::resource('objectEstates', ObjectEstateController::class);
    Route::resource('patrimoines', PatrimoineController::class);
    Route::resource('categories', CategorieController::class);
  });
  // TODO : Les routes ci-dessous sont a créer

  // Route::get('/traitement', function () {
  //   return view('traitement');
  // })->name('traitement');

  Route::get('/intervenant', function () {
    return view('intervenant');
  })->name('intervenant');

  Route::get('/intervenant_create', function () {
    return view('intervenant.create');
  })->name('intervenant_create');

  Route::get('/traitement_show', function () {
    return view('traitement.show');
  })->name('traitement_show');

  // Route::get('/patrimoine', function () {
  //   return view('patrimoine.patrimoine');
  // })->name('patrimoine');

  // Route::get('/objet_show', function () {
  //   return view('patrimoine.objet_show');
  // })->name('objet_show');

  // Route::get('/objet_modify', function () {
  //   return view('patrimoine.objet_modify');
  // })->name('objet_modify');

  // Route::get('/objet_create', function () {
  //   return view('patrimoine.objet_create');
  // })->name('objet_create');

  Route::get('/patient', function () {
    return view('patient');
  })->name('patient');

  Route::get('/vehicule', function () {
    return view('vehicule');
  })->name('vehicule');

  Route::get('/calendrier', function () {
    return view('calendrier');
  })->name('calendrier');
});

Route::get('/profile/{userId}', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');

Route::resource('examples', ExampleController::class)->middleware('auth');

Route::get('/init/{id}/{role}', [PermissionGestureController::class, 'index'])->name('permission.index')->middleware('auth');


// Permissions gestions
Route::get('/permissions/create', [PermissionGestureController::class, 'createPermissions'])->name('permission.default')->middleware('auth');
