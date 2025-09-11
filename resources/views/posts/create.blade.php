@extends('layout.app')
@section('title', 'Create Post')
@section('content')


<form method="post" action="{{route('posts.store')}}">
@csrf
<div class="container mb-5">
  <label for="" class="form-label">Title</label>
  <input type="text" class="form-control" id="" placeholder="Please Enter Title">
</div>
<div class="container mb-3">
  <label for="" class="form-label">Description</label>
  <textarea class="form-control" id="" rows="3" placeholder="Please Enter Description"></textarea>

  <select class="form-select mt-2" aria-label="Post Creator">
  <option selected>select Creator</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

</div>

<div class="container text-center">

<button type="submit" class="btn btn-success">Submit</button>

</div>

</form>
@endsection
