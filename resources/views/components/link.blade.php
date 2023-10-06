<a wire:loading.attr='disabled' {{ $attributes->merge([ 
    'class' => 'inline-flex text-gray-200 items-center px-4 py-2 bg-brand-mlsblue_main 
                dark:bg-brand-mlsgreen_main border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs  dark:text-gray-200 uppercase tracking-widest shadow-sm hover:brand-mlsgreen_main dark:hover:bg-gray-700 
                focus:outline-none focus:ring-1 focus:ring-brand-mlsgreen_main focus:ring-offset-1 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $link_text }}
    <x-loading/>
</a>
