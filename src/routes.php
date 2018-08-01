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

