<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GesturePatientsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:CEO');
    // }
    public function add(Request $request)
    {
        $soignant = User::find($request->soignant);
        $patient = User::find($request->patient);
        $soignant->patients()->attach($patient);
        return redirect()->route('accueil')->with('success', 'Le patient et le soignant ont bien été assignés.');
    }

    public function create()
    {
        $users = User::all();
        return view('gesture.create', compact('users'));
    }
}
