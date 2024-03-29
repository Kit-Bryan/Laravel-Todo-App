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
        return $tasks->jsonSerialize();

    }

    public function create()
    {
        return view("tasks.create");
    }

    public function store()
    {
        request()->validate([
            'description' => 'required | max:255',
            'title' => 'required | max:255',
        ]);
        Task::create([
            // Column name => data
            "description" => request("description"),
            "title" => request("title"),
        ]);
        return redirect('/');
    }

    public function update()
    {
        $task = Task::where('id', request("id"))->first();
        $task->completed_at = now(new DateTimeZone("Asia/Kuala_Lumpur"));
        $task->save();
//
//        return redirect("/");
    }

    public function delete()
    {
        $id = \request("id");
        $task = Task::where('id', $id)->first();
        $task->delete();

//        return redirect("/");
    }

}


