@extends('layout.application')
@section('title', 'All users')

@section('content')
    <div class="row py-5">
        <div class="col-md-6">
            <h2>All blogs</h2>
        </div>
        <div class="col-md-6">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create blog</a>
        </div>
    </div>
    <table class="table table-secondary">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">slug</th>
            <th scope="col">category_id</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <th scope="row">{{ $blog->id }}</th>
                <td>{{$blog->title  }}</td>
                <td>{{ $blog->body  }}</td>
                <td>{{ $blog->slug}}</td>
                <td>{{ $blog->category_id }}</td>
                <td>
                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-success">View</a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">edit</a>
                    {{--                    <button onclick="delete_user({{ $user->id }})" class="btn btn-warning">delete</button>--}}
                    <form class="d-inline" method="post" action="{{ route('blogs.destroy', $blog->id) }}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        const delete_user = function ($id) {
            // confirm to delete user

            // delete user call endpoint
        }

    </script>

@endsection
