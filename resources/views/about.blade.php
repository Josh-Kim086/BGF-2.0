@extends('layouts.app')

@section('content')
    <section id="about-us" style="padding: 40px;">
        <div style="max-width: 1200px; margin: auto;">

    <h1 style="text-align: center; margin-bottom: 30px;">About Us</h1>

    <!-- Image + Text Row -->
    <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center; margin-bottom: 30px;">

        <!-- Image -->
        <div style="flex: 1; min-width: 300px;">
            <img src="{{ asset('images/img3.webp') }}" 
                 alt="About Us Image" 
                 style="width: 100%; height: auto; border-radius: 10px;">
        </div>

        <!-- Text -->
        <div style="flex: 1; min-width: 280px;">
            <p class="text-block">
                Better Globe Forestry Ltd (BGF) is a professional forestry platform specialising in the design,
                implementation, and long-term management of sustainable forestry and agroforestry programmes in dryland environments.
                Since 2004, BGF has developed extensive operational experience across Kenya and Uganda,
                combining forestry science, field execution, and community engagement to deliver measurable environmental and socio-economic outcomes.
            </p>
        </div>

    </div>

   

    <div id="our-role" style="margin-top: 40px;">
    
    <h2 style="text-align: center;">Our Role</h2>

    <p class="text-block">
        Better Globe Forestry acts as the operational and technical backbone of forestry programmes.We are responsible for Designing forestry and agroforestry
        systems adapted to local conditions, Implementing planting,maintenance and protection activities,Managing long-term forestry operations
        and field teams.We also monitor performance through structured data and reporting systems by ensuring compliance with applicable standards 
        and best practices. Better Globe Forestry operates as an independent professional service provider, delivering execution and operational continuity across projects.
    </p>
</div>

        <div id="how-we-work" class="how-we-work-section">
            <h2>How We Work</h2>
            <p>
              Our model is based on a clear separation of roles to ensure transparency, scalability, and long-term sustainability. 
              Partners and investors provide capital, land, or strategic direction, Project structures (including SPVs where applicable)
               hold assets and define economic rights,
               Better Globe Forestry implements and manages operations.Farmers and communities participate through structured agreements.
             This approach ensures that there is Clarity of Ownership, strong governance and accountability and Long-term Continuity of Forest Assets.
            </p>

            <div class="experience-image-container">
        <img src="{{ asset('images/img4.webp') }}" 
             alt="Our Experience Image" 
             class="experience-image">
    </div>

        </div>

        <div id="Experience">
            <h2>Our Experience</h2>
            <p>
               BGF has built a strong operational footprint through: Large-scale
                plantation development, extensive agroforestry Programmes with thousands of farmers,
                 Long-term land restoration in dryland environments, Integration of forestry with community development initiatives. 
                 Our teams operate directly in the field, supported by nurseries, technical systems, and local networks developed over many years.
            </p>
        </div>

        <div>
            <h2>Institutional Evolution</h2>
            <p>
                Better Globe Forestry is transitioning from an entrepreneurial forestry developer to a structured,
                 institution-grade platform.  This evolution includes: The introduction of project-based and SPV-based structures,
                  clearer separation between ownership, financing, and operations, strengthened governance and reporting frameworks,
                   alignment with international standards and partner requirements.
                    This transition enables BGF to work effectively with institutional investors, development partners, and large-scale programmes. 
            </p>

        <div class="institution-image-container">
        <img src="{{ asset('images/image5.webp') }}" 
             alt="Institutional Evolution Image" 
             class="institution-image">
    </div>


        </div>

        <div class="about-relationship-section">
            <h2>Relationship with the Foundation</h2>
            <p>
                  Better Globe Forestry operates alongside the Better Globe Forestry Foundation (BGFF), an independent public-interest entity.
    </p>
<div class="relationship-container">
    <ul class="relationship-list">
        <li style="--i:0;">BGF focuses on operational forestry implementation</li>
        <li style="--i:1;">BGFF manages donor-funded and philanthropic programmes</li>
        <li style="--i:2;">BGF provides technical and operational support where required, while both entities operate under distinct mandates and governance structures</li>
    </ul>
</div>
</div>

<div id="Vision">
    <h2>Our Vision</h2>
    <p>To contribute to the transformation of dryland landscapes into productive,
         resilient ecosystems that generate long-term environmental, social, and economic value.
    </p>
</div>

<div>
    <h2>Our Mision</h2>
    <p>
        To design, implement, and manage sustainable forestry and agroforestry programmes in 
        collaboration with partners, communities, and investors, delivering measurable impact and Value.
    </p>
</div>

<section class="ecosystem-section">

    <!-- LEFT: Diagram -->
    <div class="ecosystem">
      

        <div class="ecosystem-flow">
            <div class="eco-box partners">
        <strong>PARTNERS & INVESTORS</strong>
        <p>(Capital, Land, Strategy)</p>
    </div>

    <div class="eco-arrow">↓</div>

    <div class="eco-box spv">
        <strong>PROJECT STRUCTURES (SPVs)</strong>
        <p>(Asset ownership & governance)</p>
    </div>

    <div class="eco-arrow">↓</div>

    <div class="eco-box bgf">
        <strong>BETTER GLOBE FORESTRY (BGF)</strong>
        <p>(Implementation & management)</p>
    </div>

    <div class="eco-arrow">↓</div>

    <div class="eco-box farmers">
        <strong>FARMERS & COMMUNITIES</strong>
        <p>(Land use, participation, livelihoods)</p>
    </div>
    </div>
</div>

    <!-- RIGHT: Text -->
    <div class="ecosystem-text">
        <h2>Ecosystem</h2>

        <p>
            Better Globe Forestry operates within a structured ecosystem designed to ensure clarity,
            transparency, and long-term sustainability.Partners and investors support projects through captital, land 
            or strategic collaborations.Dedicated projects structures define ownership and economic rights.
            Better Globe Forestry implements and manages operations where Farmers and communities participate through structured aggrements.
            This model enables scalable, well-governed forestry programmes aligned with long-term value creation.
        </p>

    </div>


</section>
<div class="company-diagram-container">
    <img src="{{ asset('images/bgf-f.png') }}" 
         alt="Company Structure Diagram" 
         class="company-diagram">
</div>

    </section>  
@endsection