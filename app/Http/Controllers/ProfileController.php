<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
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
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        Validator::make($request->all(), [
            'avatar' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'integer'],
        ])->validate();


        $profile = new Profile([
            'avatar' => $request->avatar,
            'bio' => $request->bio,
            'user_id' => $request->user_id,
        ]);

        $profile->save();

        return redirect()->route('profiles.index')->with('success', 'Le profil est bien enregistré.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile, int $userId)
    {
        $user = User::find($userId);
        $profile = Profile::where('user_id', $user->id)->first();
        return view('auth.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return  view('auth.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $validated = $request->validated();

        $profile->update([
            'avatar' => $request->avatar,
            'bio' => $request->bio,
            'user_id' => auth()->user()->id
        ]);

        $profile->save();

        return redirect()->route('accueil')->with('success', 'Le profil est bien modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
