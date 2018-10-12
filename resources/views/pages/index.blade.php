@extends('layouts.app')

@section('content')
    
    <div class="blog-post">
        <div class="flex-row">
            <h3>Latest Post</h3><small class="pl-2"><a href="/posts">See all >></a></small>
        </div>
        <hr>
        <br>
        <li class="list-group-item">
            <a href="/posts/{{ $posts->first()->id }}">
                <h5>{{ $posts->first()->title }}</h5>
            </a>
            <p>{{ $posts->first()->intro }}</p>
        </li>
    </div>
        
@endsection