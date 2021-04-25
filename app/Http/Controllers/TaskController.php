<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request,
            [
                'name' => 'bail|required|max:50',
                'description' => 'required|max:200',
                'status_id' => 'required|numeric|exists:statuses,id',
            ]);

        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('task.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //Validation
        $this->validate($request,
            [
                'name' => 'bail|required|max:50',
                'description' => 'required|max:200',
                'status_id' => 'required|numeric|exists:statuses,id',
            ]);

        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
        ]);
        return view('task.show')->with('task', $task);
    }

    public function restore($id)
    {
        /** @var Task $task */
        Task::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect('dashboard');
    }

    public function force_destroy($id)
    {
        /** @var Task $task */
        Task::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect(route('dashboard'));
    }
}
