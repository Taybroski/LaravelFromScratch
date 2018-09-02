@extends('layouts.app')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">Posted {{ $post->created_at }} - By <a href="#">Anonymous</a></p>
        <p>{{ $post->intro }}</p>
        <hr>
        <p>{{ $post->body }}</p>
        <h4>{{ $post->sub_heading }}</h4>
        <p>{{ $post->sub_body }}</p>
        <hr>
    </div>

    <a href="/posts">Back</a>

@endsection