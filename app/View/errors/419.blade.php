<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="uppercase text-xl font-black text-brand-mlsblue_main">
            Sorry, your session has expired. Please refresh and try again.
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">
            <x-jet-button class="ml-4">
                {{ __('Login') }}
            </x-jet-button>
            </a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

