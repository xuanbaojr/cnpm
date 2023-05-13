<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    //
    public function index(){
        return Inertia::render('Admin/Admin',[
            'user' => \App\Models\User :: with('profile') -> get(),
        ]);
    }


    // xoa user
    public function destroy(\App\Models\User $user){
        
        $user->delete();
        $user->profile->delete();
        foreach($user->posts as $post){
            $post->delete();
        }
        return Redirect::to('/');
    }

    // show Post
    public function showPosts(\App\Models\User $user){
        
        return Inertia::render('Admin/Post',[
            'user' => $user,
            'profile' => $user->profle,
            'posts' => $user->posts,
        ]);
    }

    //delete Post
    public function destroyPost(\App\Models\Post $post){
        $post->delete();

        return Redirect::to('/admin');
    }

}
