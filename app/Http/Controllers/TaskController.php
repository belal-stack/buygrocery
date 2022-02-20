<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(Request $request){
        $tasks=Task::all();
        return view('tasks',compact('tasks'));
    }

    public function create(){
        return view('add-task');
    }

    public function store(StoreTaskRequest $request){
        $task=new Task;
        $task->task=$request->task;
        $task->dead_line = $request->date_time;
        $task->save();
        return redirect('/home');
    }
}
