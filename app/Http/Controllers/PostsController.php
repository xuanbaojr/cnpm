<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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
            'dien_tich' => 'required',
            'gia_phong' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
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
            'dien_tich' => $data['dien_tich'],
            'gia_phong' => $data['gia_phong'],
            'city' => $data['city'],
            'district' => $data['district'],
            'ward' => $data['ward'],
        ]);
    
       // return redirect('/profile/' . auth()->user()->id);
    }
    


    public function index(\App\Models\Post $post){
        return view('posts.post_show',['post'=> $post]);
        
    }

    public function edit(\App\Models\Post $post){
        
        return Inertia::render('Post/Post_Edit',[
            'post' => $post
        ]);
    }

    public function update1(\App\Models\Post $post, PostRequest $request )
    {
        
        $post->fill($request->validated());
        $post->save();
    }
    
    public function dashboard(){
        $posts = \App\Models\Post::all();
        return Inertia::render('Dashboard',[
            'posts' => $posts
        ]);
    }
    
    public function show(\App\Models\Post $post){
        return Inertia::render('Post/Post_Show',[
            'post' => $post

        ]);
    }

    
}
/*
  public function update(\App\Models\Post $post, \App\Http\Requests\StorePostRequest $request)
    {
        $post->fill($request->validated());
        $imagePaths = [];
    
        // Replace request('images') with $request->file('images')
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('uploads', 'public');
            }
    
            $post->fill([
                'image_01' => $imagePaths[0] ?? null,
                'image_02' => $imagePaths[1] ?? null,
                'image_03' => $imagePaths[2] ?? null,
                'image_04' => $imagePaths[3] ?? null,
            ]);
        }
    
        $post->save();
    }
    */