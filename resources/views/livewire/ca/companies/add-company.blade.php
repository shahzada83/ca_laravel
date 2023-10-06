<div class="">
  @include('components.errors')

  {{-- <div wire:loading.target="save_company_records">
    <x-busy_icon/>
  </div> --}}

  <form>
    <div class="space-y-4">
      {{-- <div class="border-b border-gray-900/10 dark:border-brand-mlsgreen_main pb-12">
        <h2 class="text-base font-semibold leading-7">Parent/ Management Company (Optional)</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-400">
          You must specify the company's Parent/Managing company name, this will help you group companies.
        </p> 

        <x-form-container>
          
          <x-form colSpan="2" label="Parent company name (Optional)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="parent_cmp_name"/>
          </x-form>
          
          <x-form colSpan="2" label="Managing company name (Optional)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="managing_cmp_name"/>
          </x-form>

        </x-form-container> 
      </div> --}}

      <div class="border-b border-gray-900/10 dark:border-brand-mlsgreen_main pb-12">
          <h2 class="text-base font-semibold leading-7">Company Details</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-400">
            These details provide essential information about the company's identity, structure, and contact information.
          </p>
    
        <x-form-container>
          <x-form colSpan="2" label="Type" isRequired="true" >
            <x-select wire:dirty.class="border-red-500" wire:model.lazy="type"  autocomplete="type" :options="['Company', 'Individual']"></x-select>
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="Company name" isRequired="true" >
            <x-input type="text" placeholder="Enter Company Name" wire:dirty.class="border-red-500" wire:model.lazy="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="Establishment Date" isRequired="false" >
            <x-input type="date" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="est_date"/>
          </x-form>
          
        </x-form-container>
        
        <x-form-container>
          <x-form colSpan="4" label="Address" isRequired="false" >
            <x-input type="text" placeholder="" class="w-full" wire:dirty.class="border-red-500" wire:model.lazy="address"/>
          </x-form>
        </x-form-container>  

        <x-form-container>
          <x-form colSpan="2" label="City" isRequired="true" >
            <x-input type="text" placeholder="Enter city" wire:dirty.class="border-red-500" wire:model.lazy="city"/>
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="Zip/Postal Code" isRequired="true" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="pin"/>
            <x-input-error :messages="$errors->get('pin')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="State" isRequired="true" >
            <x-select wire:dirty.class="border-red-500" wire:model.lazy="state"  autocomplete="state" :options="['Bihar', 'Jharkhand']"></x-select>
            <x-input-error :messages="$errors->get('state')" class="mt-2" />
          </x-form>
        </x-form-container>

        <x-form-container>
          <x-form colSpan="3" label="Primary Email-ID" isRequired="true" >
            <x-input type="text" placeholder="Enter Email-ID" wire:dirty.class="border-red-500" wire:model.lazy="primary_email"/>
            <x-input-error :messages="$errors->get('primary_email')" class="mt-2" />
          </x-form>

          <x-form colSpan="3" label="Secondary Email-ID (Optional)" isRequired="false" >
            <x-input type="text" placeholder="Enter Secondary Email-ID" wire:dirty.class="border-red-500" wire:model.lazy="secondary_email"/>
          </x-form>

          <x-form colSpan="3" label="Primary Mobile No." isRequired="true" >
            <x-input type="number" placeholder="Enter Primary Mobile No." wire:dirty.class="border-red-500" wire:model.lazy="primary_phone"/>
            <x-input-error :messages="$errors->get('primary_phone')" class="mt-2" />
          </x-form>

          <x-form colSpan="3" label="Secondary Mobile No." isRequired="false" >
            <x-input type="number" placeholder="Enter Secondary Mobile No." wire:dirty.class="border-red-500" wire:model.lazy="secondary_phone"/>
          </x-form>

        </x-form-container>
      </div>

      <div>
        <h2 class="text-base font-semibold leading-7">Company identification numbers</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-400">
          Company identification numbers are unique alphanumeric codes or numbers assigned to companies to identify and differentiate them from other entities.
        </p>
  
        <x-form-container>
          
          <x-form colSpan="2" label="Company Aadhar No." isRequired="true" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="director_aadhar_no"/>
            <x-input-error :messages="$errors->get('director_aadhar_no')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="Aadhar Linked Mobile No." isRequired="true" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="director_aadhar_linked_mobile_no"/>
            <x-input-error :messages="$errors->get('director_aadhar_linked_mobile_no')" class="mt-2" />
          </x-form>

          <x-form colSpan="2" label="Aadhar Linked Email-ID." isRequired="true" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="director_aadhar_linked_email_id"/>
            <x-input-error :messages="$errors->get('director_aadhar_linked_email_id')" class="mt-2" />
          </x-form>

          <x-form colSpan="3" label="CIN (Corporate Identity Number)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="cmp_cin_no"/>
          </x-form>

          <x-form colSpan="3" label="PAN (Permanent Account Number)" isRequired="true" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="cmp_pan_no"/>
            <x-input-error :messages="$errors->get('cmp_pan_no')" class="mt-2" />
          </x-form>

          <x-form colSpan="3" label="TAN (Tax Deduction and Collection Account Number)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="cmp_tan_no"/>
          </x-form>

          <x-form colSpan="3" label="TIN (Taxpayer Identification Number)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="cmp_tin_no"/>
          </x-form>

          <x-form colSpan="3" label="GSTIN (Goods and Services Tax Identification Number)" isRequired="false" >
            <x-input type="text" placeholder="" wire:dirty.class="border-red-500" wire:model.lazy="cmp_gstin_no"/>
          </x-form>
          
        </x-form-container>
      </div>
    </div>

  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6" wire:click="back_button">Back</button>

      <x-secondary-button wire:click.prevent="save_company_records" wire:target="save_company_records">
          Save
      </x-secondary-button>

    </div>
  </form>
</div>
