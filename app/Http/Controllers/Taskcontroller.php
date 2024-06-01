<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show($id)
    {
        $task = collect(Task::getAll())->firstWhere('id', $id);
        
        if (!$task) {
            abort(404, 'Task not found');
        }

        return view('tasks.show', compact('task'));
    }
}