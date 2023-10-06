<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    public
        $colSpan,
        $label,
        $isRequired;
    /**
     * Create a new component instance.
     */
    public function __construct($colSpan = 0, $label = '', $isRequired = "false")
    {
        $this->colSpan = $colSpan;
        $this->label = $label;
        $this->isRequired = $isRequired;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
