@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="projects-hero">
    <div class="hero-content">
        <h1>Our Projects</h1>
        <p>
            Better Globe Forestry LTD operates as an implementation and management platform
for forestry and agroforestry projects across East Africa.
        </p>

        <div class="hero-buttons">
            <a href="#" class="btn-primary">Start a Project Discussion</a>
            <a href="#" class="btn-primary">Download Capabilities Overview</a>
        </div>
    </div>
</section>

<!-- POSITIONING -->
<section class="projects-positioning">
    <div class="container">
        <p class="positioning-text">
           Our role is to design, establish, and manage projects on behalf of
         partners, programmes, and project-specific structures. Each project reflects
         a combination of technical expertise, local engagement, and long-term
        environmental and economic objectives.

        Projects may be structured through partnerships, programmes, or dedicated
        project vehicles, while Better Globe Forestry ensures consistent and
        high-quality operational execution on the ground.
        </p>

        <div class="positioning-points">
            <div>Implementation, not ownership</div>
            <div>Long-term operational partner</div>
            <div>Structured, transparent delivery</div>
        </div>
    </div>
    
     <section class="projects-positioning">
    <div class="container">
        <p class="positioning-text">Better Globe Forestry does not operate as an asset owner by default.
It acts as an independent implementation platform, with ownership and
funding structures defined at project level
        </p>
    </div>

</section>



<!-- HOW WE WORK -->
<section class="how-we-work">
    <h2>How We Work</h2>
<p class="process-note">
        Projects are delivered through structured agreements ensuring clarity of roles, responsibilities, and outcomes.
    </p>
    <div class="process-steps">
        <div>1. Initial discussion & scoping</div>
        <div>2. Technical assessment</div>
        <div>3. Project design & proposal</div>
        <div>4. Implementation & management</div>
        <div>5. Monitoring & reporting</div>
    </div>

</section>

<!-- DELIVERY MODEL -->
<section class="delivery-model">
    
    <div class="delivery-overlay">
        <h2>Service Delivery Model</h2>

        <div class="model-grid">
            <div><strong>BGF</strong><br>Implementation Platform</div>
            <div><strong>Partners</strong><br>Investors / Corporates / Donors</div>
            <div><strong>Communities</strong><br>Land Stewards</div>
            <div><strong>Projects</strong><br>Structured Frameworks</div>
        </div>
    </div>

</section>

<!-- PROOF -->
<section class="proof">

    <h2>Proof of Delivery</h2>

    <!-- METRICS -->
    <div class="metrics">
        <div class="metric-card">
            <span>🌱</span>
            <h3>3.5M+</h3>
            <p>Trees Standing</p>
        </div>

        <div class="metric-card">
            <span>🌍</span>
            <h3>20,000+</h3>
            <p>Hectares Restored</p>
        </div>

        <div class="metric-card">
            <span>👨‍🌾</span>
            <h3>30,000+</h3>
            <p>Households Impacted</p>
        </div>
    </div>

   <!-- CASE -->
<div class="case">
    <h3>Kiambere Plantation</h3>
    <h4>Plantation | Eastern Kenya</h4>
    <p>
        The Kiambere Plantation is a core commercial forestry site developed in a
        dryland environment, focused on structured plantation management, species
        performance, and long-term timber development.
    </p>
    <a href="{{ route('plantations') }}#kiambere" class="btn">
    View Project
</a>
</div>

<!-- CASE -->
<div class="case">
    <h3>Nyongoro Plantation</h3>
    <h4>Plantation | Eastern Kenya</h4>

    <p>
        The Nyongoro Plantation is a technically driven forestry site focused on
        silvicultural quality, structured plantation management, and long-term
        resource development.
    </p>
<a href="{{ route('plantations') }}#Nyongoro" class="btn">View Project</a>
      
</div>

<!-- CASE -->
<div class="case">
    <h3>7 Forks Agroforestry Programme</h3>
    <h4>Programme | Eastern Kenya</h4>

    <p>
        The 7 Forks Agroforestry Programme is a large-scale initiative engaging
        smallholder farmers through structured planting, extension support, and
        ongoing monitoring systems.
    </p>

   <a href="{{ route('plantations') }}#7 Forks" class="btn">View Project</a>
      
</div>

<!-- CASE -->
<div class="case">
    <h3>Dokolo Project</h3>
    <h4>Agroforestry & Plantation | Uganda</h4>

    <p>
        The Dokolo Project represents an expansion into Uganda, adapting forestry
        and agroforestry models to the local context through community engagement
        and structured implementation.
    </p>

    <a href="{{ route('plantations') }}#Dokolo" class="btn">View Project</a>
      
</div>




    <!-- TESTIMONIAL -->
    <div class="testimonial">
        <p>
            “This project has transformed our land and improved livelihoods.
            We now see both environmental and economic benefits.”
        </p>
        <span>— Local Farmer, Kiambere</span>
    </div>

    <!-- PHOTO STRIP -->
    <div class="photo-strip">
        <img src="/images/image5.webp" alt="Tree planting">
        <img src="/images/img6.JPG" alt="Farmers working">
        <img src="/images/img9.jpg" alt="Landscape restoration">
    </div>

</section>

<!-- OFFER LINK -->
<section class="offer-link">
    <h2>Looking for structured programmes?</h2>
<p>
        Whether you are developing a commercial forestry project, a CSR programme, or a landscape restoration initiative, 
        BGF provides the technical and operational backbone to deliver it.
        </p>
    <div class="offer-buttons">
        <a href="#" class="btn-primary">Go Global</a>
        <a href="#" class="btn-primary">Carbon & Gum Programme</a>
        <a href="#" class="btn-primary">Tailor-Made Solutions</a>
    </div>
</section>

<!-- FINAL CTA -->
<section class="final-cta">

    <div class="cta-overlay">
        <div class="cta-buttons">
            <a href="#" class="btn-primary">Start a Conversation</a>
            <a href="#" class="btn-primary">Request a Proposal</a>
        </div>
    </div>

</section>

@endsection