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
    

    public function store(){
        $data = request()->validate([
          //  'title'=>'required',
        //    'dia_chi' =>'required',
            //'image'=>'required|image',
            'dien_tich' => 'required',
            'gia_phong' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
          //  'description' => 'required',
        ]);

        //?
     //   $imagePath = (request('image')->store('uploads','public'));

        auth()->user()->posts()->create([
       //     'title' =>$data['title'],
          //  'dia_chi' =>$data['dia_chi'],
         //   'image'=> $imagePath,
            'dien_tich' => $data['dien_tich'],
            'gia_phong' => $data['gia_phong'],
            'city' => $data['city'],
            'district' => $data['district'],
            'ward' => $data['ward'],
          //  'description' => $data['description'],
        ]);

       // \App\Models\Post::create($data);

        // dd(request()->all());
        
        return redirect('/profile/' . auth()->user()->id);
    
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
