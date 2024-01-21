<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //index
    public function index()
    {
        $tasks = \App\Models\Task::paginate(5);
        return view('pages.task.index', compact('tasks'));
    }

    //create
    public function create()
    {
        $users = \App\Models\User::all();
        return view('pages.task.create', compact('users'));
    }

    //store
    public function store(Request $request)
    {


        $task = new \App\Models\Task;
        $task->name_task = $request->name_task;
        $task->user_id = $request->user_id;
        $task->status = $request->status;
        $task->time_estimate = $request->time_estimate;

        $user = \App\Models\User::findOrFail($task->user_id);
        $task->assignee = $user->name;

        $task->save();

        return redirect()->route('task.index');
    }

    //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $task = \App\Models\Task::findOrFail($id);
        $users = \App\Models\User::all();
        return view('pages.task.edit', compact('task','users'));
    }


     /**
     * Mise à jour d'une tâche.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //update
    public function update(Request $request, $id)
    {
        /*$data = $request->all();
        $user = \App\Models\User::findOrFail($request->user_id);
        $task = \App\Models\Task::findOrFail($id);
        $task->assignee = $user->name;
        $task->update($data);*/

        // Récupération de l'utilisateur et de la tâche
        $user = \App\Models\User::findOrFail($request->user_id);
        $task = \App\Models\Task::findOrFail($id);

        // Mise à jour manuelle de l'attribut assignee
        $task->assignee = $user->name;

        $task->update([
            'name_task' => $request->name_task,
            'user_id' => $request->user_id,
            'time_estimate' => $request->time_estimate,
            'status' => $request->status,
        ]);

        
        return redirect()->route('task.index');

    }

    //destroy
    public function destroy($id)
    {
        $task = \App\Models\Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
