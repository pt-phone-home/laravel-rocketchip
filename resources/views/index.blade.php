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
            <p>Rocket.Chip Web Solutions are an innovative web design &amp; development company based in Dublin, Ireland. We pride ourselves on providing unique solutions for small and medium business. We develop bespoke solutions to suit a wide variety of business needs, from small brochure websites to sophisticated web applications.
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
                <p>Web sites and web applications built from the ground up to match your specifications</p>
        </div>
        <div class="management">
                <i class="fas fa-cogs"></i>
                <h2>Hosting &amp; Additional Services</h2>
                <p>Website hosting, email addresses and ongoing support packages available </p>
        </div>
        <div class="graphic-design">
                <i class="far fa-images"></i>
                <h2>Graphic Design</h2>
                <p>Custom logo design service. PDF flyers and brochures created to order</p> 
        </div>
        <div class="services-cta">
                <a href="#!" class="btn">Find out more</a>
        </div>
    </div>
</div>
<div class="svg-divider2">
    <img src="/images/divider-red-grey.svg" alt="">
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
        <div class="difference-sme">
            <i class="fas fa-user-tie"></i>
            <h2>SME Specialists</h2>
            <p>As a small business, we understand the needs of other small businesses. We specialise in creating effective, agile web applications for SME's.</p>

        </div>
        <div class="difference-personal">
            <i class="fas fa-hands"></i>
            <h2>Personal Service</h2>
            <p>We believe in developing lasting relationships through face-to-face meetings and consultation.</p>

        </div>
        <div class="difference-charity">
            <i class="fas fa-hand-holding-heart"></i>
            <h2>Give Something Back</h2>
            <p>We are a socially responsible company, giving a percentage of our profits to Dublin-based charities.</p>

        </div>
    </div>
</div>

@endsection