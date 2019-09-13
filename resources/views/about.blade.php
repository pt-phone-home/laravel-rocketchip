@extends('master')

@section('title')

About Us | Rocket.Chip Web Solutions

@endsection

@section('content')

<div class="about-banner">
    <h1>About Us</h1>
</div>
<div class="about-us-header-container">
    <div class="about-us-header">
        <p>Rocket.Chip Web Solutions are an innovative web design &amp; development company based in Dublin, Ireland. We pride ourselves on providing unique solutions for small and medium business. We develop bespoke solutions to suit a wide variety of business needs, from small brochure websites to sophisticated web applications.
        </p>
    </div>
</div>
<div class="svg-divider">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 221.28"><title>divider-green-grey</title><polygon points="0.5 219.5 0.5 0.58 1433.35 219.5 0.5 219.5" fill="#f8f8f8"/><path d="M1,275.16,1426.77,493H1V275.16M0,274V494H1439.94L0,274Z" transform="translate(0 -274)" fill="#f8f8f8"/><polygon points="6.64 1.77 1439.5 1.77 1439.5 220.69 6.64 1.77" fill="#00b279"/><path d="M13.23,276.27H1439V494.11L13.23,276.27m-13.17-1L1440,495.28v-220Z" transform="translate(0 -274)" fill="#00b279"/></svg>
{{-- <div class="svg-divider-title">
        <img src="/images/rocket-logo-red.png" alt="">
</div> --}}
</div>

<div class="about-us-container">
    <div class="about-us">
        <h2 class="about-us-heading">More about us</h2>
        {{-- <div class="about-us-who" data-aos="fade-right">
            <h2>Who we are</h2>
            <p>We are a Dublin-based Web Design and Development Company with experience in a wide-rage of digital technologies and solutions. </p>
            <p>Our fully qualified staff are passionate about our work and are committed to providing you with quality &amp; personal service  </p>

        </div> --}}
        @component('partials.aboutfeature', ['icon' => 'fal fa-address-card', 'iconClass' => 'aboutfeature-icon', 'aboutTitle' => 'Who we are', 'aboutInfo' => "We are a Dublin-based Web Design and Development Company with experience in a wide-rage of digital technologies and solutions. <br> Our fully qualified staff are passionate about our work and are committed to providing you with quality &amp; personal service ."])
        @endcomponent

        @component('partials.aboutfeature', ['icon' => 'fal fa-eye', 'iconClass' => 'aboutfeature-icon', 'aboutTitle' => 'Our Vision', 'aboutInfo' => "We believe that businesses, big and small, should have an online presence. <br> We specialise in working with SME's to develop this internet presence. Our team can create a brochure website or a more complex web application, depending on your needs. "])
        @endcomponent

        {{-- <div class="about-us-vision" data-aos="fade-up">
            <h2>Our Vision</h2>
            <p>We believe that businesses, big and small, should have an online presence.</p>
            <p>We specialise in working with SME's to develop this internet presence. Our team can create a brochure website or a more complex web application, depending on your needs.</p>
        </div> --}}

        <div class="about-us-what" data-aos="fade-left">
            @component('partials.ourpromise')

            @endcomponent
            {{-- <h2>our services</h2>
            <p>We offer a wide range of services including:</p>

            <ul>
                <li><i class="fas fa-arrow-circle-right"></i>Web Design &amp; Development</li>
                <li><i class="fas fa-arrow-circle-right"></i>E-commerce Development</li>
                <li><i class="fas fa-arrow-circle-right"></i>Search Engine Optimisation (SEO)</li>
                <li><i class="fas fa-arrow-circle-right"></i>Website Redesigns</li>
                <li><i class="fas fa-arrow-circle-right"></i>Logo Design</li>
                <li><i class="fas fa-arrow-circle-right"></i>Graphic Design</li>
                <li><i class="fas fa-arrow-circle-right"></i>Website Hosting</li>
                <li><i class="fas fa-arrow-circle-right"></i>Business Email </li>
            </ul> --}}

        </div>

        <div class="about-us-cta">
            <a href="/contact" class="btn">Work with us today</a>
        </div>
    </div>
</div>

{{-- <div class="samples-container">
    <div class="samples">
        <div class="samples-heading">
            <h2>Samples</h2>
            <p>We work with a variety of clients from a wide range of sectors. Some of our recent clients are listen here.</p>
        </div>
    </div>
</div> --}}

<div class="clients-container">
    <div class="clients">
        <div class="clients-heading">
            <h2>Projects</h2>
            <p>We work with a variety of clients from a wide range of sectors. Some of our recent clients are listed here.</p>
        </div>
        <div class="clients-grid">
            <div class="city-farm">


                <div class="city-farm-pop">
                    <div>
                        <img src="/images/cityfarm.png" alt="" class="cityfarmlogo-small">
                    </div>
                    <div class="project-btn-container">
                        <a href="https://www.stannescityfarm.ie" class="project-btn" target="_blank">Visit Site</a>
                    </div>
                </div>

            </div>

            <div class="om_meats">
                    <div class="om_meats-pop">
                            <div>
                                <img src="/images/OM_meats.png" alt="" class="cityfarmlogo-small" style="z-index: 100;">
                            </div>
                            <div class="project-btn-container">
                                <a href="https://www.omahonymeats.ie" class="project-btn" target="_blank">Visit Site</a>
                            </div>
                        </div>
            </div>
        </div>

    </div>
</div>


@endsection
