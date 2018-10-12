@extends('layouts.app')

@section('content')
    
    <div class="blog-post">
        <h3>Latest Posts</h3>
        <hr>
        <br>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <ul class="list-group">
                    <li class="zlist-group-item">
                        <a href="/posts/{{ $post->id }}">
                            <h5>{{ $post->title }}</h5>
                        </a>
                        <p>{{ $post->intro }}</p>
                    </li>
                </ul>
            @endforeach
        @endif
    </div>
        
@endsection