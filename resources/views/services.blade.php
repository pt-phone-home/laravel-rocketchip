@extends('master')

@section('title')

Services | Rocket.Chip Web Solutions

@endsection

@section('content')
    <div class="services-banner">
        <h1>Our Services</h1>
    </div>

    <div class="services-header">
        <h2><span>R</span>ocket.Chip Web Solutions</h2>
        <p>All the tools you need to get your business online!</p>
    </div>
    <div class="svg-divider-services">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 221.28"><title>divider-green-grey</title><polygon points="0.5 219.5 0.5 0.58 1433.35 219.5 0.5 219.5" fill="#f8f8f8"/><path d="M1,275.16,1426.77,493H1V275.16M0,274V494H1439.94L0,274Z" transform="translate(0 -274)" fill="#f8f8f8"/><polygon points="6.64 1.77 1439.5 1.77 1439.5 220.69 6.64 1.77" fill="#00b279"/><path d="M13.23,276.27H1439V494.11L13.23,276.27m-13.17-1L1440,495.28v-220Z" transform="translate(0 -274)" fill="#00b279"/></svg>
    </div>

    <div class="services-summary-container">
        <div class="services-summary">
            <div class="services-summary-custom">
                <i class="far fa-object-group"></i>
                <h2>Custom Web Design</h2>
            </div>
            <div class="services-summary-responsive">
                <i class="fas fa-mobile-alt"></i>
                <h2>Responsive Design</h2>
            </div>

            <div class="services-summary-redesign">
                <i class="fas fa-laptop"></i>
                <h2>Website Redesign</h2>
            </div>
            <div class="services-summary-maintenance">
                <i class="fas fa-users-cog"></i>
                <h2>Website Maintenance</h2>
            </div>
            <div class="services-summary-seo">
                <i class="fas fa-search"></i>
                <h2>Search Engine Optimisation</h2>
            </div>
            <div class="services-summary-graphic">
                <i class="fas fa-pen-fancy"></i>
                <h2>Graphic Design</h2>
            </div>

        </div>
    </div>
    <div class="services-divider1">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 265.13"><title>divider-red-lightgrey</title><polygon points="0.5 264.56 1920.5 264.56 1920.5 0.56 0.5 234.56 0.5 264.56" fill="#ff4212" stroke="#ff4212" stroke-miterlimit="10"/><polygon points="0.5 0.56 1920.5 0.56 1920.5 33.08 0.5 264.56 0.5 0.56" fill="#f8f8f8" stroke="#f8f8f8" stroke-miterlimit="10"/></svg>
    </div>
    <div class="design-process-header-container">
            <div class="design-process-header">
                <h1>Our Design Process</h1>
                <p>Your website is an important part of your business. It is an essential element in attracting new customers and letting existing customers know what you offer. We understand this and through our design process, we help to ensure your website acts as an effective marketing and communications tool.</p>
            </div>
    </div>

    <div class="design-process-container">
        <div class="design-process">
            <div class="design-step design-step-1">
                <div class="design-step-img">
                    <img src="/images/sketch.jpg" alt="">
                    <h3 class="design-step-img-heading">Initial Meeting &amp; Prototype</h3>
                </div>
                
                <div class="design-step-info">

                    <h3 class="design-step-info-heading"> Getting Started</h3>
                    
                    <p class="design-step-info-text">Following an initial meeting, a member of our team will begin working on a prototype of your website. This wireframe design will allow you to visualise the overall layout of your website, its components and the functionality you require. This stage of the process is important in ensuring you are happy with the overall concept of your website, before the more intricate design elements are put in place. </p>


                </div>
            </div>
            <div class="design-step design-step-2">
                    <div class="design-step-img">
                            <img src="/images/firstdraft.jpg" alt="">
                            <h3 class="design-step-img-heading">First Draft &amp; Consultation</h3>
                    </div>
                        
                    <div class="design-step-info">
    
                        <h3 class="design-step-info-heading"> Refining Design</h3>
                        
                        <p class="design-step-info-text">Once adjustments have been made based on your review of the prototype design, our team will begin work on the first draft of your website, including all design elements, images, and any interactive features. You will then be given the opportunity to review this draft and make suggestions for adjustments or alterations.</p>
    
    
                    </div>
            </div>
            <div class="design-step design-step-3">
                    <div class="design-step-img">
                            <img src="/images/website-complete.jpg" alt="">
                            <h3 class="design-step-img-heading">Website Completion  &amp; Review</h3>
                    </div>
                        
                    <div class="design-step-info">
    
                        <h3 class="design-step-info-heading"> Final Touches</h3>
                        
                        <p class="design-step-info-text">Finally, based on your feedback and consultation, we will produce the complete version of the website. At this stage of the process, final checks can be made that all required features are in place and your objectives have been met.</p>
    
    
                    </div>
            </div>
        </div>
    </div>

@endsection