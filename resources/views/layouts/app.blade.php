<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Globe Forestry</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>
<body>

    <!-- Header -->
  <header class="site-header">
    <div class="logo">
        <img src="{{ asset('images/bgflogo.webp') }}" alt="Logo" width="50">
        <span>Better Globe Forestry</span>
    </div>

    <!-- Menu icon -->
    <div class="menu-toggle" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
</div>


<div id="menu-overlay" onclick="toggleMenu()"></div>

    <!-- Navigation -->
    <nav id="nav-menu">
    <a href="{{ route('home') }}">Home</a>





    
    <div class="nav-item dropdown">
        <a href="{{ route('about') }}">About</a>

        <div class="dropdown-menu">
            <a href="{{ route('about') }}#our-role">Our Role</a>
            <a href="{{ route('about') }}#how-we-work">How We Work</a>
            <a href="{{ route('about') }}#Experience">Experience</a>
            <a href="{{ route('about') }}#Vision">Vision & Mission</a>
            <a href="{{ route('about') }}#Ecosystem">BGF Ecosystem</a>
        </div>
    </div>





   <div class="nav-item dropdown">
    <a href="{{ route('services') }}">Services</a>

    <div class="dropdown-menu">
        <a href="{{ route('services') }}#what-we-provide">What We Provide</a>
        <a href="{{ route('services') }}#How-Our-Services-Are-Delivered">How We Work</a>
        <a href="{{ route('services') }}#who-we-work-with">Our Partners</a>
    </div>
</div>

<div class="nav-item dropdown">
    <a href="{{ route('projects') }}" class="dropdown-toggle">Projects</a>

  <div class="dropdown-menu">
    <a href="{{ route('plantations') }}#kiambere">Kiambere</a>
    <a href="{{ route('plantations') }}#kiambere-agroforestry">Kiambere Agroforestry</a>
    <a href="{{ route('plantations') }}#nyongoro">Nyongoro</a>
    <a href="{{ route('plantations') }}#seven-forks">Seven-Forks</a>
    <a href="{{ route('plantations') }}#dokolo">Dokolo</a>
</div>
</div>



  <a href="{{ route('partners') }}">Partners</a>

   <a href="{{ route('contact') }}">Contact</a>

   <a href="{{ route('faq') }}">FAQ</a>
</nav>
</header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

   <!-- Footer -->
<footer>
    <div class="footer-container">

        <div class="footer-section">
            <h3>About Us</h3>
            <p>
                Better Globe Forestry Ltd provides forestry implementation and management services.
                Ownership of land, trees, carbon credits, or financial returns depends on project-specific contractual arrangements.
            </p>
        </div>

        <div class="footer-section">
            <h3>Quick Links</h3>

            <div class="footer-links-wrapper">
                <div class="footer-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('services') }}">Services</a>
                    <a href="{{ route('projects') }}">Projects</a>
                </div>

                <div class="footer-links">
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('partners') }}">Partners</a>
                    <a href="{{ route('faq') }}">FAQs</a>
                </div>
            </div>
        </div>

        <div class="footer-section">
            <h3>Contact</h3>
            <p>Address: Nairobi, Kenya</p>
            <p>Phone: +254 110 066 043</p>
            <p>Email: info@betterglobeforestry.com</p>

     <div class="social-links">
    <a href="https://www.facebook.com/YOUR_FACEBOOK_PAGE" target="_blank">Facebook</a> |
    <a href="https://x.com/BetterglobeF" target="_blank">Twitter (X)</a> |
    <a href="https://www.linkedin.com/company/YOUR_LINKEDIN_PAGE" target="_blank">LinkedIn</a>
</div>
        </div>

    </div>
</footer>


    <script>
function toggleMenu() {
    document.getElementById("nav-menu").classList.toggle("active");
}
</script>



<script>
function toggleFAQ(element) {
    const item = element.parentElement;

    item.classList.toggle("active");

    const icon = element.querySelector(".faq-icon");
    icon.textContent = item.classList.contains("active") ? "−" : "+";
}
</script>
</body>
</html>