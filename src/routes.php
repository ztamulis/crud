<?php

use Bene\Crud\Controllers\Task;
use Illuminate\Http\Request;

Route::get('tasks', function () {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Task::all();
});

Route::get('tasks/{id}', function ($id) {
    return Task::find($id);
});

Route::post('tasks', function (Request $request) {
    $data = $request->all();
    return TASK::create([
        'name' => $data['name'],
        'description' => $data['description'],
    ]);
});

Route::put('tasks/{id}', function (Request $request, $id) {
    $task = Task::findorFail($id);
    $task->update($request->all());

    return $task;
});

Route::delete('tasks/{id}', function ($id) {
    Task::find($id)->delete();

    return 204;
});