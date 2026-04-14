@extends('layouts.app')

@section('content')

<section class="services-page">

    <!-- HERO -->
    <div class="services-hero">
        <div class="container">
        <h1>Our Services</h1>
        <h3>Professional Forestry Implementation and Management Services</h3>
        

        <a href="/projects" class="btn-primary">Explore Our Projects</a>
        </div>
    </div>


    <!-- INTRO POSITIONING -->
    <div class="services-intro">
        <h2>What We Provide</h2>
        <p>
            Better Globe Forestry Ltd provides professional forestry and agroforestry services
             across the full lifecycle of project development and implementation.
            We act as an implementation and management platform, supporting partners, investors, 
            and landholders through structured project arrangements, ensuring technical quality,
             operational continuity, and transparent reporting.
        </p>
    </div>


    <!-- SERVICES GRID -->
    <div class="services-grid">

        <!-- Service 1 -->
        <div class="service-card">
            <h3>Forestry Project Development</h3>
            <p>Preparation and structuring of forestry projects from concept to implementation readiness.
                Feasibility studies, Site management and species selection.Also Environmental and social 
                assessment.Project design and planning while structuring support with partners & SPVs.
            </p>
           
        </div>

        <!-- Service 2 -->
        <div class="service-card">
            <h3>Forestry Implementation & Operations</h3>
            <p>End-to-end implementation of forestry and agroforestry projects in the field.
                Nursery operations and seedling production, Land preparation and planting. Field 
                supervision and workforce management. Maintenance and protection for operational continuity
            </p>
        </div>

        <!-- Service 3 -->
        <div class="service-card">
            <h3>Monitoring, Reporting & Asset Management</h3>
            <p>Ongoing monitoring and management of forestry assets over time. Survival tracking and growth
                monitoring,We also have inventory systems,Operational reporting, Data collection and verification and
                performance tracking.
            </p>
        </div>

        <!-- Service 4 -->
        <div class="service-card">
            <h3>Community & Agroforestry Integration</h3>
            <p>Integration of forestry activities with local communities and land systems. Farmers engagement and
                agreements and Agroforestry systems. We also have training and capacity building through local participation
                structures and Land stewardship support.
            </p>
        
        </div>

    </div>


    <!-- HOW SERVICES ARE DELIVERED -->
    <div class="services-delivery">
        <h2>How Our Services Are Delivered</h2>
        <p>
            BGF delivers its services within structured project frameworks that may involve investors, landholders,
             carbon partners, and public-interest entities.Assets may be held by dedicated project structures (e.g SPVs).
             BGF operates as the implementing and management partner.Its roles and responsibilities are defined contractually.
             This approach ensures clarity of ownership and responsibilities, strong governance and transparency and a 
             long-term operational reliability.
            </p>
    </div>


    <div class="services-partners">

    <div class="partners-image">
        <img src="{{ asset('images/img6.JPG') }}" alt="Our Partners">
    </div>


    <!-- WHO WE WORK WITH -->
    <div class="services-partners">
        <h2>Who We Work With</h2>

        <div class="partners-container">
        <div class="partner-card">Investors and project developers</div>
        <div class="partner-card">Carbon project partners</div>
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



</section>

@endsection