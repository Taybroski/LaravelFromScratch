@extends('layouts.app')

@section('content')

        <h3 class="pb-3 mb-4 font-italic border-bottom">
        Posts from Anonymous
        </h3>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="blog-post">
                    <a href="/posts/{{ $post->id }}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
                    <p class="blog-post-meta">{{ $post->created_at->format('l jS F Y') }} - By <a href="#">Anonymous</a></p>
                    <p>{{ $post->intro }}</p>
                    <hr>
                    <p>{{ str_limit($post->body, $limit = 250, $end = '...') }}<a href="/posts/{{ $post->id }}">Continue Reading</a></p>
                    <h4>{{ $post->sub_heading }}</h4>
                    <p>{{ str_limit($post->body, $limit = 125, $end = '...') }}</p>
                    <hr>
                </div>
            @endforeach
        @endif
    
@endsection