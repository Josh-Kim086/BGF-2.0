@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="contact-hero">
    <div class="contact-hero-overlay">
        <h1>Contact Us</h1>
        <p class="typing-text">
            Better Globe Forestry Ltd — Planting trees, changing lives
        </p>
    </div>
</section>


<!-- MAP SECTION -->
<section class="contact-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.299144913923!2d36.77544058174089!3d-1.2786788293463358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17536e2a239f%3A0x7a2ec1b1ec179a4f!2sKileleshwa%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1785240478728!5m2!1sen!2ske" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>
</section>


<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="contact-container">

        <!-- LEFT SIDE -->
        <div class="contact-info">
            <h2>Get in touch</h2>

            <div class="info-block">
                <h4>📍 Our Address:</h4>
                <p>
                    Better Globe Forestry Ltd,<br>
                    Olenguruone Ave Kileleshwa,<br>
                    Likoni Rd,<br>
                    Costalina Petrol Station Building, 2nd Floor<br><br>

                    Nairobi, Kenya<br>
                    P.O Box 823-00606
                </p>
            </div>

            <div class="info-block">
                <h4>✉ Email Us</h4>
                <p>info@betterglobeforestry.com</p>
            </div>

            <div class="info-block">
                <h4>📞 Call us</h4>
                <p>+254 110 066 043</p>
            </div>
        </div>


        <!-- RIGHT SIDE FORM -->
   <div id="contact-form" class="contact-form">

    <form action="{{ route('contact.store') }}" method="POST">

        @csrf

        <div class="form-row">
            <input
                type="text"
                name="name"
                placeholder="Your Name"
                value="{{ old('name') }}"
                required>

            <input
                type="email"
                name="email"
                placeholder="Your Email"
                value="{{ old('email') }}"
                required>
        </div>

        <input
            type="text"
            name="subject"
            placeholder="Subject"
            value="{{ old('subject') }}"
            required>

        <textarea
            name="message"
            placeholder="Message"
            required>{{ old('message') }}</textarea>

        <button type="submit" class="btn-primary">
            Send Message
        </button>

    </form>

    @if(session('contact_success'))
        <div class="newsletter-success">
            {{ session('contact_success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="newsletter-error">
            <ul style="margin:0;padding-left:18px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

</section>

<section id="newsletter" class="contact-newsletter">
    <div class="newsletter-box">
        <h3>Subscribe to our Newsletter</h3>

        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
            @csrf

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                value="{{ old('email') }}"
                required>

            <button type="submit" class="btn-primary">
                Subscribe
            </button>
        </form>

        @if(session('newsletter_success'))
            <div class="newsletter-success">
                {{ session('newsletter_success') }}
            </div>
        @endif

        @if($errors->has('email'))
            <div class="newsletter-error">
                {{ $errors->first('email') }}
            </div>
        @endif

    </div>
</section>




</section>
@endsection