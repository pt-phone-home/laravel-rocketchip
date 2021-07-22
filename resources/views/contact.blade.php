@extends('master')

@section('title')
Contact Us | Rocket.Chip Web Solutions
@endsection
@section('pageDescription')
<meta name="description" content="Contact Rocket.Chip Web Solutions - One of Ireland's most innovative website design and development agencies. Get a quote or request more informaiton.">
@endsection


@section('content')
<div class="about-banner">
    <h1>Contact Us</h1>
</div>
<div>
    @include('inc.messages')
</div>

<div class="contact-general-container">
        <div class="contact-general">

            <div class="contact-general-info">
                <div class="contact-general-info-nap">
                    <h3 class="contact-general-info-nap-heading">More info</h3>
                    <p class="contact-general-info-nap-info">
                        Are you a small business that needs help setting up your website or e-commerce application? Is your business looking to improve its online presence? Get in touch today to find out about our range of web development services for small business.
                    </p>
                    <p class="contact-general-info-nap-info"><strong>Phone:</strong> 087 681 6114</p>
                    <p class="contact-general-info-nap-info"><strong>Email:</strong> info@rocketchipwebsolutions.ie</p>
                    <p class="contact-general-info-nap-info"><strong>Location:</strong> Springdale Road, Raheny, Dublin 5</p>
                    {{-- <p class="contact-general-phone"><i class="fas fa-mobile-alt"></i> Call us on 083 319 0143 to talk to us about your website or web application plans</p>
                    <p class="contact-general-email"><i class="fas fa-at"></i> Email us at info@rocketchipwebsolutions.ie for more information or request a quote</p> --}}
                    <div class="contact-general-info-hours">
                        <h3 class="contact-general-info-hours-heading">Opening Hours</h3>
                        <p class="contact-general-info-hours-info">Mon - Thur: 9am - 9pm</p>
                        <p class="contact-general-info-hours-info">Fri - Sun: 9am - 5pm</p>
                    </div>
                </div>

                <div class="contact-general-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38076.72737854936!2d-6.193356!3d53.3827091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670fec3a04971d%3A0x93ad0c444c86bd7e!2sSpringdale%20Rd%2C%20Donaghmede%2C%20Dublin!5e0!3m2!1sen!2sie!4v1568029462944!5m2!1sen!2sie" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
<div class="contact-form-container">
    <form action="/contact" class="form" method="POST">
        @csrf
        <h2 class="form-header">Send us a message</h2>
        <div class="form-group">
            <label for="name" class="form-label">Name: </label>
        <input type="text" class="form-input" name="name" required value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email: </label>
        <input type="email" class="form-input" name="email" required value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="number" class="form-label">Contact Number: (Optional) </label>
        <input type="number" class="form-input" name="number" value="{{old('number')}}">
        </div>
        <div class="form-group">
            <label for="message" class="form-label"> Message: </label>
        <textarea class="form-textarea" name="message" id="message" cols="30" rows="10" required>{{old('message')}}</textarea>
        </div>
        <div class="form-group">
            <label for="ReCaptcha" class="form-label">Let us know you're human!: </label>
            {!! NoCaptcha::renderJs(array('required' => 'required')) !!}
            {!! NoCaptcha::display() !!}
        </div>
        <div class="form-group">
            <button class="btn form-button">Send</button>
        </div>
    </form>
</div>

@endsection
