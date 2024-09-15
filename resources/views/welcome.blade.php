<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- Hero -->
        <div
            class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
            <!-- Navbar -->
            <header class="relative">
                <div
                    class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="{{ url('/') }}">
                            <span class="sr-only">Sosio Link</span>
                            <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo.svg') }}" alt="">
                        </a>
                    </div>
                    {{-- <div class="-mr-2 -my-2 md:hidden" x-data="{ btn: 1 }">
                        <button type="button" @click="$dispatch('open-menu',{btn})"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </button>
                    </div> --}}

                    {{-- <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        <a href="https://psb.nfbs.or.id/login"
                            class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            About </a>
                        <a href="https://psb.nfbs.or.id/register"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-blue-700 hover:to-indigo-700">
                            Daftar </a>
                    </div> --}}
                </div>


                {{-- <div x-data="{ open: false }" x-show="open" @open-menu.window="if ($event.detail.btn == 1) open = true"
                    @click.away="open = false" x-transition:enter="duration-200 ease-out"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                    style="display: none;">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                        <div class="pt-5 pb-6 px-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto" src="https://psb.nfbs.or.id/images/brand.svg" alt="NFBS Serang">
                                </div>
                                <div class="-mr-2">
                                    <button type="button" @click="open = false"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>

                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <nav class="grid grid-cols-1 gap-7" aria-label="">
                                    <a href="#fasilitas" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50"
                                        id="fasilitas-link">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Fasilitas</div>
                                    </a>

                                    <a href="#biaya" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Biaya</div>
                                    </a>

                                    <a href="#faq" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50" id="faq-link">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">FAQ</div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="py-6 px-5">
                            <div class="mt-6">
                                <a href="https://psb.nfbs.or.id/register"
                                    class="w-full flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-blue-700 hover:to-indigo-700">
                                    Daftar </a>
                                <p class="mt-6 text-center text-base font-medium text-gray-500">
                                    Sudah mendaftar?
                                    <a href="https://psb.nfbs.or.id/login" class="text-gray-900"> Masuk </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </header>

            <livewire:home.index />
        </div>
        <!-- End Hero -->
    </body>
</html>
