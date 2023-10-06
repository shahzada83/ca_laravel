<div class="sm:col-span-{{ $colSpan }}">
    <label for="{{ $label }}" class="block text-sm font-medium leading-6">{{ $label }} @if($isRequired == "true") <span class="font-bold text-red-700 dark:text-red-200">*</span> @endif</label>
    <div class="mt-0">
      {{ $slot }}
    </div>  
  </div>