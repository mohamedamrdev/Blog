@extends('layout.app')
@section('title','View Post')
@section('content')


    <div class="card container mt-4">
        <div class="card-header">
            Post Details
        </div>
        <div class="card-body">
          <h1>{{ $post->title }}</h1>
          <p>{{ $post->description }}</p>
          <P>{{$post->created_at}}</P>
        </div>
    </div>

    <div class="card container mt-4">
        <div class="card-header">
            Post Creator
        </div>
        <div class="card-body mt-2">
            {{ $post->user->name }}
        </div>
    </div>



@endsection
