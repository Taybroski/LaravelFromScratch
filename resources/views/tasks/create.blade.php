@extends('layouts.app')

@section('content')

    <form method="POST" action="/tasks">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="body">Task</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Create Task</button>
    </form>
    
@endsection