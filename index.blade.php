<!DOCTYPE html>
<html>

<head>
    <title>{{ $site['name'] }}</title>
    <link rel="icon" type="image/png" href="{{ $site['branding']['favicon'] ?? '/favicon.png' }}" sizes="32x32" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ $page->folder }}" target="_self">
    <link href="/default.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    @livewireStyles
</head>

<script>
    window.dataLayer = window.dataLayer || [];
</script>

<style>
    :root {
        --brand1: {{ $site['branding']['color1'] ?? null }};
        --brand2: {{ $site['branding']['color2'] ?? null }};
    }
    .bg-brand1 { background-color: var(--brand1); }
    .bg-brand2 { background-color: var(--brand2); }
    .text-brand1 { color: var(--brand1); }
    .text-brand2 { color: var(--brand2); }
</style>

<body class="loading">

<header class="bg-brand1 text-white shadow-xl p-3 mb-12">
    <div class="container flex flex-wrap">
        <img src="{{ $site['branding']['logo'] ?? null }}" class="h-12 md:h-16 mx-auto md:mx-0" />
        <div class="ml-auto md:flex items-center hidden">
            <i class="fad fa-phone-alt text-4xl"></i>
            <div class="flex flex-col ml-3">
                <b class="text-xl font-extrabold">{{ $site['branding']['phone'] ?? null }}</b>
                <small>Talk To A Qualified Advisor</small>
            </div>
        </div>
    </div>
</header>

<section class="container">
    <main id="app">
        @livewire('quiz', ['page' => $page])
        <small class="mx-auto flex items-center justify-center text-gray-600"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
        <a href="javascript:void(0)" onClick="window.livewire.emit('backStep')" class="Quiz--back"><i class="far fa-angle-left"></i> Back</a>
    </main>
</section>

<!--<footer class="absolute inset-x-0 bottom-0 text-center">
    <a href="/pages/privacy">Privacy Policy</a>
    <a href="/pages/terms">Terms and Conditions</a>
    <a href="/pages/contact">Contact Us</a>
</footer>-->

<template x-data="{ error: false }" x-if="error" x-on:error.document="error = true; message = $event.detail.message" x-on:next-step.document="error = false">
    <div class="fixed md:top-0 md:bottom-auto md:left-auto bottom-0 left-0 right-0 mx-auto md:mx-5 my-6 pointer-events-none max-w-sm w-full bg-red-100 shadow-lg rounded-lg pointer-events-auto"
         x-transition:enter="transform ease-out duration-300 transition"
         x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
         x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    >
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="far fa-times-circle text-red-400"></i>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            Whoah, something went wrong!
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500" x-text="message">
                            Check yourself before you wreck yourself
                        </p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button type="button" x-on:click="error = false" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

@livewireScripts
@stack('scripts')
<script src="/default.js"></script>
</body>
</html>
