<table>
    <thead >
    <tr>
        <th >#</th>
        <th >Task Title</th>
        <th >Task Name</th>
        <th >Created At</th>
        <th >Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <th scope="row">{{$task->id}}</th>
            <td><a href="/tasks/{{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->description}}</td>
            <td>{{$task->created_at->toFormattedDateString()}}</td>
            <td>
                <div role="group" aria-label="Basic example">
                    <a href="{{ URL::to('tasks/' . $task->id . '/edit') }}">
                        <button type="button">Edit</button>
                    </a>
                    <form action="{{url('tasks', [$task->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit"value="Delete"/>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
