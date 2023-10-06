<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="text-xl text-brand-mlsblue_main content-center">
            <h1 class="text-xl font-black text-brand-mlsgreen_main">We'll be back soon!</h1>

            <p>Sorry for the inconvenience but we’re performing some maintenance at the moment.</p>
            <p>If you need to you can always contact us at <span class="text-brand-mlsgreen_main">
                {{ env('MAIL_FROM_ADDRESS')}}
            </span>, otherwise we’ll be back online shortly!
            <br><br>
            <h6>— MyLifeSite</h6>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
