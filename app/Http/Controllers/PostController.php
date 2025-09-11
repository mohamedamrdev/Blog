<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        return to_route('posts.index');
    }

    public function show(){
        return view('posts.view');
    }

    public function edit(){

        return view('posts.edit');
    }
    public function update(){

        return to_route('posts.index');
    }

    public function destroy(){

        return to_route('posts.index');
    }

}
