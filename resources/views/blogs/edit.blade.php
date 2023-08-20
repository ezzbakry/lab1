@extends('layout.application')

@section('title', 'Create blog')

@section('content')
    <h2>Edit blog #{{$blog->id}}</h2>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Name" class="form-label">title</label>
            <input type="text" class="form-control" id="title" placeholder="enter the title " name="title" value="{{ $blog->title }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">body</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $blog->body }}" name="body" placeholder="enter the body">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">category_id</label>
            <input type="text" class="form-control" id="password" name="category_id" placeholder="enter category_id ">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
