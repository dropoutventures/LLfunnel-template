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
    <section class="container">
        <h1 class="text-4xl font-black">Terms And Conditions</h1>
        <p>We value you as our customer and we respect your privacy. This privacy statement provides information about the personal information and its associated services (“Site”) collects, and the ways in which the Site uses that personal information.</p>
        <br /><h5>WHAT IS COLLECTED?</h5>
        <p>We may collect and use personal information you provide us, including (but not limited to) your name, email address, postal address, phone number, credit card number, gender, birthday and preferences, (“Information”) when you visit our Site, place an order online or by phone, provide any information to us online, contact us, participate in any online promotion, activity, survey or contest. We keep a record of the Information and may merge this information with other information we may have about you, whether through previous interactions, joint marketing partners, and/or unrelated third parties.</p>
        <br /><h5>HOW IS MY INFORMATION USED?</h5>
        <p>We may use your Information in a number of ways:</p>
        <ul>
            <li>To process and fulfill an order</li>
            <li>To get in touch with you, whether by email or by phone</li>
            <li>To process, formulate, tabulate or evaluate contest information, promotion or other marketing activities</li>
            <li>To process, formulate, tabulate or evaluate sales data</li>
            <li>To assist with service recovery</li>
            <li>To assist you with more information and provide recommendations</li>
            <li>To improve our Site and services we provide you</li>
            <li>To protect the security and integrity of the Site and our business.</li>
        </ul>
        <br /><h5>HOW IS MY INFORMATION TRANSMITTED AND STORED?</h5>
        <p>The Information that we collect may be stored and processed in and transferred between any of the countries in which we operates to enable the use of the Information in accordance with this privacy policy.</p>
        <br /><h5>OTHER WEBSITES</h5>
        <p>This Site contains links to other websites and other third party sites may link their pages to our Site. We have no control, cannot verify and do not endorse any third party sites. Accordingly, we have no obligation or responsibility regarding any content derived, obtained, accessed within, through or outside the Site. Any hyperlinks to any other websites are not an endorsement or verification of such sites. We are also not responsible for the privacy policies or practices of any third party.</p>
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
