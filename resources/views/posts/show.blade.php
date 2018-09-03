@extends('layouts.app')

@section('content')

    @include('posts.post')

    {{-- Comments section --}}
    <div class="blog-post">
        <div class="form-group">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        {{ $comment->body }}
                        <br />
                        <small>
                            {{ $comment->created_at->diffForHumans() }}
                        </small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <a href="/posts">Back</a>

@endsection