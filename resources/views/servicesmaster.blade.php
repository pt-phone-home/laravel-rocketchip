@extends('master')

@section('title')

@endsection

@section('content')

<div class="about-banner">
    <h1>@yield('serviceTitle')</h1>
</div>

@include('partials.servicesnav')

@yield('serviceContent')
@endsection




