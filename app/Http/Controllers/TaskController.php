<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;


class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }

    public function create(CreateTaskRequest $request)
    {
        $created = Task::query()->create(
            [
                'title'       => $request->title,
                'description' => $request->description,
            ]
        );

        return response()->json($created);
    }

    public function edit(Task $task)
    {
        return response()->json($task);
    }

    public function delete(Task $task)
    {
        return response()->json(['deleted' => (int)$task->delete()]);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $updated = $task->update($request->all());

        return response()->json(['updated' => $updated]);
    }
}
