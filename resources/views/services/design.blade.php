@extends('servicesmaster')
@section('servicePageTitle')
    Graphic Design Services | Rocket.Chip Web Solutions
@endsection
@section('pageDescription')
<meta name="description" content="Professional and affordable graphic design services for SME's and sole traders in Dublin, Ireland and Northern Ireland. Rocket.Chip Web Solutions - catering for all your graphic design needs.">
@endsection
@section('serviceTitle')
    Graphic Design Services
@endsection

@section('serviceContentHeader')

@endsection

@section('serviceHeading', 'Graphic Design Services')

@section('serviceSubHeading', 'Striking Design in Print and Online')

@section('serviceInfo', 'All the graphic design services you need to promote your business')

@section('serviceContent')
<div class="design-page-section-1-wrapper">
    <div class="design-page-section-1">
        <div class="design-page-section-1-left">
            <h2 class="design-page-section-1-left-heading">Professional Graphic Design Services</h2>
            <p class="design-page-section-1-left-info">Our team of experienced designers understand that your website is only part of your overall marketing strategy. Using the latest desktop publishing tools we can work with your business to create print / online materials for a variety of purposes and occasions.</p>

            <h2 class="design-page-section-1-left-heading">Design Solutions include:</h2>
            <p class="design-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Promotional Flyers & Posters</strong> - advertising special offers or upcoming events</p>
            <p class="design-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Infographics</strong> - providing your customers with detailed promotional information on your products or services and their benefits</p>
            <p class="design-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Business Cards & Leaflets</strong> - professional designs to markget your businiess</p>
            <p class="design-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Menus</strong> - clean and professional designs</p>
            <p class="design-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Brochures</strong> - high quality brochures to give potential customers an overview of what your business does best</p>
        </div>
        <div class="design-page-section-1-right">
            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions island ferries.jpg" alt="graphic design services dublin rocket chip web solutions island ferries" title="graphic design services dublin rocket chip web solutions island ferries">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions flyer.jpg" alt="graphic design services dublin rocket chip web solutions flyer" title="graphic design services dublin rocket chip web solutions flyer">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions infographic.jpg" alt="graphic design services dublin rocket chip web solutions infographic" title="graphic design services dublin rocket chip web solutions infographic">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions poster.jpg" alt="graphic design services dublin rocket chip web solutions poster" title="graphic design services dublin rocket chip web solutions poster">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions business card.jpg" alt="graphic design services dublin rocket chip web solutions business card" title="graphic design services dublin rocket chip web solutions business card">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions instagram.jpg" alt="graphic design services dublin rocket chip web solutions instagram" title="graphic design services dublin rocket chip web solutions instagram">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions trifold.jpg" alt="graphic design services dublin rocket chip web solutions trifold" title="graphic design services dublin rocket chip web solutions trifold">

            <img class="slide design-page-section-1-right-image" src="/images/graphic design/graphic design services dublin rocket chip web solutions menu.jpg" alt="graphic design services dublin rocket chip web solutions menu" title="graphic design services dublin rocket chip web solutions menu">

        </div>
    </div>
</div>
<div class="design-page-section-2-wrapper">
    <div class="design-page-section-2">
        <a class="design-page-section-2-button" href="{{ route('contact') }}">Work With Us Today</a>
    </div>
</div>
<div class="hosting-page-section-3-wrapper">
    <div class="hosting-page-section-3">
        <div class="hosting-page-section-3-left">

        </div>
        <div class="hosting-page-section-3-right">
            <h2 class="hosting-page-section-3-right-heading">Graphic Design Matters</h2>
            <p class="hosting-page-section-3-right-info">Whether you are a sole trader looking for local business or an SME looking to expand your reach, graphic design is an essential form of communication between you and your (potential) customers</p>
            <p class="hosting-page-section-3-right-info">Good graphic design helps you to stand out from the competition, makes customers take notice and helps your message to be seen in what can sometimes be a noisy marketplace.</p>

            <h2 class="hosting-page-section-3-right-heading">Our Graphic Design Philosophy</h2>
            <p class="hosting-page-section-3-right-info">Our team work closely with each of our clients to ensure your branding and message is clear and professional, encouraging your customers to take action</p>

            <p class="hosting-page-section-3-right-info"><i class="fal fa-check-circle"></i><strong>First Impressions Count</strong> - Your design will be eye-catching, clean and professional</p>
            <p class="hosting-page-section-3-right-info"><i class="fal fa-check-circle"></i><strong>Consistency</strong> - Colours, fonts and overall marketing message remain consistent across designs</p>
            <p class="hosting-page-section-3-right-info"><i class="fal fa-check-circle"></i><strong>Creative</strong> - designs that stand out from the competition and encourage engagement </p>
            <p class="hosting-page-section-3-right-info"><i class="fal fa-check-circle"></i><strong>Message is King</strong> - while creativity is important, it is equally important that style does not overshadow substance. Your message will be the center of your design </p>

        </div>
    </div>
</div>
<div class="seo-page-section-4-wrapper">
    <div class="seo-page-section-4">
        <a class="seo-page-section-4-button" href="{{ route('contact') }}">Get Started</a>
    </div>
</div>
@endsection
@section('scripts')
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

            setTimeout(showSlides, 4000);
        }
    </script>
@endsection



