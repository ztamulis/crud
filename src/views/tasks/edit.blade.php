<h1>Edit Task</h1>
<hr>
<form action="{{url('tasks', [$task->id])}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div>
        <label for="name">Task Name</label>
        <input type="text" value="{{$task->name}}" name="name" >
    </div>
    <div>
        <label for="description">Task Description</label>
        <input type="text" value="{{$task->description}}" name="description" >
    </div>
    <button type="submit">Submit</button>
</form>
