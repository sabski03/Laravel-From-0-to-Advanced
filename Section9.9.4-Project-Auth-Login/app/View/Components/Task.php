<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Task extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $tasks = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tasks.index');
    }
}
