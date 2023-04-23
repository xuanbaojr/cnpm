<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class ProfilesController extends Controller
{
    //
    public function index(\App\Models\User $user)
    {   
        $isfollowed = auth()->user() ? auth()->user()->following->contains($user->id) : false;
        return view('profiles.profile_show',compact('user','isfollowed'));
    }

    public function edit(\App\Models\User $user){
        return view('profiles.profile_edit',compact('user'));
    }

}

