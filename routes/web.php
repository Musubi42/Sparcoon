<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/patrimoine', function () {
  return view('patrimoine');
})->name('pat');

Route::get('/depenses', function () {
  return view('depenses');
})->name('dep');

Route::get('/traitements', function () {
  return view('traitements');
})->name('trait');

Route::get('/calendrier', function () {
  return view('calendrier');
})->name('cal');

// TODO : Les routes ci-dessous sont a créer

Route::get('/traitement', function () {
  return view('traitement');
})->name('traitement');

Route::get('/intervenant', function () {
  return view('intervenant');
})->name('intervenant');

Route::get('/patrimoine', function () {
  return view('patrimoine');
})->name('patrimoine');

Route::get('/objet', function () {
  return view('objet');
})->name('objet');

Route::get('/patient', function () {
  return view('patient');
})->name('patient');

Route::get('/vehicule', function () {
  return view('vehicule');
})->name('vehicule');

Route::get('/calendrier', function () {
  return view('calendrier');
})->name('calendrier');

Route::get('/profile', function () {
  return view('auth.profile');
})->name('profile')->middleware('auth');

Route::get('/objec_show', function()
 {
   return view('objet_show');
 })->name('objet_show');

Route::resource('examples', ExampleController::class)->middleware('auth');
