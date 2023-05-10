<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Log;

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

    public function update1(\App\Models\Post $post, PostRequest $request)
{
    $data = $request->validated();
\Log::info('Data after validation:', ['data' => $data]);


    if ($request->hasFile('image_01')) {
        ;
        // Debug: Check if the request contains the image file
        \Log::info('Image file found in request');

        // Delete the old image if it exists
        if ($post->image_01) {
            Storage::disk('public')->delete($post->image_01);
        }

        // Store the new image
        $image_01 = $request->file('image_01');
        $imagePath_01 = $image_01->store('uploads', 'public');
        $data['image_01'] = $imagePath_01;

        // Debug: Check the new image path
        \Log::info('New image path:', ['imagePath_01' => $imagePath_01]);
    }

    $post->fill($data);
    $post->save();
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