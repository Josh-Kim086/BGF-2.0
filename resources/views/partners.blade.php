@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="partners-hero">
    <div class="partners-hero-overlay">

        <h1>Partners & Ecosystem</h1>

        <p>
            Building long-term forestry programmes through structured partnerships
        </p>

    </div>
</section>


<!-- INTRO -->
<section class="partners-section"
         style="padding:35px 20px; max-width:1000px; margin:auto;">

    <p class="partners-intro">
        Better Globe Forestry operates within a structured ecosystem of programme,
        technical, institutional, and community partners supporting long-term
        forestry and agroforestry programmes.
    </p>

    <div class="info-box-container">

        <div class="info-box">
            Ownership & Financing
        </div>

        <div class="info-box">
            Operational Implementation
        </div>

        <div class="info-box">
            Community Participation
        </div>

    </div>

</section>


<!-- BGFF + BGF MODEL -->
<section style="padding:40px 20px; max-width:1100px; margin:auto;">

    <h2 style="text-align:center;">BGFF + BGF Model</h2>

    <div class="cards"
         style="margin-top:45px; align-items:center;">

        <!-- BGFF -->
        <div class="card">

            <img src="/images/bgfflogo.png"
                 alt="BGFF Logo"
                 style="max-width:120px; margin-bottom:20px;">

            <h3>BGFF</h3>

            <p>
                <strong>Public-Interest Steward</strong>
            </p>

            <p>
                Programme structuring,
                governance,
                donor alignment,
                transparency,
                and long-term stewardship.
            </p>

        </div>

        <!-- ARROW -->
        <div style="
            font-size:40px;
            color:#02490b;
            font-weight:700;
            padding:10px;">
            →
        </div>

        <!-- BGF -->
        <div class="card">

            <img src="/images/bgflogo.webp"
                 alt="BGF Logo"
                 style="max-width:120px; margin-bottom:20px;">

            <h3>BGF</h3>

            <p>
                <strong>Operational Execution</strong>
            </p>

            <p>
                Forestry implementation,
                field delivery,
                programme management,
                reporting,
                and long-term operational continuity.
            </p>

        </div>

    </div>


    <h2 class="small-heading">
        Why Partnership Matters
    </h2>

    <p>
        Forestry and landscape restoration require long-term collaboration between
        communities, technical experts, institutions, investors, and implementation partners.

        BGF operates within structured partnership frameworks designed to support
        continuity, accountability, and measurable long-term impact.

        Programme frameworks define governance and ownership,
        while BGF delivers implementation and long-term field management.
    </p>

</section>


<!-- FLOW SECTION -->
<section class="flow-section">

    <div class="flow-overlay">

        <h3>Programme Flow</h3>

        <p>
            <strong>
                Partners → BGFF / Programme Layer → BGF → Communities
            </strong>
        </p>

    </div>

</section>





    <!-- PARTNER CATEGORIES -->

    <div class="info-box-container"
         style="margin-top:40px;">

        <div class="info-box">
            Research Institutions
        </div>

        <div class="info-box">
            Public Agencies
        </div>

        <div class="info-box">
            NGOs & Development Organisations
        </div>

        <div class="info-box">
            Technical Specialists
        </div>

        <div class="info-box">
            Communities & Farmer Groups
        </div>

    </div>

</section>


<!-- COMMUNITIES SECTION -->

<section style="
padding:40px 20px;
max-width:1100px;
margin:auto;">

    <h2>
        Communities & Land Stewardship
    </h2>

    <p>
        Community participation forms an important layer within structured
        forestry programmes.

        BGF works with farmers, local stakeholders,
        and community groups through organised participation,
        agroforestry systems,
        and land stewardship approaches aligned with programme frameworks.
    </p>

</section>



<div style="position:relative;">

    <img src="{{ asset('images/20221005_125859.jpg') }}"
         alt="Communities & Land Stewardship"
         style="
         width:100%;
         height:450px;
         object-fit:cover;
         border-radius:18px;
         ">

    <div style="
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.25);
        border-radius:18px;
        display:flex;
        align-items:flex-end;
        padding:35px;
        color:white;
        font-size:22px;
        font-weight:600;
    ">
       
    </div>

</div>




<!-- LOGO GRID -->
<section style="
padding:30px 20px;
max-width:900px;
margin:auto;
text-align:center;">

    <h2>
        Selected Programme & Institutional Partners
    </h2>

    <!-- TPS -->

    <div class="card"
         style="
         margin:30px auto 0;
         max-width:400px;">

        <img src="/images/image.png"
             alt="TPS Logo"
             style="max-width:70px; margin-bottom:16px;">

        <h3>Tree Partner Solutions (TPS)</h3>

        <p>
            Long-term programme partner supporting forestry implementation,
            monitoring, and operational scaling.
        </p>

    </div>

    <p>
        BGF collaborates with a range of institutional,
        academic, and technical partners across its programmes.
    </p>

    <div style="
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:30px;
        margin-top:35px;
        align-items:center;
        justify-items:center;">

        <img src="/images/kfs logo.png"
             alt="KFS"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

        <img src="/images/kefri.png"
             alt="KEFRI"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

        <img src="/images/cifor.png"
             alt="CIFOR"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

        <img src="/images/ghent.png"
             alt="Ghent University"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

        <img src="/images/uoe.png"
             alt="University of Eldoret"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

        <img src="/images/jica.png"
             alt="JICA"
             style="
             width:120px;
             height:80px;
             object-fit:contain;">

    </div>

    <p style="
        margin-top:30px;
        font-size:14px;
        color:#555;
        font-style:italic;">

        Logos shown represent selected collaborations
        and do not imply ownership or exclusive partnerships.

    </p>

</section>

@endsection