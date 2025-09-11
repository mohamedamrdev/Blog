@extends('layout.app')
@section('title', 'Posts')

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
            <tr>
                <th scope="row">1</th>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
                <td>
                    <a href="{{ route('posts.show', 1) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('posts.edit', 1) }}" class="btn btn-warning">Edit</a>
                    <form id="deleteForm1" method="POST" action="{{ route('posts.destroy', 1) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                    </form>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        function confirmDelete() {
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
                                    document.getElementById('deleteForm1').submit();
                                }
                            });
                        }
                    </script>

                </td>
            </tr>
        </tbody>
    </table>
@endsection
