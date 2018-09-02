@foreach ($tasks as $task)
    <tbody>
        @if ($task->status == 0)
            <tr scope="row">
                <td style="width:50%;">{{ $task->body }}</td>
                <td >{{ $task->created_at }}</td>
                <td >Incomplete</td>
            </tr>
        @else
            <tr scope="row" class="table-success">
                <td style="width:50%;">{{ $task->body }}</td>
                <td >{{ $task->created_at }}</td>
                <td >Complete</td>
            </tr>
        @endif
    </tbody>
@endforeach