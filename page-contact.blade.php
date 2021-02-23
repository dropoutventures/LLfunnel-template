<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading" x-data="{ error: false }" x-init="() => { $el.classList.remove('loading') }">

<header class="border-b border-gray-200 border-solid p-3">
    <div class="container flex flex-wrap">
        <a href="/">
            <img src="{{ $site['branding']['logo'] ?? null }}" class="md:h-12 mx-auto md:mx-0" />
        </a>
    </div>
</header>

<main id="app">
    <section class="container text-center">
            <h1 class="text-4xl font-black">Contact Us</h1>
            <h2>If you are looking for more information on the products or need help with your order, then our award-winning customer service agents are standing by to assist you!</h2>
            <div class="text-center rounded border border-blue-600 p-6 my-4">
                <p>By Email {{ $site['branding']['email'] ?? null }}</p>
                <p>By Phone {{ $site['branding']['phone'] ?? null }}</p>
                <p>By Mail {{ $site['branding']['address'] ?? null }}</p>
            </div>
    </section>
</main>

<footer class="bg-gray-50 py-4">
    <section class="container space-y-1.5 text-gray-400">
        <p class="text-xxs md:text-xs">We do not provide advice to investors and the information on this website should not be construed as such. The information which appears on our website is for information purposes only and does not constitute specific advice. Neither does it constitute a solicitation, offer or recommendation to invest in or dispose of, any investment. If you are in any doubt as to the suitability of an investment, you should seek independent financial advice from a suitable financial advisor</p>
        <ul class="flex divide-x divide-gray-400 text-gray-500 leading-none space-x-1">
            <li><a href="/pages/privacy" class="text-xs md:text-sm">Privacy Policy</a></li>
            <li class="pl-1"><a href="/pages/terms" class="text-xs md:text-sm">Terms and Conditions</a></li>
            <li class="pl-1"><a href="/pages/contact" class="text-xs md:text-sm">Contact Us</a></li>
        </ul>
        <hr class="my-3 border-gray-300" />
        <span class="block text-center">© 2020 {{ $site['name'] }}</span>
    </section>
</footer>

<x-alert />
<x-footer-scripts />
</body>
</html>
