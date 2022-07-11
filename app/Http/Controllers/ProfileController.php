<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\PasswordRequest;
use App\Http\Requests\Profile\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.show',
        [
            'breadcrumbs' => $this->breadcrumbs,
        ]);
    }


    /**
     * Update the auth()->user()'s name/email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update(
            [
                'name' => $request['name'],
                'email' => $request['email'],
            ]
        );

        session()->flash('updated', 'Your profile has been updated.');

        return $this->index();
    }

    /**
     * Update the auth()->user()'s password
     *
     * @param PasswordRequest $request
     * @return \Illuminate\Http\Response
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(
            [
                'password' => Hash::make($request['password']),
            ]
        );

        session()->flash('password', 'Your password has been updated.');

        return back();
    }
}
