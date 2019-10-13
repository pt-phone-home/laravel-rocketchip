@extends('servicesmaster')
@section('servicePageTitle')
    E-Commerce Design & Development | Rocket.Chip Web Solutions
@endsection
@section('pageDescription')
<meta name="description" content="E-commerce design and development services for SME's and sole traders in Dublin, Ireland and Northern Ireland. Professional and affordable e-commerce solutions from Rocket.Chip Web Solutions.">
@endsection
@section('serviceTitle')
    E-Commerce Design & Development
@endsection

@section('serviceContentHeader')

@endsection

@section('serviceHeading', 'E-Commerce Design & Development')

@section('serviceSubHeading', 'Sell your products and services online')

@section('serviceInfo', 'Work with us to build an online store for your business and start making money online.')

@section('serviceContent')
<div class="ecommerce-page-section-1-wrapper">
    <div class="ecommerce-page-section-1">
        <div class="ecommerce-page-section-1-left">
            <h2 class="ecommerce-page-section-1-left-heading">Flexible E-Commerce Solutions to Suit Your Business</h2>
            <p class="ecommerce-page-section-1-left-info">Rocket.Chip Web Solutions offer a range of e-commerce options to suit businesses of all sizes. We can provide simple one-click integrations for businesses that sell one or two products/services, up to fully customised e-commerce stores that offer hundreds of products. </p>


            @component('partials.webfeature', ['icon' => 'fab fa-stripe-s', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid-dark', 'serviceTitle' => 'One-Click Stripe Integration', 'serviceInfo' => "If you are just getting started with your online business, or you only sell one or two products/services online. We can integrate a simple one-click sale option on your store. This option provides businesses with a fast, simple solution to start selling online.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fal fa-bags-shopping', 'iconClass' => 'webfeature-icon',

            'featureClass' => 'webfeature-mid-dark',

            'serviceTitle' => 'Fully Integrated Online Store',

            'serviceInfo' => "Our fully integrated e-commerce solutions allow your business to sell any number of products online. They are powered by world-class technology which provides the flexibiliy and control you need to manage and maintain your online store. Our Search Engine Optimisation (SEO) techniques also ensure that your products rank highly in a Google Search. We provide a number of options for integrated e-commerce solutions, such as Shopify and WooCommerce.",

            'serviceLink' => "",

            'serviceLinkClass' => ''])
            @endcomponent

            <div>
                <h3 class="ecommerce-page-section-1-left-heading">Talk to us today to start an online store from as little as <span>€599</span></h3>
            </div>

        </div>

        <div class="ecommerce-page-section-1-right">

        </div>
    </div>
</div>
<div class="webdesign-page-section-2-wrapper">
    <div class="webdesign-page-section-2">
        <a class="webdesign-page-section-2-button" href="{{ route('contact') }}">Work With Us Today</a>
    </div>
</div>
<div class="ecommerce-page-section-3-wrapper">
    <div class="ecommerce-page-section-3">
        <div class="ecommerce-page-section-3-left">
            <h2 class="ecommerce-page-section-3-left-heading">
                E-commerce Design that Works for Your Business
            </h2>
            <p class="ecommerce-page-section-3-left-info">
                Our team of experienced e-commerce developers have detailed knowledge of the range of tools and options that are available to SME's and sole traders. We will work with you to select and build the e-commerce approach that is right for you. Your online store will include:
            </p>
            <div class="ecommerce-page-section-3-left-points">
                <p class="ecommerce-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Branding and marketing integration
                </p>
                <p class="ecommerce-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Product management options
                </p>
                <p class="ecommerce-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> A number of payment gateway options
                </p>
                <p class="ecommerce-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> SEO optimised product listings
                </p>
                <p class="ecommerce-page-section-3-left-points-point"><i class="fal fa-check-circle"></i> Optional technical support
                </p>
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




