    @extends('layouts.app')
    @section('title', 'Create Post')
    @section('content')


        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="container mb-5">
                <label for="" class="form-label mt-1">Title</label>
                <input name="title" type="text" class="form-control" id="" placeholder="Please Enter Title">
            </div>
            <div class="container mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" rows="3" placeholder="Please Enter Description"></textarea>

                <select class="form-select mt-2" aria-label="Post Creator" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

            </div>

            <div class="container text-center">

                <button type="submit" class="btn btn-success">Submit</button>

            </div>

        </form>
    @endsection
