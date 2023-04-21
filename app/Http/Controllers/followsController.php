<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class followsController extends Controller
{
    //
    public function store(\App\Models\User $user){
        return $user->username;
    }

    
}
