@extends('servicesmaster')
@section('servicePageTitle')
    Logo Design Services | Rocket.Chip Web Solutions
@endsection
@section('pageDescription')
<meta name="description" content="Logo design services for SME's and sole traders in Dublin, Ireland and Northern Ireland. Rocket.Chip Web Solutions provide professional and affordable logo design services.">
@endsection
@section('serviceTitle')
    Logo Design Services
@endsection

@section('serviceContentHeader')

@endsection

@section('serviceHeading', 'Logo Design Services')

@section('serviceSubHeading', 'Professional Logo Design')

@section('serviceInfo', 'A creative, clear logo for all your print and online materials')

@section('serviceContent')
<div class="logo-page-section-1-wrapper">
    <div class="logo-page-section-1">
        <div class="logo-page-section-1-left">
            <h2 class="logo-page-section-1-left-heading">Professional Logo Design</h2>
            <p class="logo-page-section-1-left-info">Your logo is very often the first thing customers notice about your business. A logo is much more than just a collection of images and text; it should help customers to reconise <strong>your</strong> brand and what it is that your business does.</p>
            <p class="logo-page-section-1-left-info">A well-designed logo conveys to customers that your business is professional, trustworthy and provides top quality goods or services.</p>

            <h2 class="logo-page-section-1-left-heading">Great Logo Design</h2>
            <p class="logo-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Recognition</strong> - your logo should be easy to recognise and associate with your business</p>
            <p class="logo-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Simplicity & Clarity</strong> - your logo should be simple enough to work across various formats, from FaceBook to Business Cards</p>
            <p class="logo-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Colours & Fonts</strong> - different colours and fonts convey different meanings to potential customers, it is important that the ones you select match the image your business is trying to portray</p>
            <p class="logo-page-section-1-left-info"><i class="fal fa-check-circle"></i><strong>Shapes & Images</strong> - Images and shapes must be carefully selected so that your logo delivers the correct message about your business</p>

        </div>
        <div class="logo-page-section-1-right">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 1.png" alt="logo design dublin rocket chip web solutions example 1" title="logo design dublin rocket chip web solutions example 1">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 2.png" alt="logo design dublin rocket chip web solutions example 2" title="logo design dublin rocket chip web solutions example 2">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 3.png" alt="logo design dublin rocket chip web solutions example 3" title="logo design dublin rocket chip web solutions example 3">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 4.png" alt="logo design dublin rocket chip web solutions example 4" title="logo design dublin rocket chip web solutions example 4">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 5.png" alt="logo design dublin rocket chip web solutions example 5" title="logo design dublin rocket chip web solutions example 5">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 6.png" alt="logo design dublin rocket chip web solutions example 6" title="logo design dublin rocket chip web solutions example 6">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 7.png" alt="logo design dublin rocket chip web solutions example 7" title="logo design dublin rocket chip web solutions example 7">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 8.png" alt="logo design dublin rocket chip web solutions example 8" title="logo design dublin rocket chip web solutions example 8">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 9.png" alt="logo design dublin rocket chip web solutions example 9" title="logo design dublin rocket chip web solutions example 9">
            <img class="sample-logo logo-page-section-1-right-image" src="/images/logos/logo design dublin rocket chip web solutions example 10.png" alt="logo design dublin rocket chip web solutions example 10" title="logo design dublin rocket chip web solutions example 10">



        </div>
    </div>
</div>
<div class="design-page-section-2-wrapper">
    <div class="design-page-section-2">
        <a class="design-page-section-2-button" href="{{ route('contact') }}">Work With Us Today</a>
    </div>
</div>
<div class="logo-page-section-3-wrapper">
    <div class="logo-page-section-3">
        <div class="logo-page-section-3-left">

        </div>
        <div class="logo-page-section-3-right">
            <h2 class="logo-page-section-3-right-heading">Logo Design to Fit Your Budget</h2>
            <p class="logo-page-section-3-right-info">At Rocket.Chip Web Solutions we have a number of different logo design options available to our customers, each suited to your budget.</p>
            <p class="logo-page-section-3-right-info">As a web development agency we have access to a number of logo creation tools that might suit are clients who are working on a limited budget. This will provide you with a professional logo, without lengthy design time or high costs.</p>
            <p class="logo-page-section-3-right-info">Alternatively, one of our designers can work with you step-by-step to create a bespoke logo which matches your company vision and brand personality.</p>

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
            let logos = document.getElementsByClassName("sample-logo");
            for (i = 0; i < logos.length; i++) {
                logos[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > logos.length) {
                slideIndex = 1;
            }

            logos[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 4000);
        }
    </script>
@endsection



