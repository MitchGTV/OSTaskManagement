<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function list()
    {
        $tasks = Task::all();

        return view('tasks.list', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'priority' => 'required|in:HIGH,MEDIUM,LOW',
        ]);

        $task = new Task();
        $task->description = $validated['description'];
        $task->priority = $validated['priority'];
        $task->user_id = auth()->id();
        $task->save();

        return redirect()->back()->with('success', 'Task created successfully!');
    }
}
