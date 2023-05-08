<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function edit(\App\Models\Post  $post){
        return view('posts.post_edit',compact('post'));
    }

    public function update(\App\Models\Post  $post){
 
        $data = request()->validate([
            'dia_chi' =>'required',
            'image'=>'required|image',
            'dien_tich' => 'required',
            'gia_phong' => 'required',
            'description' => 'required',
        ]);
        $imagePath = (request('image')->store('uploads','public'));


        $post->update([
            'dia_chi' =>$data['dia_chi'],
            'image'=> $imagePath,
            'dien_tich' => $data['dien_tich'],
            'gia_phong' => $data['gia_phong'],
            'description' => $data['description'],
        ]);

        
      //  dd($post);
        return redirect('/post/post_show/' . auth()->user()->id);
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