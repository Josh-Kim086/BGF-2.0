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
        src="https://www.google.com/maps?q=Kileleshwa,Nairobi&output=embed"
        allowfullscreen=""
        loading="lazy">
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
                    Total Petrol Station Building, 2nd Floor<br><br>

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
        <div class="contact-form">
            <form>
                <div class="form-row">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                </div>

                <input type="text" placeholder="Subject">

                <textarea placeholder="Message"></textarea>

                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>

    </div>
</section>

<section class="contact-newsletter">
    <div class="newsletter-box">
        <h3>Subscribe to our Newsletter</h3>

        <div class="newsletter-form">
            <input type="email" placeholder="Enter your email">
            <button class="btn-primary">Subscribe</button>
        </div>
    </div>
</section>
@endsection