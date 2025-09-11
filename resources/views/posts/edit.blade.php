@extends('layout.app')
@section('title', 'Edit Post')
@section('content')

<form method="post" action="{{ route('posts.update',1) }}">
    @csrf
    @method('PUT')

<div class="container mb-5">
  <label for="" class="form-label">Title</label>
  <input type="text" class="form-control" id="" placeholder="Please Enter Title">
</div>
<div class="container mb-3">
  <label for="" class="form-label">Description</label>
  <textarea class="form-control" id="" rows="3" placeholder="Please Enter Description"></textarea>
</div>

<div class="container text-center">

<button type="submit" class="btn btn-success">Update Post</button>

</div>

</form>
@endsection

