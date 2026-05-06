@extends('layouts.app')

@section('content')

<section class="services-page">

    <!-- HERO -->
    <div class="services-hero">
        <div class="container">
            <h1>Forestry Implementation Platform</h1>
            <h3>
                Enabling structured, large-scale forestry and agroforestry programmes 
                through professional execution, systems, and long-term operational management.
            </h3>

            <a href="/projects" class="btn-primary">Explore Our Projects</a>
        </div>
    </div>


    <!-- INTRO POSITIONING -->
    <div class="services-intro">
        <h2>What We Provide</h2>
        <p>
            Better Globe Forestry acts as an independent implementation platform within structured forestry programmes.
            We design, implement, and manage forestry and agroforestry projects on behalf of partners, investors, and institutions,
            ensuring technical quality, operational continuity, and transparent reporting.</p> <h2></h2> 
        <p>Better globe forestry does not own project assests by default.It acts as an independent impplementation platform</p>

    </div>




    <!-- HOW WE WORK (NEW STRUCTURED VERSION) -->
    <div class="services-delivery">
        <h2>How We Work</h2>
        <p>
            Better Globe Forestry operates as an implementation platform within structured programme frameworks.
            Partners and investors engage through programme structures (including SPVs), while BGF delivers execution 
            on the ground.
            <br>This ensures:</br>
        </p>

      

        <div class="info-box-container">

    <div class="info-box">Clear role separation</div>
    <div class="info-box">Structured governance</div>
    <div class="info-box">Reliable, auditable implementation</div>

</div>
    </div>


    <div class="services-partners">

        <div class="partners-image">
            <img src="{{ asset('images/101124 Kiambere 035.JPG') }}" alt="Our Partners">
        </div>


        <!-- SERVICE PILLARS -->
        <section class="service-pillars">
            <h2>Core Service Areas</h2>

            <!-- NEW FRAMING LINE -->
            <p style="text-align:center; max-width:800px; margin:auto;">
                Our services are not standalone offerings. They are integrated components of structured forestry programmes,
                where Better Globe Forestry acts as the implementation platform.
            </p>

            <div class="pillars-grid">

                <div class="pillar">
                    <h3>Commercial Forestry Development</h3>
                    <p>
                        Design and development of forestry programmes, including site selection, species strategy,
                        planning, and long-term growth optimisation.
                    </p>
                </div>

                <div class="pillar">
                    <h3>Carbon & Environmental Programme Support</h3>
                    <p>
                        Implementation support for afforestation and reforestation programmes aligned with carbon
                        and environmental standards, including MRV systems and partner coordination.
                    </p>
                    <small>BGF supports carbon-aligned programmes but does not act as a carbon credit seller.</small>
                </div>

                <div class="pillar">
                    <h3>Agroforestry & Farmer Engagement</h3>
                    <p>
                        Integration of forestry into smallholder systems through structured outgrower models,
                        training, and long-term engagement programmes.
                    </p>
                </div>

                <div class="pillar">
                    <h3>Forestry Operations & Management</h3>
                    <p>
                        Full operational execution including nursery management, planting, maintenance,
                        protection, and logistics.
                    </p>
                </div>

                <div class="pillar">
                    <h3>Training & Capacity Building</h3>
                    <p>
                        Technical training, advisory services, and institutional support for forestry programmes.
                    </p>
                </div>

            </div>
        </section>


        <!-- WHO WE WORK WITH -->
        <div class="services-partners">
            <h2>Who We Work With</h2>

            <p style="text-align:center; max-width:800px; margin:auto;">
                We work with a range of partners involved in the development and implementation of forestry and agroforestry programmes.
                Each partner category engages within a structured programme framework, ensuring clarity of roles and responsibilities.
            </p>

            <div class="partners-container">
                <div class="partner-card">Investors & Programme Developers</div>
                <div class="partner-card">Carbon & Environmental Programme Partners</div>
                <div class="partner-card">Landowners and concession holders</div>
                <div class="partner-card">Development organisations and foundations</div>
                <div class="partner-card">Local communities and farmer groups</div>
            </div>
        </div>


        <!-- CTA -->
        <div class="services-cta-container">
            <div class="services-cta">
                <a href="/projects" class="btn-primary">View Our Projects</a>
            </div>
        </div>

    </div>

</section>

@endsection