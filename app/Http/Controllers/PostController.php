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
        $requestpost->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);
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
            'post' => $post,
            'users' => User::all()
        ]);
    }
    public function update(Request $request, Post $post){

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        $post->update($data = $request->all());

        return to_route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($post){
        $post = Post::find($post);
        $post->delete();

        return to_route('posts.index')->with('success', 'Post deleted successfully');
    }

}
