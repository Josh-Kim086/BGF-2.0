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
                    "a" => "Better Globe Forestry is a forestry implementation platform. We design, implement and manage large-scale forestry and agroforestry programmes in East Africa, in collaboration with partners and programme structures. Our role is to deliver execution on the ground, within structured and governed programme frameworks."
                ],
                [
                    "q" => "What does 'implementation platform' mean?",
                    "a" => "An implementation platform is an organisation that does not own projects by default, does not act as a project promoter or asset seller, and focuses on professional execution. BGF provides site establishment, maintenance, farmer integration, and monitoring, enabling partners to deploy programmes without building operational capacity."
                ],
                [
                    "q" => "How is BGF different from a traditional forestry company?",
                    "a" => "Traditional forestry companies often own land and generate revenue from timber. BGF acts as a service-based implementation partner. Projects are structured separately, and BGF delivers execution under contract, ensuring flexibility, clarity, and scalability."
                ],
                [
                    "q" => "Does BGF sell trees or forestry assets?",
                    "a" => "No. BGF does not sell trees or ownership rights. All references to trees are operational, not commercial."
                ],
                [
                    "q" => "Who owns the projects or programmes?",
                    "a" => "Ownership depends on the structure. Public programmes are owned by BGFF, while commercial programmes are owned by partners or SPVs. BGF acts as the implementation partner."
                ],
                [
                    "q" => "How does BGF work with partners?",
                    "a" => "Partners define programmes, secure funding, and contract BGF. BGF then delivers implementation and reporting."
                ],
                [
                    "q" => "In which countries does BGF operate?",
                    "a" => "BGF operates in Kenya and Uganda, focusing on dryland forestry systems."
                ],
                [
                    "q" => "What types of programmes does BGF implement?",
                    "a" => "BGF implements programmes combining forest restoration, agroforestry, community engagement, and environmental restoration."
                ],
                [
                    "q" => "How does BGF ensure credibility and accountability?",
                    "a" => "Through structured frameworks, contract-based delivery, monitoring systems, and auditable processes."
                ],
                [
                    "q" => "What is the role of BGFF?",
                    "a" => "BGFF designs and owns public-interest programmes, manages donor funding, and ensures governance. BGF acts as the implementation partner."
                ],
                [
                    "q" => "Can BGF support carbon or climate projects?",
                    "a" => "Yes, in implementation. BGF supports afforestation and agroforestry but does not issue or trade carbon credits."
                ],
                [
                    "q" => "Why work with BGF?",
                    "a" => "BGF offers strong execution capacity, structured delivery, dryland expertise, and alignment with ESG requirements."
                ],
                [
                    "q" => "How can organisations engage with BGF?",
                    "a" => "Engagement starts with discussion, defining objectives, and structuring programmes. BGF supports planning and execution."
                ],
                [
                    "q" => "Is BGF dependent on a single partner?",
                    "a" => "No. BGF works with multiple partners and continues to expand its structured implementation model."
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

    <img src="{{ asset('images/img12.jpg') }}" alt="FAQ Image 1">

    <img src="{{ asset('images/img11.jpg') }}" alt="FAQ Image 2">

    

</div>



</section>

@endsection