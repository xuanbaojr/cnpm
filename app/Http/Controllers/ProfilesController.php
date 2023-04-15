<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    //
    public function index(\App\Models\User $user)
    {   
        return view('profiles.profile_show',compact('user'));
    }

    public function edit(\App\Models\User $user){
        return view('profiles.profile_edit',compact('user'));
    }

}

