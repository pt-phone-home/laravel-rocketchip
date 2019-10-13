@extends('servicesmaster')
@section('pageDescription')
<meta name="description" content="Website Design and Development services for SME's and sole traders in Dublin, Ireland and Northern Ireland. Professional and affordable solutions for your business.">
@endsection
@section('servicePageTitle')
    Website Design & Development | Rocket.Chip Web Solutions
@endsection
@section('serviceTitle')
    Website Design & Development
@endsection

@section('serviceContentHeader')

@endsection

@section('serviceHeading', 'Website Design & Development')

@section('serviceSubHeading', 'That works for your business')

@section('serviceInfo', 'Work with us to craft a custom website for your business that gets you results.')



@section('serviceContent')
<div class="webdesign-page-section-1-wrapper">
    <div class="webdesign-page-section-1">
        <div class="webdesign-page-section-1-left">
            <h2 class="webdesign-page-section-1-left-heading">Client Driven Website Design &amp; Development</h2>
            <p class="webdesign-page-section-1-left-info">Rocket.Chip Web Solutions are one of Ireland's most innovative Website Design and Development companies. We know that your website is an important part of your business. It is an essential element in attracting new customers and letting existing customers know what you offer. We understand this and, through our design process, we help to ensure your website acts as an effective marketing and communications tool.</p>


            @component('partials.webfeature', ['icon' => 'fal fa-paint-brush-alt', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Proven Design Principles', 'serviceInfo' => "All our websites are created using proven design principles. Your website will be fast-loading and mobile ready. The interface will be clear and consistent meaning your users will easily find the information they need.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent
            @component('partials.webfeature', ['icon' => 'fal fa-search-plus', 'iconClass' => 'webfeature-icon',

            'featureClass' => 'webfeature-mid',

            'serviceTitle' => 'Google Search Engine Optimised', 'serviceInfo' => "Search Engine Optimisation (SEO) is the process of increasing the quality and quantity of traffic to your website. Our websites are built using SEO techniques, this means that your website will rank highly in Google searches, without the need for expensive Google Ads.", 'serviceLink' => "/search-engine-optimisation", 'serviceLinkClass' => 'service-link'])
            @endcomponent
            @component('partials.webfeature', ['icon' => 'fal fa-mobile', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Responsive Design', 'serviceInfo' => "Responsive design is an approach to web design which allows the website to respond or resize itself depending on the size of the device it is being viewed on. This means that a website will adjust its overall size, the size of certain components and/or the layout of components, when it is viewed on a deskop, laptop or mobile device. With the growth of mobile devices, responsive design is essential for any business website, ensuring your content is accessible regardless of where your customer is.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent
            @component('partials.webfeature', ['icon' => 'fal fa-briefcase-medical', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Painless Process', 'serviceInfo' => "We understand you want to focus on what you do best, that's why we take the pain out of web development by utilising a streamlined development process. We gather all the information we need from you during the initial stages of development and utilise this to make your website work for you.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

        </div>
        <div class="webdesign-page-section-1-right">

        </div>
    </div>
</div>
<div class="webdesign-page-section-2-wrapper">
    <div class="webdesign-page-section-2">
        <a class="webdesign-page-section-2-button" href="{{ route('contact') }}">Work With Us Today</a>
    </div>
</div>

<div class="webdesign-page-section-3-wrapper">
    <div class="webdesign-page-section-3">
        <div class="webdesign-page-section-3-left">
            <h2 class="webdesign-page-section-3-left-heading" id="offer">
                Complete Website for SME’s / Sole Traders from <span>€349</span>
            </h2>
            <p class="webdesign-page-section-3-left-info">
                    All businesses need a website that can attract customers and inform them about your products and services. A professional website is an essential part of any modern marketing or sales strategy. Rocket.Chip Web Solutions can work with you to create a sleek, feature-rich website that promotes your work and gives customers access to your portfolio.
            </p>
            <div class="webdesign-page-section-3-left-points">
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> 5 Pages of content: <br>
                <span>E.g. Home | Services | About | Porfolio | Contact</span>
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> SEO optimised pages
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Premium images
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Business email address for your website domain
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Google maps integration
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Secure website certficiate
                </p>
                <p class="webdesign-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> 1st year domain registration
                </p>
            </div>
            <div class="webdesign-page-section-3-left-more">
                <h4 class="webdesign-page-section-3-left-more-heading">Looking for something more complex?</h4>
                <p class="webdesign-page-section-3-left-more-info">Our team of experienced web developers can craft a wide variety of interactive feateures for your business - such as: Interactive Event Calendars, Appointment Booking Systems, Company News pages, Employee contact pages, and much more </p>
                <p class="webdesign-page-section-3-left-more-info"><a href="/contact">Contact us</a> for more information</p>
            </div>

        </div>
        <div class="webdesing-page-section-3-right">

        </div>
    </div>
</div>

<div class="webdesign-page-section-2-wrapper">
    <div class="webdesign-page-section-2">
        <a class="webdesign-page-section-2-button" href="{{ route('contact') }}">Get Started</a>
    </div>
</div>

@endsection

