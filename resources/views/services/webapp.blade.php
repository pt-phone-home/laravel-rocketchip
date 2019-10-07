@extends('servicesmaster')
@section('servicePageTitle')
    Web Application Development | Rocket.Chip Web Solutions
@endsection
@section('serviceTitle')
    Web Application Development
@endsection

@section('serviceContentHeader')

@endsection

@section('serviceHeading', 'Web Application Development')

@section('serviceSubHeading', 'Build something great')

@section('serviceInfo', 'Work with us to build a bespoke web application to grow and manage your business.')

@section('serviceContent')
    <div class="webapp-page-section-1-wrapper">
    <div class="webapp-page-section-1">
        <div class="webapp-page-section-1-left">
            <h2 class="webapp-page-section-1-left-heading">More Than a Website</h2>
            <p class="webapp-page-section-1-left-info">Could your business benefit from software to improve your processes and procedures? Such as order processing systems or customer management systems? Are you an entrepreneur with a great app idea? If you answered yes to any of these questions, talk to us today about developing a unique web application with us. Our team use the latest web development tools and approaches and can work with you to create a state of the art web application.</p>

            @component('partials.webfeature', ['icon' => 'fab fa-laravel', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Laravel Web Framework', 'serviceInfo' => "All our web applications are created using the popular Laravel PHP framework. Laravel offers state-of-the-art security, flexibility, consistency, and best-in-class design practices. This ensures that your application will be fast, secure and reliable on all devices.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fab fa-vuejs', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'VueJs JavaScript Framework', 'serviceInfo' => "All our web applications are created using the popular Laravel PHP framework. Laravel offers state-of-the-art security, flexibility, consistency, and best-in-class design practices. This ensures that your application will be fast, secure and reliable on all devices.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fal fa-tachometer-alt-fastest', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Test Driven Development', 'serviceInfo' => "All our web applications are created using the popular Laravel PHP framework. Laravel offers state-of-the-art security, flexibility, consistency, and best-in-class design practices. This ensures that your application will be fast, secure and reliable on all devices.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent

            @component('partials.webfeature', ['icon' => 'fal fa-server', 'iconClass' => 'webfeature-icon', 'featureClass' => 'webfeature-mid', 'serviceTitle' => 'Lightening Fast Web Hosting', 'serviceInfo' => "All our web applications are created using the popular Laravel PHP framework. Laravel offers state-of-the-art security, flexibility, consistency, and best-in-class design practices. This ensures that your application will be fast, secure and reliable on all devices.", 'serviceLink' => "", 'serviceLinkClass' => ''])
            @endcomponent




        </div>
        <div class="webapp-page-section-1-right">

        </div>
    </div>
</div>
<div class="webdesign-page-section-2-wrapper">
    <div class="webdesign-page-section-2">
        <a class="webdesign-page-section-2-button" href="{{ route('contact') }}">Work With Us Today</a>
    </div>
</div>
@endsection




