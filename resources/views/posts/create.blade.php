@extends('layouts.app')

@section('content')

    <form method="POST" action="/posts">

        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" id="intro" name="intro"></textarea>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <div class="form-group">
            <label for="sub_heading">Sub-Heading</label>
            <textarea class="form-control" id="sub_heading" name="sub_heading"></textarea>
        </div>

        <div class="form-group">
            <label for="sub_body">Sub-Body</label>
            <textarea class="form-control" id="sub_body" name="sub_body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Create Post</button>

        @include('layouts.messages')
    </form>
    
@endsection