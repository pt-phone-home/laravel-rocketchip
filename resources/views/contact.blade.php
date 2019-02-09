@extends('master')

@section('title')
Contact Us | Rocket.Chip Web Solutions
@endsection

@section('content')
<div class="about-banner">
    <h1>Contact Us</h1>
</div>
<div class="contact-general-container">
    <div class="contact-general">
        <p class="contact-general-phone"><i class="fas fa-mobile-alt"></i> Call us on 087 681 6114 to talk to us about your website or web application plans</p>
        <p class="contact-general-email"><i class="fas fa-at"></i> Email us at info@rocketchipwebsolutions.ie for more information or request a quote</p>
    </div>
</div>

<div class="contact-form-container">
    <form action="" class="form" method="POST">
        @csrf
        <h1 class="form-header">Send us a message</h1>
        <div class="form-group">
            <label for="name" class="form-label">Name: </label>
            <input type="text" class="form-input" name="name" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-input" name="email" required>
        </div>
        <div class="form-group">
            <label for="number" class="form-label">Contact Number: </label>
            <input type="number" class="form-input" name="number">
        </div>
        <div class="form-group">
            <label for="message" class="form-label"> Message: </label>
            <textarea class="form-textarea" name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <button class="form-button">Send</button>
    </form>
</div>
@endsection