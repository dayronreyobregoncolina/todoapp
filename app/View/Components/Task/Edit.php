<?php

namespace App\View\Components\Task;

use Illuminate\View\Component;

class Edit extends Component
{
    public $task;

    /**
     * Edit constructor.
     * @param $task
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task.edit');
    }
}
