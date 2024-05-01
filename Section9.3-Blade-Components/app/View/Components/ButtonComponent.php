<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ButtonComponent extends Component{

    public $type;

    public function __construct($type = null){
        $this->type = $type;
    }

    public function render()
    {
        return view('components.button-component');
    }

}
