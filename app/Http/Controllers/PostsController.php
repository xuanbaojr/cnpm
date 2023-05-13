<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Inertia\Inertia;

use App\Providers\RouteServiceProvider;

class PostsController extends Controller
{
    //
    
    

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function create(){
       return Inertia::render('Post/Post_Create');
    }
    

    public function store(){
        
        $data = request()->validate([
            'title' => 'required',
            'dien_tich' => 'required',
            'gia_phong' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'description' => 'required',
        ]);
    
        $imagePaths = [];
        foreach(request('images') as $image){
            $imagePaths[] = $image->store('uploads', 'public');
        }
    
        auth()->user()->posts()->create([
            'image_01' => $imagePaths[0],
            'image_02' => $imagePaths[1],
            'image_03' => $imagePaths[2],
            'image_04' => $imagePaths[3],
            'title' => $data['title'],
            'dien_tich' => $data['dien_tich'],
            'gia_phong' => $data['gia_phong'],
            'city' => $data['city'],
            'district' => $data['district'],
            'ward' => $data['ward'],
            'description' => $data['description'],
        ]);
    
       return Redirect::to('/profile/me');
    }
    


    public function index(\App\Models\Post $post){
        return view('posts.post_show',[
            'posts'=> $post,
            'user' => $post->user,
            'profile' => $post->user->profile,
        ]);
        
    }

    public function edit(\App\Models\Post $post){
        
        return Inertia::render('Post/Post_Edit',[
            'post' => $post
        ]);
    }

    public function update1(\App\Models\Post $post, PostRequest $request)
 {

    $data = $request->validated();

    $post->fill($data);
    $post->save();
    return Redirect::to('/profile/me');
}

    
    public function show(\App\Models\Post $post){
        return Inertia::render('Post/Post_Show',[
            'posts' => $post,
            'user' => $post->user,
            'profile' => $post->user->profile,

        ]);
    }

    public function dashboard() {
        $user = [];
        $post = \App\Models\Post :: with('user') ->get();
        
        return Inertia::render('Dashboard',[
            'posts' => $post,
        ]);
    }

    public function destroy(\App\Models\Post $post){
        
        $post->delete();
        return Redirect::to('/profile/me');
    }

    // search Post
    public function searchPosts(){
        $data = request()->validate([
            'input' => 'required'
        ]);

        $posts = DB::table('posts')
            -> where('city', 'like' , '%'.$data['input'].'%')
            -> orWhere('district', 'like' , '%'.$data['input'].'%')
            -> orWhere('ward','like' , '%'.$data['input'].'%') ->get();

          
        
        // return Inertia::render('Dashboard',[
        //     'posts' => $posts,
        // ]);
        return Inertia::render('Dashboard_search',[
            'posts' => $posts
        ]);
    }
    
}
