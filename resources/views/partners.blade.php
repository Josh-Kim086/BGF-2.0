@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="partners-hero">
    <div class="partners-hero-overlay">
        <h1>Partners</h1>
        <p>Sustainable Forestry Solutions For Better Tommorow</p>
    </div>
</section>

<!-- PARTNERS GRID -->
<section class="partners-section">
    <div class="partners-grid">

        <!-- BGFF -->
        <div class="partner-card">
            <img src="/images/img" alt="BGFF">
            <h3>Better Globe Forestry Foundation (BGFF)</h3>
            <p>
                The non-profit arm of Better Globe Forestry focused on sustainable development,
                community upliftment, and environmental restoration.
            </p>
        </div>

        <!-- CIFOR -->
        <div class="partner-card">
            <img src="/images/cifor.png" alt="CIFOR">
            <h3>CIFOR-ICRAF</h3>
            <p>
                Collaboration on agroforestry research and climate-smart forestry,
                including support for Miti Magazine.
            </p>
        </div>

        <!-- CHILD AFRICA -->
        <div class="partner-card">
            <img src="/images/childafrica.png" alt="Child Africa">
            <h3>Child Africa</h3>
            <p>
                Works with BGFF to integrate tree planting and environmental education
                into school programs in Uganda.
            </p>
        </div>

        <!-- GHENT -->
        <div class="partner-card">
            <img src="/images/ghent.png" alt="Ghent University">
            <h3>Ghent University</h3>
            <p>
                Applied research partner in dryland forestry including Melia volkensii trials
                and ecosystem restoration studies.
            </p>
        </div>

        <!-- JICA -->
        <div class="partner-card">
            <img src="/images/jica.png" alt="JICA">
            <h3>JICA</h3>
            <p>
                Supports dryland forestry development through technical collaboration,
                knowledge exchange, and research support.
            </p>
        </div>

        <!-- KEFRI -->
        <div class="partner-card">
            <img src="/images/kefri.png" alt="KEFRI">
            <h3>Kenya Forestry Research Institute</h3>
            <p>
                Provides scientific research support on species, pest control,
                and carbon monitoring for sustainable forestry. :contentReference[oaicite:0]{index=0}
            </p>
        </div>

        <!-- KFS -->
        <div class="partner-card">
            <img src="/images/kfs.png" alt="KFS">
            <h3>Kenya Forest Service</h3>
            <p>
                Supports regulatory compliance and sustainable forest management
                across public lands in Kenya. :contentReference[oaicite:1]{index=1}
            </p>
        </div>

        <!-- TPS -->
        <div class="partner-card">
            <img src="/images/tps.png" alt="TPS">
            <h3>Tree Partner Solutions (TPS)</h3>
            <p>
                Principal planting partner and investor supporting large-scale
                afforestation and digital monitoring of trees.
            </p>
        </div>

    </div>
</section>

@endsection