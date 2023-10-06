<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="uppercase text-xl font-black text-brand-mlsblue_main">
            Sorry !! You are not Authorized to access this Page.<br>
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
