@extends('layout.application')

@section('title', 'Create blog')

@section('content')
    <h2>view User # {{ $blog->id }}</h2>
    <div class="mb-3">
        <label for="Name" class="form-label">title</label>
        <input type="text" class="form-control" id="Name" placeholder="enter the title" name="title" value="{{ $blog->title }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">body</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="body" placeholder="enter the body" value="{{ $blog->title }}" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">category id</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="category_id" placeholder="enter the category_id" value="{{ $blog->category_id }}" disabled>
    </div>

@endsection
