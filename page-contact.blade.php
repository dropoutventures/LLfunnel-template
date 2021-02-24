<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading" id="{{ $view_name }}" x-data="{ error: false }" x-init="() => { $el.classList.remove('loading') }">

<header class="border-b border-gray-200 border-solid p-3">
    <div class="container flex flex-wrap">
        <a href="/">
            <img src="{{ $site['branding']['logo'] ?? null }}" class="md:h-12 mx-auto md:mx-0" />
        </a>
    </div>
</header>

<main id="app">
    <section class="container py-12">
        <h1 class="text-4xl font-black">Contact Us</h1>
        <p><strong>If you are looking for more information on the products or need help with your order, then our award-winning customer service agents are standing by to assist you!</strong></p>
        <dl class="bg-gray-50 rounded-lg text-base text-gray-500 p-8 space-y-3 mt-4">
            @if($site['branding']['address'] ?? false)
                <div>
                    <dt class="sr-only">Postal address</dt>
                    <dd class="flex">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="ml-3">{{ $site['branding']['address'] ?? null }}</span>
                    </dd>
                </div>
            @endif
            @if($site['branding']['phone'] ?? false)
                <div>
                    <dt class="sr-only">Phone number</dt>
                    <dd class="flex">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="ml-3">{{ $site['branding']['phone'] ?? null }}</span>
                    </dd>
                </div>
            @endif
            @if($site['branding']['email'] ?? false)
                <div>
                    <dt class="sr-only">Email</dt>
                    <dd class="flex">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-3">{{ $site['branding']['email'] ?? null }}</span>
                    </dd>
                </div>
            @endif
        </dl>
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
