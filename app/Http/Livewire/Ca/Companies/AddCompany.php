<?php

namespace App\Http\Livewire\Ca\Companies;

use Livewire\Component;
use App\Models\ca\Company;
use App\Models\CompanyType;
use App\Models\ca\CompanyDetail;

class AddCompany extends Component
{
    public
        // $company_type_id,
        // $parent_cmp_name,
        // $managing_cmp_name,
        // Company Data
        $type,
        $company_id,
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

        $director_aadhar_no,
        $director_aadhar_linked_mobile_no,
        $director_aadhar_linked_email_id,
        $cmp_pan_no,
        $cmp_tan_no,
        $cmp_tin_no,
        $cmp_cin_no,
        $cmp_gstin_no;

    protected $rules = [
        'type'                              => 'required',
        'name'                              => 'required',
        'city'                              => 'required',
        'state'                             => 'required',
        'pin'                               => 'required',
        'primary_email'                     => 'required|email',
        'primary_phone'                     => 'required',
        'director_aadhar_no'                => 'required',
        'director_aadhar_linked_mobile_no'  => 'required',
        'director_aadhar_linked_email_id'   => 'required|email',
        'cmp_pan_no'                        => 'required',
    ];

    protected $messages = [
        'director_aadhar_no.required'               => 'The aadhar no field is required.',
        'director_aadhar_linked_mobile_no.required' => 'The aadhar linked mobile no field is require',
        'director_aadhar_linked_email_id.required'  => 'The aadhar linked email-id field is require',
        'director_aadhar_linked_email_id.email'     => 'The email-id must be a valid email address',
    ];

    public function mount($company_id = 0)
    {
        $this->company_id = $company_id;
        if($this->company_id != 0){
            $this->find_and_initilize_company_cariables();
        }
    }

    public function find_and_initilize_company_cariables(){
        $companyData = Company::where('id',$this->company_id)->with('company_details')->first();
        $this->type = $companyData->type;
        // $this->company_id = $companyData->company_id;
        $this->name = $companyData->name;
        $this->est_date = $companyData->est_date;
        $this->address = $companyData->address;
        $this->city = $companyData->city;
        $this->state = $companyData->state;
        $this->pin = $companyData->pin;
        $this->primary_email = $companyData->primary_email;
        $this->secondary_email = $companyData->secondary_email;
        $this->primary_phone = $companyData->primary_phone;
        $this->secondary_phone = $companyData->secondary_phone;
        
        $this->cmp_pan_no = $companyData->company_details->pan;
        $this->director_aadhar_no = $companyData->company_details->aadhar;
        $this->director_aadhar_linked_mobile_no = $companyData->company_details->aadhar_linked_phone;
        $this->director_aadhar_linked_email_id = $companyData->company_details->aadhar_linked_email;
        $this->cmp_gstin_no = $companyData->company_details->GSTIN;
        $this->cmp_tan_no = $companyData->company_details->TAN;
        $this->cmp_cin_no = $companyData->company_details->CIN;
        $this->cmp_tin_no = $companyData->company_details->TIN;
        
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
                'aadhar'                => $this->director_aadhar_no,
                'aadhar_linked_phone'   => $this->director_aadhar_linked_mobile_no,
                'aadhar_linked_email'   => $this->director_aadhar_linked_email_id,
                'PAN'                   => $this->cmp_pan_no,
                'TAN'                   => $this->cmp_tan_no,
                'TIN'                   => $this->cmp_tin_no,
                'CIN'                   => $this->cmp_cin_no,
                'GSTIN'                 => $this->cmp_gstin_no,
            ]
        );

        return redirect()->route('company.view')->with('success', 'Company created successfully.');
    }

    public function back_button(){
        return redirect()->route('company.view');
    }

    public function render()
    {
        return view('livewire.ca.companies.add-company')
            ->layout(
                'layouts.app',
                [
                    'header' => 'Add New Company'
                ]
            );
    }
}
