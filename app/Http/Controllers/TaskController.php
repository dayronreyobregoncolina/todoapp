<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Models\Task;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{


    /**
     * @var TaskRepository
     */
    private $respository;

    /**
     * TaskController constructor.
     * @param TaskRepository $respository
     */
    public function __construct(TaskRepository $respository)
    {
        $this->respository = $respository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTaskRequest $request)
    {
        $this->respository->create($request->all());
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->respository->update($request->all(), $task->id);
        return view('dashboard');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore($id)
    {
        $this->respository->restore($id);
        return redirect('dashboard');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function force_destroy($id)
    {
        $this->respository->force_destroy($id);
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
        $this->respository->delete($id);
        return view('dashboard');
    }
}
