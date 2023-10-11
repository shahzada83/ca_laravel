<div>

       
            {{-- <livewire:company-table/> --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="p-2 flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                    <div>
                        <a href="{{ route('company.add') }}" 
                            class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            + Add New Company
                        </a>
                    </div>

                    <div class="flex items-center gap-2">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input  type="text" 
                                    id="table-search-users" 
                                    wire:model.live="search_field" 
                                    class=" block 
                                            p-2 pl-12 
                                            text-sm text-gray-900 border 
                                            border-gray-300 rounded-lg w-80 bg-gray-50 
                                            focus:ring-blue-500 focus:border-blue-500 
                                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                            placeholder="Type, Name, Email, Phone, PAN, GSTIN, TAN, TIN, CIN">
                        </div>
                    </div>
                    
                </div>
            @if(!empty($companies))
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs font-bold text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            {{-- <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th> --}}
                            
                            <th scope="col" class="px-6 py-3">
                                 Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Emails
                            </th>
                            <th scope="col" class="px-6 py-3">
                                COntacts
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{-- <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td> --}}
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                {{-- Logo : <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image"> --}}
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $company->name }}</div>
                                    <div class="font-normal text-gray-500">Type: {{ $company->type }}</div>
                                </div>  
                            </th>

                            <td class="px-6 py-4">
                                {{ $company->address }} City: {{ $company->city }}, State: {{ $company->state }}
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">{{ $company->primary_email }}</div>
                                <div class="font-normal text-gray-500">{{ $company->secondary_email }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-base font-semibold">{{ $company->primary_phone }}</div>
                                <div class="font-normal text-gray-500">{{ $company->secondary_phone }}</div>
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ route('company.edit',['companyID' => $company->company_id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <x-iconEdit /> 
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $companies->links() }}
                </div>
            @else
                <div class="py-2 font-semibold text-gray-900 dark:text-gray-100 text-md">
                    No company record found.
                </div>
            @endif 
            </div>
        
   

    {{-- <x-link href="{{ route('company.add') }}" link_text = "Add Company"/> --}}
</div>
