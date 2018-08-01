<h1>Add New Task</h1>
<hr>
<form action="/tasks" method="post">
    {{ csrf_field() }}
    <div>
        <label for="name">Task name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="description">Task Description</label>
        <input type="text" name="description">
    </div>
    <button type="submit">Submit</button>
</form>
