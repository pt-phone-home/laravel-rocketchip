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
            <p>Rocket.Chip Web Solutions are an innovative web design &amp; development company based in Dublin, Éire. We pride ourselves on providing unique solutions for small and medium business in Ireland. We develop bespoke solutions to suit a wide variety of business needs. 
            </p>
        </div>

    </div>

</div>
<div class="svg-divider">
    <img src="/images/divider2.svg" alt="">
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

@endsection