@extends('master')

@section('title')

About Us | Rocket.Chip Web Solutions

@endsection

@section('content')

<div class="about-banner">
    <h1>About Us</h1>
</div>

<div class="about-us-container">
    <div class="about-us">

        <div class="about-us-who" data-aos="fade-right">
            <h2>Who we are</h2>
            <p>We are a Dublin-based Web Design and Development Company with experience in a wide-rage of digital technologies and solutions. </p>
            <p>Our fully qualified staff are passionate about our work and are committed to providing you with quality &amp; personal service  </p>

        </div>

        <div class="about-us-vision" data-aos="fade-up">
            <h2>Our Vision</h2>
            <p>We believe that businesses, big and small, should have an online presence.</p>
            <p>We specialise in working with SME's to develop this internet presence. Our team can create a brochure website or a more complex web application, depending on your needs.</p>
        </div>

        <div class="about-us-what" data-aos="fade-left">
            <h2>our services</h2>
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
            </ul>

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
                                <img src="/images/om_meats.png" alt="" class="cityfarmlogo-small" style="z-index: 100;">
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
