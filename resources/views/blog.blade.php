@extends('layouts.main')
@section('title', 'Home')
@section('container')
    <h2 class="mb-3">Blog Posts Page</h2>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>By:
                <a href="" class="text-decoration-none">
                    {{ decrypt($post->user->name) }}
                </a> in
                <a href="" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {!! $post->excerpt !!}
            <br>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
    {{ $posts->links() }}
@endsection
