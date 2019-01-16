@extends('master')

@section('title')
Rocket.Chip Web Solutions - Helping you launch your business online
@endsection

@section('content')

<div class="banner">
    <div class="banner-logo">
        <img src="/images/color_logo_transparent.png" alt="">
    </div>
    <div class="banner-text">
        Custom Web Design &amp; Development <span>|</span> Website Re-designs <span>|</span> Graphic Design
    </div>

    <div class="banner-cta">
        <a href="/contact" class="btn">Work with us today</a>
    </div>

</div>

<div class="about-container">

    <div class="about">

        <div class="about-title">
            <h1>About Us</h1>
        </div>
        <div class="about-content">
            <p>Rocket.Chip Web Solutions are an innovative web design &amp; development company based in Dublin, Éire. We pride ourselves on providing unique solutions for small and medium business in Ireland. We develop bespoke solutions to suit a wide variety of business needs, from small brochure websites to sophisticated web applications.
            </p>
        </div>

    </div>

</div>
<div class="svg-divider">
    <img src="/images/divider2.svg" alt="">
    <div class="svg-divider-title">
            <img src="/images/rocket-logo-red.png" alt="">
    </div>
</div>

<div class="technologies-container">

    <div class="technologies">
        <div class="technologies-each">
            <i class="fab fa-html5"></i>
            <h5>HTML 5</h5>
        </div>
        <div class="technologies-each">
            <i class="fab fa-css3-alt"></i>
            <h5>CSS 3</h5>
        </div>
        <div class="technologies-each">
            <i class="fab fa-laravel"></i>
            <h5>Laravel</h5>
        </div>
        <div class="technologies-each">
            <i class="fab fa-php"></i>
            <h5>PHP</h5>
        </div>
        <div class="technologies-each">
            <i class="fab fa-js"></i>
            <h5>JavaScript</h5>
        </div>
        {{-- <div class="technologies-each">
            <i class="fab fa-adobe"></i>
            <h5>Adobe Creative Suite</h5>
        </div> --}}
        

    </div>

   
</div>
<div class="services-container">
    <div class="services">
        <div class="services-heading">
            <h1>What We Do</h1>
        </div>
        <div class="custom-design">
                <i class="fas fa-object-group"></i>
                <h2>Custom Design &amp; Development</h2>
            Custom Design / Responsive Design/ SEO
        </div>
        <div class="management">
                <i class="fas fa-cogs"></i>
                <h2>Hosting &amp; Additional Services</h2>
                Email/Hosting/Maintanence
        </div>
        <div class="graphic-design">
                <i class="far fa-images"></i>
                <h2>Graphic Design</h2>
                Logo Design / Graphic Design
        </div>
        <div class="services-cta">
                <a href="#!" class="btn">Find out more</a>
        </div>
    </div>
</div>
<div class="svg-divider2">
    SVG DIVIDER HERE
</div>
<div class="choose-us-container">
    <div class="choose-us">
            We are different!
    </div>
</div>

<div class="difference-container">
    <div class="difference">
        SME Specialists / Personal Service / Social Responsibility
    </div>
</div>

@endsection