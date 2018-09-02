@extends('layouts.app')

@section('content')

        <h3 class="pb-3 mb-4 font-italic border-bottom">
        Posts from Anonymous
        </h3>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                @include('posts.post')
            @endforeach
        @endif
    
@endsection