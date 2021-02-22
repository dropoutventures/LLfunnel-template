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

<footer>
    <section class="container">
        <p class="text-xs">We do not provide advice to investors and the information on this website should not be construed as such. The information which appears on our website is for information purposes only and does not constitute specific advice. Neither does it constitute a solicitation, offer or recommendation to invest in or dispose of, any investment. If you are in any doubt as to the suitability of an investment, you should seek independent financial advice from a suitable financial advisor</p>
        <a href="/pages/privacy">Privacy Policy</a>
        <a href="/pages/terms">Terms and Conditions</a>
        <a href="/pages/contact">Contact Us</a>
        <hr class="my-3" />
        <span class="block text-center">© 2020 {{ $site['name'] }}</span>
    </section>
</footer>

<x-alert />
<x-footer-scripts />
</body>
</html>
