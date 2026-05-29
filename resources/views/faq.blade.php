@extends('layouts.app')
@section('content')

<section class="faq-section">

    <div class="faq-container">

        <!-- LEFT: FAQ -->
        <div class="faq-left">

            <h2>Frequently Asked Questions</h2>

           @php
$faqs = [

[
"q" => "What is Better Globe Forestry (BGF)?",
"a" => "Better Globe Forestry is a forestry implementation platform. We design, implement, and manage structured forestry and agroforestry programmes in East Africa in collaboration with partners and programme structures. Our role is to deliver operational execution within governed programme frameworks."
],

[
"q" => "What does 'implementation platform' mean?",
"a" => "An implementation platform is an organisation that does not own projects or programme assets by default, does not act as a project promoter or asset seller, and focuses on professional execution. BGF provides site establishment, maintenance, farmer integration, and monitoring, enabling partners to deploy programmes without building operational capacity."
],

[
"q" => "How is BGF different from a traditional forestry company?",
"a" => "Traditional forestry companies often combine ownership, development, and operations. BGF focuses on implementation and operational delivery within separately structured programmes."
],

[
"q" => "Does BGF sell trees or forestry assets?",
"a" => "No. BGF does not sell trees as assets or transfer ownership rights. References to trees are operational and programme-related."
],

[
"q" => "Who owns the projects or programmes?",
"a" => "Ownership depends on programme structure. Public-interest programmes may be stewarded through BGFF, while commercial programmes may be held by partners, project entities, or SPVs. BGF acts as implementation partner."
],

[
"q" => "How does BGF relate to BGFF?",
"a" => "BGFF focuses on public-interest programme stewardship and governance, while BGF delivers operational implementation and field execution. The two organisations collaborate within structured programme frameworks while maintaining distinct roles."
],

[
"q" => "How does BGF work with partners?",
"a" => "Partners define objectives, programme structures, and funding frameworks, while BGF delivers implementation, field management, and reporting."
],

[
"q" => "In which countries does BGF operate?",
"a" => "BGF currently operates in Kenya and Uganda, with experience in dryland forestry systems."
],

[
"q" => "What types of programmes does BGF implement?",
"a" => "BGF implements forestry, agroforestry, landscape restoration, and community-based programmes."
],

[
"q" => "How does BGF ensure credibility and accountability?",
"a" => "Through structured frameworks, contract-based implementation, monitoring systems, and auditable processes."
],

[
"q" => "What is the role of BGFF?",
"a" => "BGFF focuses on public-interest programme stewardship, supports donor alignment and programme governance, and ensures structured oversight. BGF acts as the implementation partner."
],

[
"q" => "Can BGF support carbon or climate projects?",
"a" => "Yes, in implementation. BGF supports afforestation and agroforestry programmes but does not issue or trade carbon credits."
],

[
"q" => "Why work with BGF?",
"a" => "BGF combines dryland forestry experience, operational execution capacity, structured delivery systems, and long-term programme management capability."
],

[
"q" => "How can organisations engage with BGF?",
"a" => "Engagement starts with defining objectives, programme structures, and implementation requirements. BGF supports planning and operational delivery."
],

[
"q" => "Is BGF dependent on a single partner?",
"a" => "No. BGF collaborates with multiple partners and continues expanding its implementation ecosystem."
],

];
@endphp

            @foreach($faqs as $index => $faq)
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        {{ $faq['q'] }}
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="faq-answer">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- RIGHT: IMAGE -->
        <div class="faq-right">

    <img src="{{ asset('images/487510497_1164982788754016_2733763825556859864_n.jpg') }}" alt="FAQ Image 1">

    <img src="{{ asset('images/ikk.jpg') }}" alt="FAQ Image 2">

    

</div>



</section>

@endsection