<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function create(){

        return view('posts.create',[
            'users' => User::all()
        ]);
    }

    public function store(Request $requestpost){
        $data = $requestpost->all();
        Post::create($data);
        return to_route('posts.index');
    }


    public function show($post){
        $post = Post::find($post);
        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function edit($post){
        $post = Post::find($post);
        return view('posts.edit',[
            'post' => $post
        ]);
    }
    public function update(){

        return to_route('posts.index');
    }

    public function destroy(){

        return to_route('posts.index');
    }

}
