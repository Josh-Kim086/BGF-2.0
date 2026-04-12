<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        
    
       
        /* Footer */
        footer { width: 100%; padding: 40px 50px; background: #34495e; color: white; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; }
        footer .footer-section { flex: 1 1 200px; }
        footer h3 { margin-bottom: 15px; }
        footer p, footer a { color: #ecf0f1; text-decoration: none; line-height: 1.5; }
        footer a:hover { text-decoration: underline; }
        footer .socials a { margin-right: 15px; font-weight: bold; }

        /* Responsive tweaks */
        @media(max-width:768px) {
            header { flex-direction: column; align-items: flex-start; padding: 15px 20px; }
            header .top-info { position: static; margin-top: 5px; }
            footer { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- Header -->
  <header>
    <div class="logo">
        <img src="{{ asset('images/bgflogo.webp') }}" alt="Logo" width="50">
        <span>Better Globe Forestry</span>
    </div>

    <!-- Menu icon -->
    <div class="menu-toggle" onclick="toggleMenu()">
        ☰
    </div>

    <!-- Navigation -->
    <nav id="nav-menu">
    <a href="{{ route('home') }}">Home</a>

    <div class="nav-item dropdown">
        <a href="{{ route('about') }}">About</a>

        <div class="dropdown-menu">
            <a href="{{ route('about') }}#our-role">Our Role</a>
            <a href="{{ route('about') }}#how-we-work">How We Work</a>
            <a href="{{ route('about') }}#Experience">Our Experience</a>
            <a href="{{ route('about') }}#Vision">Vision & Mission</a>
            <a href="{{ route('about') }}#Vision">BGF Ecosystem</a>
        </div>
    </div>

    <a href="{{ route('services') }}">Services</a>
    <a href="#">Contact</a>
</nav>
</header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Better Globe Forestry Ltd provides forestry implementation and management services.
Ownership of land, trees, carbon credits, or financial returns depends on project-specific contractual arrangements.
</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <p><a href="#">Home</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">Services</a></p>
            <p><a href="#">Contact</a></p>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Address: Nairobi, Kenya</p>
            <p>Phone: +254 700 123 456</p>
            <p>Email: info@myapp.com</p>
            <div class="socials">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

<script>
function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('active');
}
</script>
</body>
</html>