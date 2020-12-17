<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading"
      x-data="{ quiz: window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')) }"
      x-on:next-step.document="quiz = event.detail"
>

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

        <template x-if="quiz.step <= 1">
            <div>
                @if(!empty($page['headline'] ?? false))
                    <h1 class="Quiz--heading">{!! $page['headline'] !!}</h1>
                @endif
                @if(!empty($page['subheadline'] ?? false))
                    <h2 class="Quiz--subheading">{!! $page['subheadline'] !!}</h2>
                @endif
            </div>
        </template>
        <template x-if="quiz.step > 1">
            <div class="border-b-2 pb-2 mb-2">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="'Step: ' + quiz.step + ' of ' + quiz.stepMax"></div>
                    </div>
                    <div class="flex items-center md:w-64">
                        <div class="w-full bg-gray-200 rounded-full mr-2">
                            <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white" x-bind:style="'width: ' + ((quiz.step / quiz.stepMax) * 100) + '%'"></div>
                        </div>
                        <div class="text-xs w-10 text-gray-600" x-text="((quiz.step / quiz.stepMax) * 100) + '%'"></div>
                    </div>
                </div>
            </div>
        </template>

        @livewire('quiz', ['page' => $page])
        <small class="mx-auto flex items-center justify-center text-gray-600"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
        <a href="javascript:void(0)" x-show="quiz.step > 1" x-on:click="window.livewire.emit('backStep')" class="Quiz--back"><i class="far fa-angle-left"></i> Back</a>
    </main>
</section>

<!--<footer class="absolute inset-x-0 bottom-0 text-center">
    <a href="/pages/privacy">Privacy Policy</a>
    <a href="/pages/terms">Terms and Conditions</a>
    <a href="/pages/contact">Contact Us</a>
</footer>-->

<x-alert />
<x-footer-scripts />
</body>
</html>
