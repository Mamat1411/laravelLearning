@extends('layouts.main')
@section('title', 'Home')
@section('container')

    <h2 class="mb-3 text-center">{{ $title }}</h2>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://picsum.photos/1200/400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-body-secondary">
                        By:
                        <a href="/?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            {{ decrypt($posts[0]->author->name) }}
                        </a> in
                        <a href="/?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More...</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-2 py-1 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7); border-radius: 5px"><a
                                    href="/?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            <img src="https://picsum.photos/500/400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p>
                                    <small class="text-body-secondary">
                                        By:
                                        <a href="/?author={{ $post->author->username }}" class="text-decoration-none">
                                            {{ decrypt($post->author->name) }}
                                        </a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    @else
            <p class="text-center fs-4">No Post Found</p>
    @endif
        </div>
    {{ $posts->links() }}
@endsection
