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
        <h1 class="text-4xl font-black">Privacy Policy</h1>
        <p><strong>BY USING OUR SITE, YOU CONSENT TO THE COLLECTION, USE AND TRANSFER OF YOUR PERSONAL DATA FOR PROCESSING AS DESCRIBED IN THIS PRIVACY POLICY.</strong></p>
        <p>For residents of the European Union: In order to comply with the requirements of the European General Data Protection Regulation (GDPR) for our European users, this Privacy Policy outlines the legal basis on which we process your Personal Data and provides other information required by the GDPR.</p>
        <h5>SECTION 1 – WHAT DO WE DO WITH YOUR INFORMATION?</h5>
        <p>We collect your Personal Data in a number of ways and for various purposes, including:</p>
        <p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address, and email address.</p>
        <p>When you browse our Site, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.</p>
        <p>Email marketing (if applicable and when legally allowed): With your permission and provided it is legal in your jurisdiction, we may, within time limits allowed by law, send you emails about our Site, new products and services, and other updates.&nbsp; By “permission” we mean express and provable permission granted by you. A permission to send commercial or marketing emails may be through any of the following instances which we deem as existing business relationship with or inquiry from you:</p>
        <ul>
            <li>Entering your email address on our Site with no indication that you would not like to be emailed.</li>
            <li>Entering your email address as part of attempting to order or ordering a product or service from us with no indication that you would not like to be emailed.</li>
            <li>Entering your email address as part of an abandoned cart with no indication that you would not like to be emailed.</li>
            <li>Entering your email address as part of participation in any contest, event or survey conducted by us and we have informed you that we will be sending you marketing emails.</li>
            <li>Subscribing to an email newsletter by filling-out a form on our Site.</li>
            <li>Any instance where in completing a form, you have checked an opt-in checkbox indicating your willingness to be contacted through email provided the checkbox is unchecked by default and we have informed you that the nature of the emails will be commercial.</li>
        </ul>
        <p>All marketing emails shall conspicuously contain a notice that at no cost to you, you can opt out of receiving more marketing emails from us.&nbsp; All marketing emails shall prominently display a one-click unsubscribe or opt-out option.&nbsp; Once you have opted out or unsubscribed, we shall immediately refrain from sending marketing emails to you.</p>
        <p>We may use your personal information, including but not limited to your name, address, telephone, email address and other relevant data to conduct our business, improve our Sites, develop new products and services, provide information and support, to better understand your needs and interests, personalize communications and advertising, meet contractual obligations, and generally promote a quality experience for you. For example, we may use your personal information, including your email address, to:</p>
        <ul>
            <li>Communicate, interact and build our relationship with you;</li>
            <li>Customize the content, products and services that are offered to you;</li>
            <li>Contact you with information about us and affiliated third-parties;</li>
            <li>Process, fulfill and follow up on transactions and requests for products, services, support, and information;</li>
            <li>Verify your authority to enter and use our services;</li>
            <li>Engage in market research and analysis;</li>
            <li>Measure, analyze and improve our products and services, the effectiveness of our websites, and our advertising and marketing;</li>
            <li>Comply with legal requirements;</li>
            <li>Provide targeting advertising, including the use of re-targeting technology;</li>
            <li>Send you marketing materials, for example, via email, including our newsletter, and to notify you about products and services that we believe would be of interest to you;</li>
            <li>Deter, detect, and prevent fraud and other prohibited or illegal activities; or</li>
            <li>Inform you regarding new services, releases, upcoming events and changes in our terms and conditions or privacy policy.</li>
        </ul>
        <p>You may manage your receipt of marketing and non-transactional emails by clicking on the “unsubscribe” link located on the bottom of our marketing and non-transactional emails.&nbsp;&nbsp; If at any point you choose not to receive our emails or newsletters, you can also opt-out or unsubscribe by emailing&nbsp;<a href="mailto:{{ $site['branding']['email'] ?? null }}">{{ $site['branding']['email'] ?? null }}</a>, by following the opt-out instructions in the email or newsletter, or by sending mail to&nbsp;our Customer Service Team&nbsp;with address at&nbsp;Postbus 202 6670 AE ZETTEN, Netherlands.</p>
        <p>The request to opt-out from the mailing list shall be honored immediately.&nbsp; You may not be able to opt out of all information sharing, however, such as information sharing with credit card processors in connection with products or services that you order from us.&nbsp; While we offer you some control over marketing communication, certain transactional, relationship, and legally required communications will not be affected by the choices you have made about marketing communications.</p>
        <p>We reserve the right to release and disclose any personal information relative or provided by you to law enforcement or other governmental officials as we, in our sole and absolute discretion, deem necessary to comply with any applicable law or at the request any governmental entity or agency.</p>
        <p>We assume that all visitors and users of our Site have carefully read this document and agree to its contents. If someone does not agree with this Privacy Policy, they should refrain from using our Site. We reserve the right to change our Privacy Policy as necessity dictates.</p>
        <p>Any information stored in our Site is treated as confidential. All information is stored securely and is accessed by authorized personnel only. We implement and maintain appropriate technical, security and organizational measures to protect Personal Data against unauthorized or unlawful processing and use, and against accidental loss, destruction, damage, theft or disclosure.</p>
        <h5>SECTION 2 – CONSENT AS BASIS</h5>
        <p>How do you get my consent?</p>
        <p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, you consent to our collecting your personal information and using it for that specific reason only.</p>
        <p>If we ask for your personal information for a secondary reason, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>
        <p>How do I withdraw my consent?</p>
        <p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you with future effect and without affecting the lawfulness of processing of your Personal Data based on the consent you provided before you withdrew it, at any time, by contacting us at email address&nbsp;<a href="mailto:{{ $site['branding']['email'] ?? null }}">{{ $site['branding']['email'] ?? null }}</a>, by following the opt-out instructions in the email or newsletter, or by sending mail to&nbsp;our Customer Service Team&nbsp;with address at&nbsp;Postbus 202 6670 AE ZETTEN, Netherlands.&nbsp; You may not be able to opt out of all information sharing, however, such as information sharing with credit card processors in connection with products or services that you order from us. Certain transactional, relationship, and legally required communications will not be affected by the choices you have made about information sharing. Depending on the service, collection and use of your Personal Data may be required for the services to work.</p>
        <p>We collect and process your Personal Data for a variety of purposes outlined in this Privacy Policy. In certain cases, separate consent is not required, including:</p>
        <ol>
            <li>For the performance of our contractual obligations to you;</li>
            <li>To meet legal obligations or compliance with laws, regulations, court orders, or other legal obligations or to assist in an investigation;</li>
            <li>For Legitimate Interests or to operate our business and provide the services, other than in performing our contractual obligations to you for our company’s “legitimate interests” for the purposes of applicable law – except where overridden by the interests or fundamental rights and freedoms that require protection of Personal Data.</li>
        </ol>
        <p>You can, at any time, request to edit, update, access or delete your information by emailing us at&nbsp;<a href="mailto:{{ $site['branding']['email'] ?? null }}">{{ $site['branding']['email'] ?? null }}</a>.&nbsp; We shall, promptly following receipt of notice, delete Personal Data from our records and, upon completion of all transactions, comply with all reasonable instructions with respect to the deletion of any remaining Personal Data. We will not retain data longer than is necessary to fulfill the purposes for which it was collected or as required by applicable laws or regulations.&nbsp;&nbsp; You may request for a copy of your Personal Data, free of charge and in an electronic format.&nbsp;&nbsp;&nbsp; You may request for all Personal Data to be provided in a commonly used and machine-readable format and once obtained, you have the right to take the same to another company.</p>
        <h5>SECTION 3 – DISCLOSURE</h5>
        <p>We may disclose your Personal Data for the purposes as described in the prior sections of this Privacy Policy, and in the following ways:</p>
        <ol>
            <li>To Affiliates and Partners: With companies or ventures that are owned or controlled by us, and internally within our company, in order to provide and improve services, for marketing purposes, and for advertising.</li>
            <li>To Service Providers and Vendors: With business partners, marketing partners, and vendors to provide, improve, and personalize our services.</li>
            <li>For Advertising and Marketing: With advertising and marketing partners for advertising and marketing purposes, with your consent, on our behalf and on behalf of third parties, including social network providers, if any.</li>
            <li>For Certain Analytics and Improvement: With certain companies for purposes of analytics and improvement of our services.</li>
            <li>For Legal Compliance, Law Enforcement, and Public Safety Purposes: With law enforcement, government or regulatory bodies, lawful authorities, or other authorized third parties in order to comply with laws, regulations, court orders, or other legal obligations or to assist in an investigation, to protect and defend our rights and property, or the rights or safety of third parties, to enforce our Terms of Use, this Privacy Policy, or agreements with third parties, or for crime-prevention purposes.</li>
        </ol>
        <h5>SECTION 4 – THIRD-PARTY SERVICES</h5>
        <p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform certain services they provide to us. Certain third-party services, such as payment gateways and other transaction or payment processors are required to abide by security standards imposed on them, such as the Payment Card Industry Data Security Standard (PCI-DSS), which is a set of security standards designed to ensure that all payment processors that accept, process, store or transmit credit card information maintain a secure environment. All direct payment gateways we utilize adhere to PCI-DSS, which is a joint effort of brands like Visa, MasterCard, American Express and Discover, to safeguard card data handling.</p>
        <p>Whilst we shall not store your credit card information, such payment gateways and other transaction or payment processors, under PCI-DSS, may store your purchase transaction data for only as long as is necessary to complete the transaction and thereafter for only as long as it is required by law.</p>
        <p>Such third-party payment gateways and other payment transaction processors and other third parties have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>
        <p>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>
        <p>In particular, remember that certain providers may be located in or have facilities that are located in a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>
        <p>Once you leave our Site or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.</p>
        <h5>SECTION 5 – LINKS</h5>
        <p>Please note that this Privacy Policy does not apply to the practices of companies that we do not own or control or to people that we do not employ or manage. We provide these links merely for your convenience. We have no control over, do not review, and are not responsible for Third- Party Sites, their content, or any goods or services available through the Third- Party Sites. Our Privacy Policy does not apply to Third Party Sites, and any data you provide to Third- Party Sites, you provide at your own risk. We encourage you to review the privacy policies of any Third- Party Sites with which you interact with.</p>
        <h5>SECTION 6 – SECURITY</h5>
        <p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.</p>
        <p>If you provide us with sensitive information, such as login credentials and credit card information, then such information is encrypted using secure socket layer technology (SSL) and stored with a AES-256 encryption.&nbsp; Although no method of transmission over the Internet or electronic storage is 100% secure, we&nbsp; use generally acceptable commercially standards to protect your personal information.</p>
        <h5>SECTION 7 – BREACH</h5>
        <p>Unless otherwise prohibited by applicable law, we shall notify you, as soon as it is reasonably possible&nbsp; under the circumstances but in any event no later than within 72 hours after becoming aware, of any accidental, unauthorized, or unlawful destruction, loss, alteration, or disclosure of, or access to, Personal Data (“Security Breach”) likely to result in a high risk of adversely affecting individuals’ rights and freedom.&nbsp; Such notification shall include:&nbsp; (a) a detailed description of the Security Breach, and (b) the type of data that was the subject of the Security Breach and&nbsp; we shall communicate&nbsp; (i) the name and contact details of our data protection officer or other point of contact where more information can be obtained; (ii) a description of the likely consequences of the Security Breach; (iii) a description of the measures taken or proposed to be taken by us to address the Security Breach, including, where appropriate, measures to mitigate its possible adverse effects; and (iv) additionally in such notification or thereafter as soon as such information can be collected or otherwise becomes available, any other information you may reasonably request relating to the Security Breach.</p>
        <p>We shall take prompt action to investigate the Security Breach and shall use industry standard, commercially reasonable, efforts to mitigate the effects of any such Security Breach in accordance with its obligations hereunder and, subject to your&nbsp; prior written agreement, to carry out any recovery or other action necessary to remedy the Security Breach.&nbsp; Unless required to do so under applicable Privacy Law, we shall not release or publish any filing, communication, notice, press release, or report concerning any Security Breach.</p>
        <p>We shall also report such Security Breach as may be required by law to relevant supervisory authority within 72 hours of becoming aware, where feasible.</p>
        <h5>SECTION 8 – GEOGRAPHIC LOCATION</h5>
        <p>Where personal data originating in the European Economic Area is processed outside the European Economic Area, in a territory that has not been designated by the European Commission as ensuring an adequate level of protection pursuant to applicable Privacy Law, we agree that the transfer shall be undertaken pursuant to SECTION 6 above, which we shall maintain in full force and effect.</p>
        <p>We have a data processing agreements in place to ensure compliance with all relevant Directives. All processing is performed in accordance with the highest security regulations.</p>
        <h5>SECTION 9 – AGE OF CONSENT</h5>
        <p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>
        <h5>SECTION 10 – CHANGES TO THIS PRIVACY POLICY</h5>
        <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use or disclose it. Continued use of our Site after having been informed of any such changes to these conditions implies acceptance of the revised Privacy Policy. This Privacy Policy is an integral part of our Terms of Service.</p>
        <p>If our Company is acquired or merged with another company, we may disclose your Personal Data with our prospective or actual purchasers, investors, or successor entities in connection with a contemplated reorganization or an actual reorganization of our business, in connection with financing, a sale, or other transaction involving the disposal of all or part of our business or assets, including for the purpose of permitting the due diligence required to decide whether to proceed with a transaction, pursuant to assurances of sufficient data handling practices and safeguards.</p>
        <p>Residents of the European Economic Area: Our disclosure is limited to situations where we are permitted to do so under applicable European and national data protection laws and regulations.</p>
        <h5>QUESTIONS AND CONTACT INFORMATION</h5>
        <p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact us at&nbsp;<a href="mailto:{{ $site['branding']['email'] ?? null }}">{{ $site['branding']['email'] ?? null }}</a>.</p>
        <p>We have a “Data Protection Officer” who is responsible for matters relating to privacy and data protection. This Data Protection Officer can be reached at the following address:</p>
        <p>{{ $site['branding']['address'] ?? null }}</p>
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
