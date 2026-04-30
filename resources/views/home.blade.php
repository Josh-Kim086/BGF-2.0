@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">

        <h1>BETTER GLOBE FORESTRY</h1>

        <p class="hero-subtitle">
            Better Globe Forestry is a forestry implementation platform that designs, implements,
             and manages sustainable forestry and agroforestry programmes in collaboration with partners, 
             communities, and institutions.
        </p>


        <div class="hero-buttons">
            <a href="{{ route('services') }}" class="btn">Explore Our Work</a>
            <a href="{{ route('contact') }}" class="btn">Discuss a Programme</a>
        </div>

    </div>
</section>
<section>
    <h2></h2>
 <p class="info-section">
            We operate in dryland environments, delivering long-term forestry solutions that combine environmental restoration, commercial value creation, and community engagement.
            All programmes are implemented within structured frameworks that ensure clarity of roles, transparency, and long-term operational continuity.
        </p>
    </section>

<!-- WHO WE ARE -->
<section class="info-section">
    <h2>Who We Are</h2>

    <p>
        Better Globe Forestry Ltd (BGF) is a professional forestry implementation platform operating in Kenya and Uganda.
        We design, implement, and manage forestry and agroforestry programmes in collaboration with partners, investors, 
        communities, and institutions.
        Our role is to deliver operational execution on the ground within structured programme frameworks,
         combining technical forestry expertise, field implementation capacity, and long-term management systems.
        Through this approach, BGF enables scalable, well-governed forestry programmes aligned with environmental,
         social, and economic objectives.
    </p>
</section>

<!-- WHAT WE DO -->
<section class="info-section">
    <h2>What We Do</h2>

    <p class="text-block">
        We act as the operational and technical backbone of forestry and agroforestry programmes.
    </p>

    <ul class="how-we-work-list">
        <li style="--i:1;">Design and structuring of forestry systems</li>
        <li style="--i:2;">Planting, maintenance, and field execution</li>
        <li style="--i:3;">Farmer integration through agroforestry</li>
        <li style="--i:4;">Monitoring, reporting, and long-term management</li>
    </ul>

    <p class="text-block">
        We operate on behalf of partners and programme structures, ensuring consistent and professional implementation on the ground.
    </p>

    <div class="cards">
        <div class="card">
            <h3>Forestry Implementation</h3>
            <p>
                Design and management of forestry and agroforestry programmes, delivered by experienced field teams.
            </p>
        </div>

        <div class="card">
            <h3>Partnership-Based Delivery</h3>
            <p>
                Programmes implemented on behalf of partners within structured frameworks, with clearly defined roles and governance.
            </p>
        </div>

        <div class="card">
            <h3>Long-Term Stewardship</h3>
            <p>
                Focus on continuity, land stewardship, and measurable outcomes over time.
            </p>
        </div>
    </div>
</section>

<!-- IMAGE (UNCHANGED) -->
<section class="image-section">
    <div class="container">
        <img src="{{ asset('images/img-1.webp') }}" alt="Forestry operations" class="responsive-image">
    </div>
</section>

<!-- WORKING THROUGH PARTNERSHIP -->
<section class="info-section">
    <h2>Working Through Partnership</h2>

    <p>
        BGF operates as an independent implementation platform, delivering forestry programmes without owning assets by default.
        Programmes are structured through dedicated frameworks that ensure clarity of ownership, financing, and implementation roles.
    </p>
</section>

<!-- WORKING WITH COMMUNITIES -->
<section class="info-section">
    <h2>Working With Communities</h2>

    <p>
        Sustainable forestry depends on strong local partnerships. BGF works with farmers and communities through
         structured agreements,
        supporting employment, skills development, and complementary livelihood opportunities.
        Where appropriate, programmes are linked to public-interest initiatives, contributing to education, 
        livelihoods, and community development.
    </p>

    <img src="{{ asset('images/Kamuwongo FSA.jpg') }}" 
     alt="FAQ Image 2" 
     style="width: 100%; max-width: 1000px; height: auto; display: block; margin: 0 auto;">
</section>

<!-- HOW WE WORK -->
<section class="info-section">
    <h2>How We Work</h2>


<div class="flow-cta">

    <div class="flow-item">Partners</div>
    <div class="flow-arrow">→</div>

    <div class="flow-item">Programme Structures</div>
    <div class="flow-arrow">→</div>

    <div class="flow-item">BGF</div>
    <div class="flow-arrow">→</div>

    <div class="flow-item">Communities</div>

</div>


    <p class="text-block">
        Forestry programmes involve multiple stakeholders and long-term time horizons.
        BGF operates within structured programme frameworks that clearly separate:
    </p>

    <ul class="how-we-work-list">
        <li style="--i:1;">Ownership and financing</li>
        <li style="--i:2;">Operational implementation</li>
        <li style="--i:3;">Community participation</li>
    </ul>

    <p class="text-block">In this model:</p>

    <ul class="how-we-work-list">
        <li style="--i:1;">Partners and investors provide capital, land, or strategic support</li>
        <li style="--i:2;">Programme structures define ownership and governance</li>
        <li style="--i:3;">BGF implements and manages operations</li>
        <li style="--i:4;">Farmers and communities participate through structured agreements</li>
    </ul>

    <p class="text-block">
        This approach ensures transparency, accountability, and long-term operational continuity.
    </p>
</section>

<!-- WHAT BGF IS / IS NOT -->
<section class="info-section">
    <h2>What BGF Is — and Is Not</h2>

    <div class="cards">

        <div class="card">
            <h3>BGF is</h3>
            <p>Forestry implementation platform</p>
            <p>Professional execution and management partner</p>
            <p>Long-term forestry operator</p>
        </div>

        <div class="card">
            <h3>BGF is not</h3>
            <p>Seller of trees or ownership rights</p>
            <p>Project promoter</p>
            <p>Carbon credit issuer</p>
        </div>

    </div>
</section>

<!-- OUR VISION -->
<section class="info-section">
    <h2>Our Vision</h2>

    <p>
        To contribute to sustainable development in Africa by enabling the transformation of drylands into productive,
        resilient landscapes, supporting economic opportunity, environmental restoration, and long-term land stewardship
        through professional forestry.
    </p>
</section>

<!-- CTA -->
<section class="info-section" id="cta">
    <h2>Engage With Us</h2>

    <p>
        Explore how structured forestry programmes can be deployed with BGF,
        or discuss a potential programme with our team.
    </p>

    <div class="image-container hero-buttons-container">
        <img src="{{ asset('images/img11.jpg') }}" alt="CTA Image">

        <div class="hero-buttons">
            <a href="{{ route('services') }}" class="btn">Explore Our Work</a>
            <a href="{{ route('contact') }}" class="btn">Discuss a Programme</a>
        </div>
    </div>
</section>

@endsection