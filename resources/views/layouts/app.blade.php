<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        <!-- Blade UI Components : https://bladewindui.com/ -->
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @livewireStyles --}}
    </head>
    <body
        {{-- Dark-mode Code --}}
        x-data="{ darkMode: true }" 
        x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            localStorage.setItem('darkMode', JSON.stringify(true));
        }
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" 
        x-cloak
        class="font-sans antialiased bg-gray-300 dark:bg-gray-700 dark:text-white" 
    >
        <div class="min-h-screen">
    
            <div x-bind:class="{'dark' : darkMode === true}" class="">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-gray-200 shadow-xl text-xl border border-t border-b border-gray-100 text-gray-700 dark:bg-gray-700 dark:text-white">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <!-- Page Content -->
                
                <main>
                    <div class="bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-200 border border-gray-200 shadow-md overflow-hidden max-w-7xl mx-auto px-4 py-6 mt-4 mb-4 rounded-md">
                        {{ $slot }}
                    </div>
                </main>
            </div>
            {{-- @livewireScripts --}}

        </div>
    </body>
</html>