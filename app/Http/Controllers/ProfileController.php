<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models;



class ProfileController extends Controller
{
    public function show()
{
    
    return Inertia::render('Profile/Show', [
        'user' => Auth::user(),
        'profile' => Auth::user()->profile,
        'posts' => Auth::user()->posts,
        'user_me' => Auth::user(),
    ]);
}


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'profile' => Auth::user()->profile,
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        
        $profile = Auth::user ()->profile;
        $profile->update($request->validated());
        

       /*
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
    */
        $profile->save();

        return Redirect::to('/profile/me')->with('message', 'Category Created Successfully');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
      
        // $request->validate([
        //     'password' => ['required', 'current_password'],
        // ]);

        // $user = $request->user();
            
        

        Auth::user()->delete();
        Auth::user()->profile->delete();
        foreach(  Auth::user()->posts as $post){
            $post->delete();
       }
       // Auth::logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function index(\App\Models\User $user){
        $profile = $user->profile;
        $posts = $user->posts;
        return Inertia::render('Profile/Show',[
            'user_me' => auth()->user(),
            'user' => $user,
            'profile'=> $profile,
            'posts' => $posts
        ]);
    }
}
