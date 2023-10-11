<?php

namespace App\Livewire\Ca\Companies;

use Livewire\Component;
use App\Models\ca\Company;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')] 
#[Title('View Companies')]
class ViewCompanies extends Component
{
    use WithPagination;

    protected $companies;
    public $search_field='';


    public function updatedSearchField(){
        // Reset Pagination
        $this->resetPage(); 
        
        $companies = Company::join('company_details', 'company_details.company_id', 'companies.id')
            ->where('companies.type', 'like', '%' . $this->search_field . '%')
            ->orWhere('companies.name', 'like', '%' . $this->search_field . '%')
            ->orWhere('companies.primary_email', 'like', '%' . $this->search_field . '%')
            ->orWhere('companies.secondary_email', 'like', '%' . $this->search_field . '%')
            ->orWhere('companies.primary_phone', 'like', '%' . $this->search_field . '%')
            ->orWhere('companies.secondary_phone', 'like', '%' . $this->search_field . '%')
            ->orWhere('company_details.pan', 'like', '%' . $this->search_field . '%')
            ->orWhere('company_details.tan', 'like', '%' . $this->search_field . '%')
            ->orWhere('company_details.tin', 'like', '%' . $this->search_field . '%')
            ->orWhere('company_details.cin', 'like', '%' . $this->search_field . '%')
            ->orWhere('company_details.gstin', 'like', '%' . $this->search_field . '%')
            ->paginate(10);
        
        return $companies;
    }

    public function render()
    {
        return view('livewire.ca.companies.view-companies')->with(
            [
                'companies' => $this->updatedSearchField(),
            ])->layout('layouts.app', ['header'=>'Companies Details']);
                    
    }
}
