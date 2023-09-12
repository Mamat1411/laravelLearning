@extends('layouts.main')
@section('title', 'Single Post')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <h5>By: <a href="/?author={{ $post->author->username }}" class="text-decoration-none">{{ decrypt($post->author->name) }}</a> in <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
                <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid my-3" alt="{{ $post->category->name }}">
                <article class="fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/" class="d-block mt-3 text-decoration-none"> << Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
