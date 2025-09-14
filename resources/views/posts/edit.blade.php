@extends('layout.app')
@section('title', 'Edit Post')
@section('content')

<form method="post" action="{{ route('posts.update',1) }}">
    @csrf
    @method('PUT')

<div class="container mb-5">
  <label for="" class="form-label">Title</label>
  <input type="text" name="title" class="form-control" id="" placeholder="Please Enter Title" value="{{ $post->title }}">
</div>
<div class="container mb-3">
  <label for="" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="" rows="3" placeholder="Please Enter Description">{{ $post->description }}</textarea>
</div>
<div class="container mb-3">
    <label for="" class="form-label">Post Creator</label>
    <input type="text" class="form-control" id="" placeholder="Please Enter Post Creator" value="{{ $post->user->name }}" disabled>
    <option value="{{ $post->user->id }}"></option>
</div>
<div class="container text-center">

<button type="submit" class="btn btn-success">Update Post</button>

</div>

</form>
@endsection

