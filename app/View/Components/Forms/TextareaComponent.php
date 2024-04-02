<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextareaComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $label , $name , $placeholder , $col;

    public function __construct($label , $name ,$placeholder , $col )
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->col = $col;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.textarea-component');
    }
}
