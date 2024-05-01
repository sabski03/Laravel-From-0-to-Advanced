<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalComponent extends Component
{
    public $modalType = null;
    public $buttonColor = null;
    public $modalColor = null;
    public $modalTextColor = null;
    public $modalTitle = null;
    public $modalSaveButtonColor = null;
    public $modalCloseButtonColor = null;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $modalType = null,
        $buttonColor = null,
        $modalColor = null,
        $modalTextColor = null,
        $modalTitle = null,
        $modalSaveButtonColor = null,
        $modalCloseButtonColor = null
    ){
        $this->modalCloseButtonColor = $modalCloseButtonColor;
        $this->modalSaveButtonColor = $modalSaveButtonColor;
        $this->modalTitle = $modalTitle;
        $this->modalTextColor = $modalTextColor;
        $this->modalColor = $modalColor;
        $this->buttonColor = $buttonColor;
        $this->modalType = $modalType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

//        return function (array $data){
//            dd($data['attributes' ]);
//        };

        return view('components.modal-component');
    }
}
