<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy("completed_at")
            ->orderBy("id", "DESC")
            ->get();
//        return dd($tasks);
        return view("tasks.index", [
            "tasks" => $tasks,
        ]);
    }

    public function create()
    {
        return view("tasks.create");
    }

    public function store()
    {
        Task::create([
            "description" => request("description")
        ]);
        return redirect('/');
    }

    public function update($id)
    {
        $task = Task::where('id', $id)->first();
        $task->completed_at = now(new DateTimeZone("Asia/Kuala_Lumpur"));
        $task->save();

        return redirect("/");
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)->first();
        $task->delete();

        return redirect("/");
    }

}


