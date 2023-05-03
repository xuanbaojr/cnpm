<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class PostsController extends Controller
{
    //
    
    

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function create(){
        $cars = array("Volvo", "BMW", "Toyota",);
        return view('posts.create',compact('cars'));
    }
    

    public function store()
{
    $data = request()->validate([
        'images.0' => 'required|image',
        'images.1' => 'required|image',
        'images.2' => 'required|image',
        'images.3' => 'required|image',
        'dien_tich' => 'required',
        'gia_phong' => 'required',
        'city' => 'required',
        'district' => 'required',
        'ward' => 'required',
    ]);

    $imagePath_01 = request('images.0')->store('uploads', 'public');
    $imagePath_02 = request('images.1')->store('uploads', 'public');
    $imagePath_03 = request('images.2')->store('uploads', 'public');
    $imagePath_04 = request('images.3')->store('uploads', 'public');

    auth()->user()->posts()->create([
        'image_01' => $imagePath_01,
        'image_02' => $imagePath_02,
        'image_03' => $imagePath_03,
        'image_04' => $imagePath_04,
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

    

    

    
}
