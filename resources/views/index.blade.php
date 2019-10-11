@extends('master')
@section('pageDescription')
<meta name="description" content="Welcome to Rocket.Chip Web Solutions. Dublin-based web design and development company that specialise in website development, e-commerce development and search engine optimisation services for SME's and sole traders in Dublin, Ireland and Northern Ireland.">
@endsection
@section('title')
Innovative Online Solutions | Rocket.Chip Web Solutions
@endsection

@section('content')
{{-- <div class="new-banner">
<div class="new-banner-left">
    <h2 class="new-banner-left-title">
        Give your business a
    </h2>
    <p class="new-banner-left-text">

    </p>
</div>
<div>

</div>
</div> --}}
<div class="new-banner">

    {{-- <div class="new-banner-left">

        <div class="new-banner-left-text">
            <p>
                Everything you need to get your business online
            </p>
            <br>
            <p>Professional &amp; Affordable</p>
        </div>
    </div> --}}
    <div class="new-banner-right">
        <div class="new-banner-text-top">
            <p class="text-top">Innovative online solutions for your business</p>
        </div>
        <div class="new-banner-text">
                <p class="slide">Custom Web Design</p>
                <p class="slide">E-commerce Development</p>
                <p class="slide">Software Development</p>
                <p class="slide">Website Re-designs</p>
                <p class="slide">Search Engine Optimisation</p>
                <p class="slide">Graphic Design</p>
            {{-- <div class="split-text" id="split-text" data-wait="3000" data-words='["Software Development", "E-commerce Development", "Custom Web Design", "Website Re-designs", "Graphic Design", "Search Engine Optimisation"]'>
            </div> --}}
        </div>
        <div class="new-banner-cta">
            <a href="/contact" class="btn new-banner-btn">Work with us today</a>
         </div>
    </div>


