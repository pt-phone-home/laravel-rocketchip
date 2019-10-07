@extends('master')

@section('title')
    @yield('servicePageTitle')
@endsection

@section('content')

<div class="about-banner">
    <h1>@yield('serviceTitle')</h1>
</div>
<div class="service-content-header-wrapper">
    <div class="service-content-header">
        <div class="service-content-header-left">
           <div class="webdesign-page-header">
                <h2 class="webdesign-page-header-heading"> @yield('serviceHeading') </h2>
                {{-- <h3 class="webdesign-page-header-subheading">@yield('serviceSubHeading')</h3> --}}
                <h3 class="{{ Route::current()->getName() === 'webdesign' || Route::current()->getName() === 'ecommerce' || Route::current()->getName() === 'webapp' || Route::current()->getName() === 'redesign'? 'webdesign-page-header-subheading': 'webdesign-page-header-subheading-alt'}}">@yield('serviceSubHeading')</h3>

                <p class="webdesign-page-header-info">@yield('serviceInfo')</p>

                <hr class="{{ Route::current()->getName() === 'webdesign' || Route::current()->getName() === 'ecommerce' || Route::current()->getName() === 'webapp' || Route::current()->getName() === 'redesign'? 'webdesign-page-header-hr': 'webdesign-page-header-hr-alt'}}">
             </div>
        </div>
        <div class="service-content-header-right">
            @include('partials.servicesnav')
        </div>
    </div>
</div>


@yield('serviceContent')
@endsection




