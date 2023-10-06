<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NoRecordFound extends Component
{
    /**
     * Create a new component instance.
     */

    public $message, $heading;

    public function __construct($heading, $message)
    {
        $this->heading = $heading;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.no-record-found');
    }
}
