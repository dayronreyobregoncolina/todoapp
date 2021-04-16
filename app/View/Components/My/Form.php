<?php

namespace App\View\Components\My;

use App\Models\Status;
use Illuminate\View\Component;

class Form extends Component
{
    private $statuses;

    /**
     * Form constructor.
     * @param $asd
     */
    public function __construct()
    {
        $this->statuses = Status::all();
    }

    public function render()
    {
        return view('components.my.form')->with('statuses',$this->statuses);
    }
}
