@extends('dashboard.layout.main')
@section('content')
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                src="https://picsum.photos/600/700?{{ $post->category->name }}" alt="Post Image" /></div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bolder">{{ $post->title }}</h1>
            <div class="fs-5">
                <span>in <a href=""
                        class="text-decoration-none">{{ $post->category->name }}</a></span>
                <span>By <a href=""
                        class="text-decoration-none">{{ decrypt($post->author->name) }}</a></span>
            </div>
            <p class="lead">{!! $post->body !!}</p>
            <div class="d-flex">
                <a href="/dashboard" class="btn btn-warning text-decoration-none ms-2">Back To Posts</a>
            </div>
        </div>
    </div>
</div>
@endsection
