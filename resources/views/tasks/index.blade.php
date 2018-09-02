
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

            @foreach ($tasks as $task)
                <tbody>
                    <tr>
                        <td scope="row" style="width:50%;">{{ $task->body }}</td>
                        <td scope="row">{{ $task->created_at }}</td>
                        <td scope="row">@if ($task->status == 0) Incomplete @else Complete @endif</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        @else
            <p>No tasks available, why not <a href="/tasks/create">create a task</a>?</p>
    @endif

@endsection