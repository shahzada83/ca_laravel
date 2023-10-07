<?php

namespace App\Livewire\Ca\Companies;

use Livewire\Component;
use App\Models\ca\Company;
use App\Models\CompanyType;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use App\Models\ca\CompanyDetail;

#[Title('Add|Update Company')] 
class AddCompany extends Component
{
    #[Locked] 
    public $company_id;

    public
        $type,
        $name,
        $est_date,
        $address,
        $city,
        $state,
        $pin,
        $primary_email,
        $secondary_email,
        $primary_phone,
        $secondary_phone,

        $aadhar,
        $aadhar_linked_phone,
        $aadhar_linked_email,
        $pan,
        $tan,
        $tin,
        $cin,
        $gstin;

    protected $rules = [
        'type'                              => 'required',
        'name'                              => 'required',
        'city'                              => 'required',
        'state'                             => 'required',
        'pin'                               => 'required',
        'primary_email'                     => 'required|email',
        'primary_phone'                     => 'required',
        'aadhar'                            => 'required',
        'aadhar_linked_phone'               => 'required',
        'aadhar_linked_email'               => 'required|email',
        'pan'                               => 'required',
    ];

    protected $messages = [
        'aadhar_no.required'               => 'The aadhar no field is required.',
        'aadhar_linked_phone.required' => 'The aadhar linked mobile no field is require',
        'aadhar_linked_email.required'  => 'The aadhar linked email-id field is require',
        'aadhar_linked_email.email'     => 'The email-id must be a valid email address',
    ];

    public function mount($companyID = 0)
    {
        $this->company_id = $companyID;
        if($this->company_id != 0){
            $this->find_and_initilize_company_cariables();
        }

    }

    public function find_and_initilize_company_cariables(){
        $companyData = Company::where('id',$this->company_id)->with('company_details')->first();
        
        if(!empty($companyData)){
            $this->fill( 
                $companyData->only(
                                    'type', 
                                    'name', 
                                    'est_date', 
                                    'address', 
                                    'city', 
                                    'state', 
                                    'pin', 
                                    'primary_email',
                                    'secondary_email',
                                    'primary_phone',
                                    'secondary_phone',
                                ), 
            );
    
            $company_details = $companyData->company_details;
            $this->fill( 
                $company_details->only(
                                        'pan', 
                                        'aadhar', 
                                        'aadhar_linked_phone', 
                                        'aadhar_linked_email', 
                                        'gstin', 
                                        'tan', 
                                        'cin', 
                                        'tin'
                                      ), 
            );
        }
        

        // $this->type = $companyData->type;
        // // $this->company_id = $companyData->company_id;
        // $this->name = $companyData->name;
        // $this->est_date = $companyData->est_date;
        // $this->address = $companyData->address;
        // $this->city = $companyData->city;
        // $this->state = $companyData->state;
        // $this->pin = $companyData->pin;
        // $this->primary_email = $companyData->primary_email;
        // $this->secondary_email = $companyData->secondary_email;
        // $this->primary_phone = $companyData->primary_phone;
        // $this->secondary_phone = $companyData->secondary_phone;
        
        // $this->cmp_pan_no = $companyData->company_details->pan;
        // $this->director_aadhar_no = $companyData->company_details->aadhar;
        // $this->director_aadhar_linked_phone = $companyData->company_details->aadhar_linked_phone;
        // $this->director_aadhar_linked_email_id = $companyData->company_details->aadhar_linked_email;
        // $this->cmp_gstin_no = $companyData->company_details->GSTIN;
        // $this->cmp_tan_no = $companyData->company_details->TAN;
        // $this->cmp_cin_no = $companyData->company_details->CIN;
        // $this->cmp_tin_no = $companyData->company_details->TIN;
        
    }

    public function save_company_records()
    {
        $this->validate();
        $company = company::updateOrCreate(
            ['id' => $this->company_id],
            [
                'type'              => $this->type,
                'name'              => $this->name,
                'est_date'          => $this->est_date,
                'city'              => $this->city,
                'state'             => $this->state,
                'pin'               => $this->pin,
                'address'           => $this->address,
                'primary_email'     => $this->primary_email,
                'secondary_email'   => $this->secondary_email,
                'primary_phone'     => $this->primary_phone,
                'secondary_phone'   => $this->secondary_phone,
            ]
        );

        $company_detail = CompanyDetail::updateOrCreate(
            ['company_id' => $company->id],
            [
                'company_id'            => $company->id,
                'aadhar'                => $this->aadhar,
                'aadhar_linked_phone'   => $this->aadhar_linked_phone,
                'aadhar_linked_email'   => $this->aadhar_linked_email,
                'pan'                   => $this->pan,
                'tan'                   => $this->tan,
                'tin'                   => $this->tin,
                'cin'                   => $this->cin,
                'gstin'                 => $this->gstin,
            ]
        );

        if($this->company_id){
            $message = 'Company created  successfully';
        }else{
            $message = 'Company updated  successfully';
        }
        
        return redirect()->route('company.view')->with('success', $message);
    }


    public function render()
    {
        return view('livewire.ca.companies.add-company')
        ->layout('layouts.app', ['header'=>'Add Company Details']);
    }
}
