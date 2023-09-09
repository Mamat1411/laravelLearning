@extends('layouts.main')
@section('title', 'Single Post')
@section('container')
    <article class="mb-4">
        <h2>{{ $post->title }}</h2>
        <h5 class="mb-4">By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ decrypt($post->author->name) }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>
    <a href="/" class="text-decoration-none"> << Back to Posts</a>
@endsection
