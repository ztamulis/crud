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
		//
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Request $request)
    {
		//
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Bene\Crud\Controllers\Task $task
     * @return Response
     
     */
    public function delete(Task $task)
    {

    }
}
