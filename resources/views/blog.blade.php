@extends('layouts.main')
@section('title', 'Home')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/posts/{{ $post["slug"] }}" class="text-decoration-none">
                <h2>{{ $post["title"] }}</h2>
            </a>
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection
