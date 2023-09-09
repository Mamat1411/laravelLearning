@extends('layouts.main')
@section('title', 'Single Post')
@section('container')
    <article class="mb-4">
        <h2>{{ $post->title }}</h2>
        <h5>By: <a href="" class="text-decoration-none">{{ decrypt($post->user->name) }}</a> in <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {{ $post->body }}
    </article>
    <a href="/" class="text-decoration-none"> << Back to Posts</a>
@endsection
