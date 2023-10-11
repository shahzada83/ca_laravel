<?php

namespace App\Livewire\Ca\Roc;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('View ROC')]
class ViewRoc extends Component
{
    
    public function render()
    {
        return view('livewire.ca.roc.view-roc')
        ->with(['rocs' => ''])
        ->layout('layouts.app', ['header'=>'View ']);
    }
}