</div>
{{-- <div class="banner">
    <div class="banner-logo">
        <img src="/images/color_logo_transparent.png" alt="">
    </div>
    {{-- <div class="banner-text">
        Software Development <span>|</span> E-commerce <span>|</span> Custom Web Design &amp; Development <span>|</span> Website Re-designs <span>|</span> Graphic Design
    </div> --}}
    {{-- <div id="messenger"></div> --}}

    {{--
    <div class="txt-type" id="messenger" data-wait='3000' data-words='["Software Development", "E-commerce Development", "Custom Web Design", "Website Re-designs", "Graphic Design", "Search Engine Optimisation"]'> --}}

     {{-- </div>

    <div class="banner-cta">
        <a href="/contact" class="btn">Work with us today</a>
    </div>

</div> --}}


<div class="about-container">

    <div class="about">

        <div class="about-title">
            <h1 data-aos="fade-down">Website, E-commerce &amp; SEO solutions for small business</h1>
            <h2 data-aos="fade-left" data-aos-delay="300">Everything your business needs to succeed online</h2>
        </div>
        {{-- <div class="about-content" data-aos="fade-right">
            <p>Rocket.Chip Web Solutions are an innovative web design &amp; development company based in Dublin, Ireland. We pride ourselves on providing unique solutions for small and medium business. We develop bespoke solutions to suit a wide variety of business needs, from small brochure websites to sophisticated web applications.
            </p>
        </div> --}}

    </div>

</div>
<div class="svg-divider">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 221.28"><title>divider-green-grey</title><polygon points="0.5 219.5 0.5 0.58 1433.35 219.5 0.5 219.5" fill="#f8f8f8"/><path d="M1,275.16,1426.77,493H1V275.16M0,274V494H1439.94L0,274Z" transform="translate(0 -274)" fill="#f8f8f8"/><polygon points="6.64 1.77 1439.5 1.77 1439.5 220.69 6.64 1.77" fill="#00b279"/><path d="M13.23,276.27H1439V494.11L13.23,276.27m-13.17-1L1440,495.28v-220Z" transform="translate(0 -274)" fill="#00b279"/></svg>
    {{-- <div class="svg-divider-title">
            <img src="/images/rocket-logo-red.png" alt="">
    </div> --}}
</div>

<div class="services-container">
    <div class="services">
        <div class="services-heading">
            <h2>What We Do</h2>
        </div>
        <h2 class="website-design-development-heading">
            Website Design &amp; Development
        </h2>
        <p class="website-design-development-info">
            Using the latest design and development tools, we work with our clients to realise their online business goals.
        </p>
        <div class="website-design-development-container">
            <div class="website-design-development-services">
                @component('partials.webfeature', ['icon' => 'fal fa-object-group', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature', 'serviceTitle' => 'Website Design & Development', 'serviceInfo' => "We work closely with our clients to design and develop a website from the ground up that captures their identity and their message. We don't use any templates or 'cookie cutter' designs.", 'serviceLink' => "/web-design-development", 'serviceLinkClass' => 'service-link'])

                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-shopping-cart", 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature', 'serviceTitle' => 'E-commerce Design & Development', 'serviceInfo' => "Making your products and/or services available online opens up a world of opportunities for your business. We help small businesses select the right strategy and appropriate platform to start selling online.", 'serviceLink' => "/ecommerce-design-development", 'serviceLinkClass' => 'service-link'])
                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-browser", 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature', 'serviceTitle' => 'Web Application Development', 'serviceInfo' => "Looking for something more complex? Talk to us about creating a bespoke web application for your business.", 'serviceLink' => "/web-application-development", 'serviceLinkClass' => 'service-link'])
                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-redo-alt", 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature', 'serviceTitle' => 'Website Redesign', 'serviceInfo' => "Have an old website that needs some attention? We can update your website so that it is more in line with modern design trends and has the functionality that customers have come to expect from a modern website.", 'serviceLink' => "/website-redesign", 'serviceLinkClass' => 'service-link'])
                @endcomponent
            </div>
            <div class="website-design-development-feature">
                @component('partials.designCallout', ['designCalloutImage' => '/images/website-design-development-dublin.jpg', 'designCalloutImageAlt' => 'Website Design and Development Dublin', 'designCalloutImageTitle' => 'Website Design and Development Services Dublin', 'designCalloutParagraphOne' => "Customers research, compare and make purchase decisions based on their online searches. Having a website provides them with information about your business, while offering the opportunity to grow your customer base.", 'designCalloutParagraphTwo' => " Your website is your digital business card, at any given time your next potential customer could be looking for you online. If you have no online presence, then you risk losing genuine leads."])

                @endcomponent
            </div>
        </div>
        <h2 class="essential-services-heading">
            Essential Web Services
        </h2>
        <p class="essential-services-info">
            We provide a range of support services for small businesses, helping you to maintain and enhance your online presence.
        </p>
        <div class="essential-services-container">
            <div class="essential-services">
                @component('partials.webfeature', ['icon' => 'fal fa-search-plus', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature', 'serviceTitle' => 'Search Engine Optimisation', 'serviceInfo' => "Search Engine Optimisation (SEO) is the process of increasing the quantity and quality of traffic to your website. We can work with you to ensure your website ranks highly in Google searches.", 'serviceLink' => "/search-engine-optimisation", 'serviceLinkClass' => 'service-link-alt'])
                @endcomponent

                @component('partials.webfeature', ['icon' => 'fal fa-cogs', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature', 'serviceTitle' => 'Website Hosting & Maintenance', 'serviceInfo' => "All of our websites and web applications are hosted on the world class Digital Ocean cloud hosting platform. We also offer website maintenance packages, so you can leave the management of your website to us.", 'serviceLink' => "/website-hosting-maintenance", 'serviceLinkClass' => 'service-link-alt'])
                @endcomponent

                @component('partials.webfeature', ['icon' => 'fal fa-swatchbook', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature', 'serviceTitle' => 'Graphic Design', 'serviceInfo' => "In addition to our web design and development services, we can also design a range of print media such as flyers, business cards, brochures and menus.", 'serviceLink' => "/graphic-design", 'serviceLinkClass' => 'service-link-alt'])
                @endcomponent

                @component('partials.webfeature', ['icon' => 'fal fa-pencil-paintbrush', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature', 'serviceTitle' => 'Logo Design', 'serviceInfo' => "Your business logo is an important part of your overall brand image. We provide a range of options for logo creation to suit all budgets.", 'serviceLink' => "/logo-design", 'serviceLinkClass' => 'service-link-alt'])
                @endcomponent
            </div>
            <div class="website-design-development-feature">
                @component('partials.designCallout', ['designCalloutImage' => '/images/seo-and-support-services-dublin.jpg', 'designCalloutImageAlt' => 'SEO and Support Services Dublin',
                'designCalloutImageTitle' => 'Search Engine Optimisation and Support Services Dublin',
                'designCalloutParagraphOne' => 'Having a website means you are always open for business. Customers can find you, find out more about you, buy from you, or connect from you.', 'designCalloutParagraphTwo' => "Small businesses may not have the time to engage with their customers frequently through social media, so maintaining a website with engaging content can be extremely beneficial."])
                @endcomponent
            </div>
        </div>

        <div class="services-cta">
                <a href="/contact" class="btn">Work with us</a>
        </div>
    </div>
</div>
<div class="svg-divider2" data-name="Layer 2">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 265.13"><title>divider-red-grey</title><polygon points="0.5 264.56 1920.5 264.56 1920.5 0.56 0.5 234.56 0.5 264.56" fill="#ff4212" stroke="#ff4212" stroke-miterlimit="10"/><polygon points="0.5 0.56 1920.5 0.56 1920.5 33.08 0.5 264.56 0.5 0.56" fill="#F8F8F8" stroke="##F8F8F8" stroke-miterlimit="10"/></svg>
</div>

<div class="choose-us-container">
    <div class="choose-us">
        <h2>We are different</h2>
    </div>
</div>

<div class="difference-container">
    <div class="difference">

        <div class="difference-heading">
            <h2>What makes us unique?</h2>
        </div>
        <div class="difference-container">
            @component('partials.webfeature', ['icon' => 'fal fa-user-tie', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature-small', 'serviceTitle' => 'SME Specialists', 'serviceInfo' => "As a small business, we understand the needs of other small businesses. We specialise in creating effective, agile websites and web applications for SME's, all at a price that works for you.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fal fa-hands', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature-small', 'serviceTitle' => 'Personal Service', 'serviceInfo' => "We believe in developing lasting relationships through face-to-face meetings and consultation. We work with you through the entire <a href='/about' class='service-link-alt'> design and development process </a>.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fal fa-hand-holding-heart', 'iconClass' => 'webfeature-icon-alt', 'featureClass' => 'webfeature-small', 'serviceTitle' => 'Give Something Back', 'serviceInfo' => "We are a socially responsible company, giving a percentage of our profits to Dublin-based charities.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent
        </div>
        {{-- <div class="difference-sme" data-aos="fade-right">
            <i class="fas fa-user-tie"></i>
            <h2>SME Specialists</h2>
            <p>As a small business, we understand the needs of other small businesses. We specialise in creating effective, agile web applications for SME's.</p>

        </div>
        <div class="difference-personal" data-aos="fade-up">
            <i class="fas fa-hands"></i>
            <h2>Personal Service</h2>
            <p>We believe in developing lasting relationships through face-to-face meetings and consultation.</p>

        </div>
        <div class="difference-charity" data-aos="fade-left">
            <i class="fas fa-hand-holding-heart"></i>
            <h2>Give Something Back</h2>
            <p>We are a socially responsible company, giving a percentage of our profits to Dublin-based charities.</p>

        </div> --}}

        <div class="difference-cta">
            <a href="/about" class="btn">Find out more</a>
        </div>
    </div>
</div>
<div class="review-section">
    <div class="review-section-container">
        <div class="review-intro">
            <h2>What our customers say</h2>
        </div>
        <div class="reviews-grid" id="reviews-grid">
            {{-- @include('partials.review') --}}
            @component('partials.review')
                @slot('image')
                /images/logoifn.jpg
                @endslot
                @slot('content')
                A big thank you to Rocket.Chip Web Solutions on doing an AMAZING job on our new website. Very Professional and easy to deal with staff. Really happy with the results.
                @endslot
            @endcomponent
            @component('partials.review')
                @slot('image')
                /images/larryslogo_trans.png
                @endslot
                @slot('content')

                    Completed our Website for Larry’s Diy and we are delighted. Highly recommend using Rocket.Chip Web Solutions and thank you so much for all your help, advice and hard work. -Larry’s DIY team.

                @endslot
            @endcomponent
            @component('partials.review')
                @slot('image')
                /images/cityfarm.png
                @endslot
                @slot('content')

                Thank you for Dublin City Farm amazing website! We are absolutely delighted with the website! 5* service.

                @endslot
            @endcomponent
            <div class="review-grid-left" id="reviews-left">
                <i class="fal fa-chevron-circle-left review-grid-left-icon"></i>
            </div>
            <div class="review-grid-right" id="reviews-right">
                <i class="fal fa-chevron-circle-right review-grid-right-icon"></i>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    const leftArrow = document.getElementById('reviews-left')
    const rightArrow = document.getElementById('reviews-right');
    const reviewsContainer = document.getElementById('reviews-grid');
    let currentXPosition = reviewsContainer.getAttribute('scrollLeft')
    const scrollAmount = document.querySelector('.review').style.width;

    leftArrow.addEventListener('click', shiftLeft);
    rightArrow.addEventListener('click', shiftRight);
    // reviewsContainer.addEventListener('scroll', showPosition);

    function showPosition() {
        console.log(reviewsContainer.scrollLeft);
    }


    function shiftLeft() {
        // console.log(scrollAmount)
        reviewsContainer.scrollLeft -= 250;


    }
    function shiftRight() {
        reviewsContainer.scrollLeft += 250;

    }
</script>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 3000);
}
</script>
@endsection
