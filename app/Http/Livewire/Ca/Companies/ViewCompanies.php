<?php

namespace App\Http\Livewire\Ca\Companies;

use Livewire\Component;
use App\Models\ca\Company;

class ViewCompanies extends Component
{
    public $companies;

    public function mount(){

        $this->companies = Company::all();
        
    }

    public function render()
    {
        return view('livewire.ca.companies.view-companies')
                    ->layout('layouts.app',
                    [
                        'header'=>'Companies Details'
                    ]);
    }
}
