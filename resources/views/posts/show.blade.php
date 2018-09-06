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

        <form method="POST" action="/comments">

            {{ csrf_field() }}

            <div class="form-group">
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Leave Reply</button>
            </div>
        </form>
    </div>

    <a href="/posts">Back</a>

@endsection