@extends('master')

@section('title')
Rocket.Chip Web Solutions - Helping you launch your business online
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
            <p class="text-top">Innovative solutions for your business</p>
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
            <h1>What We Do</h1>
        </div>
        <h2 class="website-design-development-heading">
            Website Design &amp; Development
        </h2>
        <p class="website-design-development-info">
            Using the latest design and development tools, we work with our clients to realise their online business goals.
        </p>
        <div class="website-design-development-container">
            <div class="website-design-development-services">
                @component('partials.webfeature', ['icon' => 'fal fa-object-group', 'serviceTitle' => 'Custom Website Design & Development', 'serviceInfo' => "We work closely with our clients to design and develop a website from the ground up that captures their identity and their message. We don't use any templates or 'cookie cutter' designs.", 'serviceLink' => "#!"])

                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-shopping-cart", 'serviceTitle' => 'E-commerce Design & Development', 'serviceInfo' => "Making your products and/or services available online opens up a world of opportunities for your business. We help small businesses select the right strategy and appropriate platform to start selling online.", 'serviceLink' => "#!"])
                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-browser", 'serviceTitle' => 'Web Application Development', 'serviceInfo' => "Looking for something more complex? Talk to us about creating a bespoke web application for your business.", 'serviceLink' => "#!"])
                @endcomponent

                @component('partials.webfeature', ['icon' => "fal fa-redo-alt", 'serviceTitle' => 'Website Redesign', 'serviceInfo' => "Looking for something more complex? Talk to us about creating a bespoke web application for your business.", 'serviceLink' => "#!"])
                @endcomponent
            </div>
            <div class="website-design-development-feature">

            </div>
        </div>


        <div class="services-cta">
                <a href="/services" class="btn">Find out more</a>
        </div>
    </div>
</div>
<div class="svg-divider2" data-name="Layer 2">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 265.13"><title>divider-red-grey</title><polygon points="0.5 264.56 1920.5 264.56 1920.5 0.56 0.5 234.56 0.5 264.56" fill="#ff4212" stroke="#ff4212" stroke-miterlimit="10"/><polygon points="0.5 0.56 1920.5 0.56 1920.5 33.08 0.5 264.56 0.5 0.56" fill="#F8F8F8" stroke="##F8F8F8" stroke-miterlimit="10"/></svg>
</div>

<div class="choose-us-container">
    <div class="choose-us">
            <h1>We are different</h1>
    </div>
</div>

<div class="difference-container">
    <div class="difference">

        <div class="difference-heading">
            <h1>What makes us unique?</h1>
        </div>
        <div class="difference-sme" data-aos="fade-right">
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

        </div>

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
    const TypeWriter = function (txtElement, words, wait = 3000) {
        this.txtElement = txtElement;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;
    }

    // Type Method

    TypeWriter.prototype.type = function (){
        // current index of word
        const current = this.wordIndex % this.words.length;

        // Get full text of current word
        const fulltxt = this.words[current];

        // Check if deleting
        if(this.isDeleting) {
            // Remove a character
            this.txt = fulltxt.substring(0, this.txt.length -1);
        } else {
            // add a character
            this.txt = fulltxt.substring(0, this.txt.length + 1);
        }

        // Insert txt into element
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`


        //Initial Type Speed
        let typeSpeed = 100;
        if (this.isDeleting) {
            typeSpeed /=2;
        }

        // Check if word is complete
        if (!this.isDeleting && this.txt === fulltxt) {
            // make pause at end
            typeSpeed = this.wait;
            // set isDeleting to true
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before typing again
            typeSpeed = 500;
        }

        setTimeout(() => this.type(), typeSpeed)
    }

    // Init on DOM load

    document.addEventListener('DOMContentLoaded', init);

    // Init

    function init() {
        const txtElement = document.querySelector('.split-text');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');

        new TypeWriter(txtElement, words, wait);
    }

</script>

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
