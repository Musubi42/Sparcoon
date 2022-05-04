<?php

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
    return view('bienvenueclient');
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

Route::get('/tests', [initController::class, 'create'])->middleware('auth');
