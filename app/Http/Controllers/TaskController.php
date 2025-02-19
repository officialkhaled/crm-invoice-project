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
            'title' => 'required',
            'user_id' => 'required',
            'due_date' => 'required',
        ], [
            'title.required' => 'Title is required!',
            'user_id.required' => 'User is required!',
            'due_date.required' => 'Date is required!',
        ]);

        Task::create([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'due_date' => $request->due_date,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task Created Successfully.');
    }

    public function edit(Task $task)
    {
        $users = User::query()
            ->latest()
            ->get();

        $selectedUserId = $task->user_id ?? null;

        return view('tasks.edit', [
            'task' => $task,
            'users' => $users,
            'selectedUserId' => $selectedUserId,
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'user_id' => 'required',
            'due_date' => 'required',
        ], [
            'title.required' => 'Title is required!',
            'user_id.required' => 'User is required!',
            'due_date.required' => 'Date is required!',
        ]);

        $task->update([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'due_date' => $request->due_date,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully.');
    }
}
