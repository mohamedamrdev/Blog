@extends('layouts.app')
@section('title', 'Blogs')

@section('content')

    <div class="container mt-4">
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
        </div>
    </div>

    <table class="table container mt-4">


        <thead>


            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Posted_by</th>
                <th scope="col">Created_at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>


                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        <form id="deleteForm{{ $post->id }}" method="POST"
                            action="{{ route('posts.destroy', $post->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger"
                                onclick="confirmDelete({{ $post->id }})">Delete</button>
                        </form>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            function confirmDelete(postId) {
                                Swal.fire({
                                    title: "Are you sure?",
                                    text: "This action cannot be undone!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonText: "Yes, delete it!",
                                    cancelButtonText: "No, cancel",
                                    focusCancel: true // 👈 يخلي Cancel هو الافتراضي
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('deleteForm' + postId).submit();
                                    }
                                });
                            }
                        </script>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
