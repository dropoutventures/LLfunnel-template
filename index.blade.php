<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading" id="{{ $view_name }}"
      x-data="{ quiz: window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')) }"
      x-on:next-step.document="quiz = event.detail"
>

<header class="border-b border-gray-200 border-solid p-3">
    <div class="container flex flex-wrap">
        <a href="/">
            <img src="{{ $site['branding']['logo'] ?? null }}" class="md:h-12 mx-auto md:mx-0" />
        </a>
        {{--
        <div class="ml-auto md:flex items-center hidden">
            <i class="fad fa-phone-alt text-4xl"></i>
            <div class="flex flex-col ml-3">
                <b class="text-xl font-extrabold">{{ $site['branding']['phone'] ?? null }}</b>
                <small>Talk To A Qualified Advisor</small>
            </div>
        </div>
        --}}
    </div>
</header>

<main id="app">
    <section class="container py-12">
        {{--
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
                        <div class="text-xs w-10 text-gray-600" x-text="Math.round((quiz.step / quiz.stepMax) * 100) + '%'"></div>
                    </div>
                </div>
            </div>
        </template>
        --}}

        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="'Step: ' + quiz.step + ' of ' + quiz.stepMax"></div>

        @livewire('quiz', ['page' => $page])
        <small class="mx-auto flex items-center justify-center text-gray-600"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
        {{-- <a href="javascript:void(0)" x-show="quiz.step > 1" x-on:click="window.livewire.emit('backStep')" class="Quiz--back"><i class="far fa-angle-left"></i> Back</a> --}}
    </section>
</main>

<footer class="bg-gray-50 py-4">
    <section class="container text-gray-400">
        <p class="text-xxs md:text-xs">We do not provide advice to investors and the information on this website should not be construed as such. The information which appears on our website is for information purposes only and does not constitute specific advice. Neither does it constitute a solicitation, offer or recommendation to invest in or dispose of, any investment. If you are in any doubt as to the suitability of an investment, you should seek independent financial advice from a suitable financial advisor</p>
        <ul class="flex divide-x divide-gray-300 text-gray-500 leading-none space-x-1 mt-1.5">
            <li><a href="/pages/privacy" class="text-xs md:text-sm">Privacy Policy</a></li>
            <li class="pl-1"><a href="/pages/terms" class="text-xs md:text-sm">Terms and Conditions</a></li>
            <li class="pl-1"><a href="/pages/contact" class="text-xs md:text-sm">Contact Us</a></li>
        </ul>
        <hr class="my-4 border-gray-200" />
        <span class="text-sm block text-center">© 2020 {{ $site['name'] }}</span>
    </section>
</footer>

<x-alert />
<x-footer-scripts />
</body>
</html>
