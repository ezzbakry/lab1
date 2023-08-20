@extends('layout.application')

@section('title', 'Create blog')

@section('content')
    <h2>Create blog</h2>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">title</label>
            <input type="text" class="form-control" id="Title" placeholder="enter the title " name="title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">body</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="body" placeholder="enter the body ">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">id</label>
            <input type="text" class="form-control" id="category_id" name="category_id" placeholder="enter the category_id">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
