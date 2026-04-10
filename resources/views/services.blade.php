@extends('layouts.app')

@section('content')

<section class="services-page">

    <!-- HERO -->
    <div class="services-hero">
        <h1>Our Services</h1>
        <h3>Professional Forestry Implementation and Management Services</h3>
        <p>
            Delivering forestry projects through technical expertise, structured partnerships, and long-term operational commitment.
        </p>

        <a href="/projects" class="btn-primary">Explore Our Projects</a>
    </div>


    <!-- INTRO POSITIONING -->
    <div class="services-intro">
        <h2>What We Provide</h2>
        <p>
            Better Globe Forestry Ltd provides professional forestry and agroforestry services across the full lifecycle of project development and implementation.
        </p>
        <p>
            We act as an implementation and management platform, supporting partners, investors, and landholders through structured project arrangements, ensuring technical quality, operational continuity, and transparent reporting.
        </p>
    </div>


    <!-- SERVICES GRID -->
    <div class="services-grid">

        <!-- Service 1 -->
        <div class="service-card">
            <h3>Forestry Project Development</h3>
            <p>Preparation and structuring of forestry projects from concept to implementation readiness.</p>
            <ul>
                <li>Feasibility studies</li>
                <li>Site assessment and species selection</li>
                <li>Environmental and social assessments</li>
                <li>Project design and planning</li>
                <li>Structuring support (with partners/SPVs)</li>
            </ul>
            <span class="role">BGF Role: Technical developer and advisor</span>
        </div>

        <!-- Service 2 -->
        <div class="service-card">
            <h3>Forestry Implementation & Operations</h3>
            <p>End-to-end implementation of forestry and agroforestry projects in the field.</p>
            <ul>
                <li>Nursery operations and seedling production</li>
                <li>Land preparation and planting</li>
                <li>Field supervision and workforce management</li>
                <li>Maintenance and protection</li>
                <li>Operational continuity</li>
            </ul>
            <span class="role">BGF Role: Primary implementer and operator</span>
        </div>

        <!-- Service 3 -->
        <div class="service-card">
            <h3>Monitoring, Reporting & Asset Management</h3>
            <p>Ongoing monitoring and management of forestry assets over time.</p>
            <ul>
                <li>Survival tracking and growth monitoring</li>
                <li>Inventory systems</li>
                <li>Operational reporting</li>
                <li>Data collection and verification</li>
                <li>Performance tracking</li>
            </ul>
            <span class="role">BGF Role: Manager and reporting platform</span>
        </div>

        <!-- Service 4 -->
        <div class="service-card">
            <h3>Community & Agroforestry Integration</h3>
            <p>Integration of forestry activities with local communities and land systems.</p>
            <ul>
                <li>Farmer engagement and agreements</li>
                <li>Agroforestry systems</li>
                <li>Training and capacity building</li>
                <li>Local participation structures</li>
                <li>Land stewardship support</li>
            </ul>
            <span class="role">BGF Role: Programme implementer (with communities)</span>
        </div>

    </div>


    <!-- HOW SERVICES ARE DELIVERED -->
    <div class="services-delivery">
        <h2>How Our Services Are Delivered</h2>
        <p>
            BGF delivers its services within structured project frameworks that may involve investors, landholders, carbon partners, and public-interest entities.
        </p>

        <ul>
            <li>Assets may be held by dedicated project structures (e.g. SPVs)</li>
            <li>BGF operates as the implementing and management partner</li>
            <li>Roles and responsibilities are defined contractually</li>
        </ul>

        <p>
            This approach ensures clarity of ownership and responsibilities, strong governance and transparency, and long-term operational reliability.
        </p>
    </div>


    <!-- WHO WE WORK WITH -->
    <div class="services-partners">
        <h2>Who We Work With</h2>
        <ul>
            <li>Investors and project developers</li>
            <li>Carbon project partners</li>
            <li>Landowners and concession holders</li>
            <li>Development organisations and foundations</li>
            <li>Local communities and farmer groups</li>
        </ul>
    </div>


    <!-- CTA -->
    <div class="services-cta">
        <h2>See Our Work in Practice</h2>
        <p>Explore how these services are applied across our forestry projects.</p>
        <a href="/projects" class="btn-primary">View Our Projects</a>
    </div>


    <!-- FOOTER NOTE -->
    <div class="services-note">
        <p>
            Better Globe Forestry Ltd provides forestry implementation and management services. Ownership of land, trees, carbon credits, or financial returns depends on project-specific contractual arrangements.
        </p>
    </div>

</section>

@endsection