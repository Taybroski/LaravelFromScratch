@extends('layouts.app')

@section('content')
    
    @if (count($posts) > 0)
        <ul class="list-group">
            @foreach ($posts as $post)
                <a href="/posts/{{ $post->id }}"><li class="list-group-item">{{ $post->body }}</li></a>
            @endforeach
        </ul>
    @endif

@endsection