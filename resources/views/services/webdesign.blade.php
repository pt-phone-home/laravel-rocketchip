@extends('servicesmaster')
@section('servicePageTitle')
    Website Design & Development | Rocket.Chip Websolutions
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
            <h1 class="webdesign-page-section-1-left-heading">Client Driven Website Design &amp; Development</h1>
            <p class="webdesign-page-section-1-left-info">Your website is an important part of your business. It is an essential element in attracting new customers and letting existing customers know what you offer. We understand this and, through our design process, we help to ensure your website acts as an effective marketing and communications tool.</p>


            @component('partials.webfeature', ['icon' => 'fal fa-paint-brush-alt', 'iconClass' => 'webfeature-icon', 'serviceTitle' => 'Proven Design Principles', 'serviceInfo' => "All our websites are created using proven design principles. Your website will be fast-loading and mobile ready. The interface will be clear and consistent meaning your users will easily find the information they need.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent
            @component('partials.webfeature', ['icon' => 'fal fa-search-plus', 'iconClass' => 'webfeature-icon', 'serviceTitle' => 'Google Search Engine Optimised', 'serviceInfo' => "Search Engine Optimisation (SEO) is the process of increasing the quality and quantity of traffic to your website. Our websites are built using SEO techniques, this means that your website will rank highly in Google searches, without the need for expensive Google Ads.", 'serviceLink' => "/search_engine_optimisation", 'serviceLinkClass' => 'service-link'])
            @endcomponent
            @component('partials.webfeature', ['icon' => 'fal fa-mobile', 'iconClass' => 'webfeature-icon', 'serviceTitle' => 'Responsive Design', 'serviceInfo' => "Responsive design is an approach to web design where the website responds or resizes itself depending on the size of the device it is being viewed on. This means that a website will adjust its overall size, the size of certain components, and/or the layout of components, when it is viewed on a deskop, laptop or mobile device. With the growth of mobile devices, responsive design is essential for any business website, ensuring your content is accessible regardless of where your customer is.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

        </div>
        <div class="webdesign-page-section-1-right">

        </div>
    </div>
</div>
@endsection

