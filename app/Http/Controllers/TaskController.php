<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::query()
            ->latest()
            ->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        $users = User::query()
            ->latest()
            ->get();

        return view('tasks.create', [
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tasks,email',
            'phone' => 'min:11|max:11',
        ]);

        $task = Task::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'source' => $request->source,
            'source_url' => $request->source_url,
            'notes' => $request->notes
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task Created Successfully.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tasks,email,' . $task->id,
            'phone' => 'min:11|max:11',
        ]);

        $task->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'source' => $request->source,
            'source_url' => $request->source_url,
            'notes' => $request->notes,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully.');
    }
}
