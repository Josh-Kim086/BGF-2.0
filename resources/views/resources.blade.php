@extends('layouts.app')

@section('title', 'Resources & Downloads')

@section('content')

<!-- HERO -->
<section class="resources-hero">
    <div class="resources-hero-overlay">
        <h1>Resources & Downloads</h1>
        <p>
            Access corporate documents, technical resources, publications,
            and forestry knowledge materials from Better Globe Forestry.
        </p>
    </div>
</section>

<!-- CORPORATE INFORMATION -->
<section class="resources-section">
    <div class="container">

        <div class="section-header">
            <h2>Corporate Information</h2>
            <p>
                Download key corporate documents that provide an overview of
                Better Globe Forestry's operations, experience, and delivery model.
            </p>
        </div>

        <div class="resource-grid">

            <div class="resource-card">
                <h3>BGF Corporate Presentation</h3>
                <p>
                    A concise overview of Better Globe Forestry, its implementation
                    model, operational footprint, experience, and programme delivery
                    approach.
                </p>

              <a href="{{ asset('downloads/Corporate-Presentation.pdf') }}"
   target="_blank"
   class="btn-primary">
    Download Presentation
</a>
        
            </div>

            <div class="resource-card">
                <h3>BGF Factsheet</h3>
                <p>
                    A short summary of BGF's history, scale, countries of operation,
                    core services, and current programme footprint.
                </p>
             <a href="{{ asset('downloads/BGF-Fact-sheet.pdf') }}"
   target="_blank"
   class="btn-primary">
    Download Fact Sheet
</a>
                
            </div>

            <div class="resource-card">
                <h3>BGF Capability Statement</h3>
                <p>
                    An institutional overview of BGF's forestry implementation
                    capacity, service areas, geographic experience, and partnership model.
                </p>

                <span class="coming-soon">
                    Available Soon
                </span>
            </div>

        </div>

    </div>
</section>

<!-- TECHNICAL RESOURCES -->
<section class="resources-section alt-bg">
    <div class="container">

        <div class="section-header">
            <h2>Technical Resources</h2>
            <p>
                Forestry implementation knowledge, technical guidance,
                and supporting reference materials.
            </p>
        </div>

        <div class="resource-grid">

            <div class="resource-card">
                <h3>Selected Miti Articles</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

            <div class="resource-card">
                <h3>Dryland Forestry Notes</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

            <div class="resource-card">
                <h3>Agroforestry Guides</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

            <div class="resource-card">
                <h3>Species Fact Sheets</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

        </div>

    </div>
</section>

<!-- PUBLICATIONS -->
<section class="resources-section">
    <div class="container">

        <div class="section-header">
            <h2>Publications</h2>
            <p>
                Publications, case studies, and research materials that
                support forestry and landscape restoration initiatives.
            </p>
        </div>

        <div class="resource-grid">

            <div class="resource-card">
                <h3>Miti Magazine Editions</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

            <div class="resource-card">
                <h3>Research Papers</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

            <div class="resource-card">
                <h3>Case Studies</h3>
                <span class="coming-soon">Coming Soon</span>
            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="resources-cta">
    <div class="container">
        <h2>Need More Information?</h2>
        <p>
            Contact Better Globe Forestry to learn more about our programmes,
            implementation experience, and partnership opportunities.
        </p>

        <a href="{{ route('contact') }}" class="btn-primary">
            Contact Us
        </a>
    </div>
</section>

@endsection