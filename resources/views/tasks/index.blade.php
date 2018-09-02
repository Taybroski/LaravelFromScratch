
@extends('layouts.app')

@section('content')

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Created</th>
                    <th scope="col">Complete</th>
                </tr>
            </thead>
            @include('tasks.task')
        </table>
        @else
            <p>No tasks available, why not <a href="/tasks/create">create a task</a>?</p>
    @endif

@endsection