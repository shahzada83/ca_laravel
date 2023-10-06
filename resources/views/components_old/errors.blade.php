{{-- Errors --}}
@if(session()->has('error'))
    {{-- Hide message after 3 second --}}
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
        <div class="px-6 py-2 border-0 rounded mb-4 bg-red-700 text-white">
            <span class="flex align-middle mr-8 items-center">
                {{-- x --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <b class="capitalize"> </b> {{session('error')}}
            </span>
        </div>
    </div>
@endif

{{-- Success --}}
@if(session()->has('success'))
    {{-- Hide message after 3 second --}}
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
        <div class="px-6 py-2 border-0 rounded mb-4 bg-brand-mlsgreen_main text-white">
            <span class="flex align-middle mr-8 items-center">
                {{-- Checked --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <b class="capitalize"> </b> {{session('success')}}
            </span>
        </div>
    </div>
@endif

{{-- Warning --}}
@if(session()->has('warning'))
    {{-- Hide message after 3 second --}}
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
        <div class="px-6 py-2 border-0 rounded mb-4 bg-yellow-500 range-300 text-black">
            <span class="flex align-middle mr-8 items-center">
                {{-- Exclamation --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <b class="capitalize"> </b> {{session('success')}}
            </span>
        </div>
    </div>
@endif

{{-- Notification --}}
@if(session()->has('warning'))
    {{-- Hide message after 3 second --}}
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
        <div class="px-6 py-2 border-0 rounded mb-4 bg-yellow-200 range-300 text-black">
            <span class="flex align-middle mr-8 items-center">
                {{-- Information --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <b class="capitalize"> </b> {{session('success')}}
            </span>
        </div>
    </div>
@endif