<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="uppercase text-xl font-black text-brand-mlsblue_main">
            <div class="flex items-end gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                    <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                </svg>
                <span class="text-brand-mlsblue_main text-xl block">Sorry !! something isn't working right.</span>
            </div>

            <span class="text-brand-mlsgreen_main text-xl">
                Please let us know you got this message by contacting <a href="mailto:support@mylifesite.net">support@mylifesite.net</a>, Thanks !
            </span>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ URL::previous() }}">
            <x-jet-button class="ml-4">
                {{ __('BACK') }}
            </x-jet-button>
            </a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
