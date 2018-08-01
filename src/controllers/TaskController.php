<?php

namespace Bene\Crud\Controllers;

use Bene\Crud\Controllers\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \Bene\Crud\Controllers\Task $task
     * @return \Bene\Crud\Controllers\Task
     */
    public function show(Task $task)
    {
        return $task;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json($task, 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $task = Task::update($request->all());

        return response()->json($task, 201);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Bene\Crud\Controllers\Task $task
     * @return Response
     * @throws \Exception
     */
    public function delete(Task $task)
    {
        $task->delete();
        return response()->json($task, 204);
    }
}
