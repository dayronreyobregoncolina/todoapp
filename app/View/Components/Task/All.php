<?php

namespace App\View\Components\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class All extends Component
{
    /**
     * @var Task[]|\Illuminate\Database\Eloquent\Collection
     */
    private $tasks;

    /**
     * Tasks constructor.
     * @param $tasks
     */
    public function __construct()
    {
        $this->tasks = Auth::user()->tasks()->withTrashed()->get();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task.all')->with('tasks', $this->tasks);
    }
}
