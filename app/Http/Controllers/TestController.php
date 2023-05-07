<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    //
    public function index(\App\Models\User $user)
    {
        return Inertia::render('Test',[
            'user'=> $user
        ]);
    }
}
