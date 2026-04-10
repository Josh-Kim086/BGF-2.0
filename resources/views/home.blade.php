
@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
    <h1>BETTER GLOBE FORESTRY</h1>
    <p id="typing-subtitle" class="hero-subtitle">
    </p>

    <p class="hero-description text-block">
        We develop purpose-driven forestry projects in dryland environments—producing commercial timber while restoring land, strengthening communities, and contributing to climate resilience.
        All projects are implemented through structured partnerships and dedicated project frameworks, ensuring clarity, transparency, and long-term sustainability.
    </p>

    <div class="hero-buttons">
        <a href="#" class="btn">Explore Our Work</a>
        <a href="#" class="btn">Work With Us</a>
    </div>
</div>
</section>

<!-- INFO SECTION 1 -->
<section class="info-section" id="our-mission">
    <h2>Who We Are</h2>
    <p>
        Better Globe Forestry Ltd (BGF) is a professional forestry and agroforestry platform operating in Kenya and Uganda.
We design, implement, and manage forestry projects in dryland environments, working in collaboration with communities, investors, donors, and institutional partners.
Through structured partnerships and dedicated project arrangements, we support commercial forestry, landscape restoration, and climate-aligned land use, with a focus on long-term delivery, technical integrity, and transparent governance.
    </p>
</section>

<!-- INFO SECTION 2 -->
<section class="info-section" id="our-projects">
    <h2>What We Do</h2>

    <p>
        We implement forestry projects across dryland regions, focusing on commercial timber production, ecosystem restoration, and community empowerment.
    </p>

    <div class="cards">
        <div class="card">
            <h3>Forestry Implementation</h3>
            <p>
                Design and management of commercial and restoration forestry projects, delivered by experienced field teams.
            </p>
        </div>

        <div class="card">
            <h3>Partnership-Based Delivery</h3>
            <p>
                Projects implemented on behalf of partners through clearly defined roles, structures, and long-term agreements.
            </p>
        </div>

        <div class="card">
            <h3>Long-Term Stewardship</h3>
            <p>
                Focus on continuity, land stewardship, and measurable outcomes over decades.
            </p>
        </div>
    </div>
</section>


<section class="image-section">
    <div class="container">
        <img src="{{ asset('images/img-1.webp') }}" alt="Description" class="responsive-image">
    </div>
</section>


<!-- INFO SECTION 3 (i) -->
<section class="info-section" id="Working Through Partnerships">
    <h2>Working Through Partnership</h2>
    <p>BGF operates projects without owning them by default, 
        acting as an independent implementation platform within structured project arrangements.Projects are structured through dedicated
         arrangements to ensure clarity of ownership, financing, and implementation.
    </p>
</section>


<!-- INFO SECTION 3 -->
<section class="info-section" id="working-communities">
    <h2>Working With Communities</h2>

    <p>
        Sustainable forestry depends on strong local partnerships. BGF works with farmers and communities through structured agreements, supporting employment, skills development, and complementary livelihood opportunities.
        Where appropriate, projects are linked to affiliated public-interest initiatives(typically carried through dedicated foundation structures) focused on education, livelihoods, and community development.
    </p>
</section>

<!-- INFO SECTION 4 -->
<section class="info-section" id="how-we-work">
    <h2>How We Work</h2>

    <p>
        Forestry projects involve multiple stakeholders and long time horizons. BGF operates as an implementing and management partner within broader project structures that may include landholders, investors, carbon partners, public-interest entities, and community organisations.This approach ensures;
        clear separation of ownership,financing and implementation. Furthermore it ensures Appropriate governance
        and accountability for Long-term operational continuity.
    </p>

  
</section>

<!-- INFO SECTION 5 -->
<section class="info-section" id="our-vision">
    <h2>Our Vision</h2>

    <p>
        To contribute to sustainable development in Africa by enabling the transformation of drylands into productive, resilient landscapes, supporting economic opportunity, environmental restoration, and long-term land stewardship through professional forestry.
    </p>

</section>

<script>
const text = "Sustainable Forestry Solutions for a Better Tomorrow.";
const element = document.getElementById("typing-subtitle");

let index = 0;

function typeEffect() {
    if (index < text.length) {
        element.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 50);
    }
}

window.onload = typeEffect;
</script>


</section>
@endsection