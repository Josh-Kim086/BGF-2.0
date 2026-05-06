@extends('layouts.app')

@section('content')
<section id="about-us" style="padding: 40px;">
    <div style="max-width: 1200px; margin: auto;">

    <h1 style="text-align: center; margin-bottom: 30px;">About Us</h1>

    <!-- Image + Text Row -->
    <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center; margin-bottom: 30px;">

        <!-- Image -->
        <div style="flex: 1; min-width: 300px;">
            <img src="{{ asset('images/DJI_0177.JPG') }}" 
                 alt="About Us Image" 
                 style="width: 100%; height: auto; border-radius: 10px;">
        </div>

        <!-- Text -->
        <div style="flex: 1; min-width: 280px;">
            <p class="text-block">
                Better Globe Forestry (BGF) is an implementation platform for large-scale forestry and agroforestry programmes in dryland environments.
                We design, implement, and manage programmes on behalf of partners, investors, and institutions, combining forestry science, field execution, and community engagement to deliver measurable environmental and socio-economic outcomes.
            </p>
        </div>

    </div>

    <!-- WHAT BGF IS (NEW SECTION) -->
    <div style="margin-top: 20px;">
        <h2 style="text-align: center;">What BGF Is</h2>
        <p class="text-block">
            BGF is a forestry implementation platform enabling partners, investors, and institutions to design, fund, and execute large-scale forestry programmes in dryland environments.
        </p>
    </div>

    <div id="our-role" style="margin-top: 40px;">
        <h2 style="text-align: center;">Our Role</h2>

        <p class="text-block">
            BGF acts as an independent execution partner within structured forestry programmes. 
            We design forestry and agroforestry systems adapted to local conditions, implement planting, maintenance and protection activities, and manage long-term field operations. 
            Our role includes performance monitoring, structured reporting, and ensuring compliance with applicable standards and best practices.
        </p>
    </div>

    <div id="how-we-work" class="how-we-work-section">
        <h2>How We Work</h2>
        <p>
            Our model is based on a clear separation between ownership, funding, and execution.
            Partners and investors provide capital and strategic direction, project structures (including SPVs) define ownership and economic rights, and Better Globe Forestry executes and manages operations.
            This approach ensures clarity, strong governance, and long-term sustainability of forestry assets.
        </p>

        <div class="experience-image-container">
            <img src="{{ asset('images/20221130_111451.jpg') }}" 
                 alt="Our Experience Image" 
                 class="experience-image">
        </div>
    </div>

    <div id="Experience">
        <h2>Our Experience</h2>
        <p>
            Over 20 years of execution in dryland forestry, with large-scale plantations and thousands of farmers engaged across Kenya and Uganda. 
            Our work includes land restoration, agroforestry integration, and long-term programme implementation supported by strong field presence and technical systems.
        </p>
    </div>

    <div>
        <h2>Institutional Evolution</h2>
        <p>
            Better Globe Forestry is transitioning from an entrepreneurial forestry developer to a structured, institution-grade platform. 
            This includes project-based and SPV-based structures, clearer separation between ownership, financing, and operations, and strengthened governance and reporting frameworks. 
            This transition positions BGF as a neutral, professional execution platform within multi-partner programmes.
        </p>

        <div class="institution-image-container">
            <img src="{{ asset('images/image5.webp') }}" 
                 alt="Institutional Evolution Image" 
                 class="institution-image">
        </div>
    </div>

    <!-- WHO WE WORK WITH (NEW SECTION) -->
   <div style="margin-top: 40px; text-align: center;">
    <h2>Who We Work With</h2>

    <ul class="relationship-list" style="display: inline-block; text-align: left;">
        <li>Institutional partners</li>
        <li>Corporates (ESG, carbon, supply chain)</li>
        <li>Investors</li>
        <li>Development partners</li>
    </ul>
</div>

    <div class="about-relationship-section">
        <h2>Relationship with the Foundation</h2>
        <p>
            Better Globe Forestry operates alongside the Better Globe Forestry Foundation (BGFF), an independent public-interest entity.
        </p>

        <div class="relationship-container">
            <ul class="relationship-list">
                <li style="--i:0;">BGFF structures and manages public-interest programmes</li>
                <li style="--i:1;">BGF acts as an independent implementation partner</li>
                <li style="--i:2;">BGF executes forestry while BGFF manages programmes, with both operating under separate mandates and governance structures</li>
            </ul>
        </div>
    </div>


    <div id="Vision">
        <h2>Our Vision</h2>
        <p>
            To contribute to the transformation of dryland landscapes into productive, resilient ecosystems that generate long-term environmental, social, and economic value.
        </p>
    </div>

    <div>
        <h2>Our Mission</h2>
        <p>
            To design, implement, and manage sustainable forestry and agroforestry programmes in collaboration with partners, communities, and investors, delivering measurable impact and value.
        </p>
    </div>

    <section class="ecosystem-section">

        <!-- LEFT: Diagram -->
        <div class="ecosystem">
            <h2 style="text-align:center;">Operational Model</h2>

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
                    <p>(Execution & management)</p>
                </div>

                <div class="eco-arrow">↓</div>

                <div class="eco-box farmers">
                    <strong>FARMERS & COMMUNITIES</strong>
                    <p>(Participation & livelihoods)</p>
                </div>
            </div>
        </div>

        <!-- RIGHT: Text -->
        <div class="ecosystem-text">
            <h2>Ecosystem</h2>

            <p>
                Better Globe Forestry operates within a structured ecosystem designed to ensure clarity, transparency, and long-term sustainability. 
                Partners and investors support projects through capital, land, or strategic collaboration, while structured project vehicles define ownership and rights. 
                BGF executes and manages operations, with farmers and communities participating through structured agreements.
            </p>
        </div>

    </section>

    <section class="bgf-diagram">
        <h2>BGF & BGFF STRUCTURE</h2>

        <div class="diagram">

            <!-- Top layer -->
            <div class="row">
                <div class="box">Investors & Partners</div>
                <div class="box">BGFF - Public Interest Layer<br><small>(Foundation / Donor Programmes)</small></div>
            </div>

            <!-- Middle -->
            <div class="row center">
                <div class="box highlight">Special Purpose Vehicles (SPVs)</div>
            </div>

            <!-- Bottom split -->
            <div class="row split">

                <!-- Left branch -->
                <div class="branch">
                    <div class="box">Execution – BGF</div>

                    <div class="row">
                        <div class="box small">Programme Implementation</div>
                        <div class="box small">Reporting & Monitoring<br><small>(Inventory System)</small></div>
                    </div>
                </div>

                <!-- Right branch -->
                <div class="branch">
                    <div class="box">Participation Layer<br><small>(Farmers & Land Stewardship)</small></div>

                    <div class="row">
                        <div class="box small">Land Stewardship</div>
                        <div class="box small">Agroforestry Integration</div>
                    </div>
                </div>

            </div>

        </div>

        <div class="diagram-footer">
            <b><p>info@betterglobeforestry.com</p></b>
            <b><p>www.betterglobeforestry.com</p></b>
        </div>
    </section>

</section>
@endsection