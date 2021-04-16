<?php

namespace App\View\Components\My;

use Illuminate\View\Component;

class Task extends Component
{
    public $name;
    public $description;
    public $status;

    /**
     * Task constructor.
     * @param $name
     * @param $description
     * @param $status
     */
    public function __construct($name, $description, $status)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my.task');
    }
}
