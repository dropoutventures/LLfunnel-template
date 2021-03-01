<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading" id="{{ $view_name }}">

<header class="border-b border-gray-200 border-solid p-3 mb-12">
    <div class="container flex flex-wrap">
        <img src="{{ $site['branding']['logo'] ?? null }}" class="h-10 md:h-12 mx-auto md:mx-0" />
    </div>
</header>

<main id="app">
    <section class="container text-center">
        <h1>Thank You</h1>
        <p>{{ $site['name'] }} Is Working Hard On Getting You The Best Quotes And We Will Be In Touch Shortly.</p>
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
