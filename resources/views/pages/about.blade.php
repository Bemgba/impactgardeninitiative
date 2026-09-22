@extends('layouts.app')
@section('title', 'About Us — Impact Garden Initiative')
@section('description', 'Learn about Impact Garden Initiative — our story, vision, mission, values, and the communities we serve.')

@section('content')

{{-- ── PAGE HERO ────────────────────────────────────────────────────────── --}}
<section class="page-hero">
    <div class="container">
        <p class="page-hero__eyebrow">Who We Are</p>
        <h1 class="page-hero__title">About Impact Garden Initiative</h1>
        <p class="page-hero__subtitle">
            A community-led organisation rooted in the belief that sustainable change starts from the
            ground up — one garden, one family, one community at a time.
        </p>
    </div>
</section>

{{-- ── OUR STORY ────────────────────────────────────────────────────────── --}}
<section class="section">
    <div class="container about-intro">
        <div class="about-intro__text">
            <span class="section__label">Our Story</span>
            <h2 class="section__title" style="margin-top:0.75rem;">How It All Began</h2>
            <p>
                [Organisation background — describe when and why Impact Garden Initiative was founded,
                the founding story, the problem it set out to solve, and the communities it was born from.
                Replace this placeholder with the real narrative when content is available.]
            </p>
            <p>
                [Paragraph 2 — describe the growth of the organisation, early milestones, key partnerships,
                and how the approach evolved over time.]
            </p>
            <p>
                [Paragraph 3 — describe the current scope, geographic reach, and the cumulative
                impact achieved so far.]
            </p>
        </div>
        <div class="about-intro__aside">
            <div class="stat-badge stat-badge--green">
                <span class="stat-badge__value">[Yr]</span>
                <span class="stat-badge__label">Year Founded</span>
            </div>
            <div class="stat-badge stat-badge--lime">
                <span class="stat-badge__value">[N]+</span>
                <span class="stat-badge__label">Communities Reached</span>
            </div>
            <div class="stat-badge stat-badge--earth">
                <span class="stat-badge__value">[N]+</span>
                <span class="stat-badge__label">Programs Running</span>
            </div>
        </div>
    </div>
</section>

{{-- ── VISION / MISSION / VALUES ────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="vmv-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Our Foundation</span>
            <h2 class="section__title" id="vmv-heading">Vision, Mission &amp; Values</h2>
            <p class="section__subtitle">The principles that guide every seed we plant and every community we serve.</p>
        </div>
        <div class="commitment-grid">
            <div class="commitment-card commitment-card--green">
                <div class="commitment-card__icon">🌳</div>
                <h3 class="commitment-card__title">Our Vision</h3>
                <p class="commitment-card__body">
                    [Vision statement placeholder — describe the long-term world or society the
                    organisation is working to create for the communities it serves.]
                </p>
            </div>
            <div class="commitment-card commitment-card--lime">
                <div class="commitment-card__icon">🎯</div>
                <h3 class="commitment-card__title">Our Mission</h3>
                <p class="commitment-card__body">
                    [Mission statement placeholder — describe what the organisation does,
                    for whom, and to what end in one or two clear sentences.]
                </p>
            </div>
            <div class="commitment-card commitment-card--earth">
                <div class="commitment-card__icon">🌱</div>
                <h3 class="commitment-card__title">Our Values</h3>
                <p class="commitment-card__body">
                    Inclusivity · Community Ownership · Sustainability · Transparency ·
                    Innovation · Environmental Responsibility · Dignity &amp; Respect.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ── STRATEGIC OBJECTIVES ─────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="objectives-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Strategic Focus</span>
            <h2 class="section__title" id="objectives-heading">Our Strategic Objectives</h2>
            <p class="section__subtitle">Five clear objectives that direct all our programs and partnerships.</p>
        </div>
        <div class="objectives-list">
            @php
            $objectives = [
                'Strengthen community capacity to design, implement, and sustain local development initiatives.',
                'Promote sustainable food systems, agroecology, and climate-resilient livelihoods.',
                'Empower women and youth as leaders and agents of change in their communities.',
                'Foster partnerships with governments, civil society, and the private sector for scalable impact.',
                'Advocate for inclusive policies that protect the rights and dignity of marginalised communities.',
            ];
            @endphp
            @foreach($objectives as $i => $obj)
            <div class="objective-item">
                <div class="objective-item__num">{{ $i + 1 }}</div>
                <p class="objective-item__text">{{ $obj }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── OUR APPROACH ─────────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="approach-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">How We Work</span>
            <h2 class="section__title" id="approach-heading">Our Approach</h2>
            <p class="section__subtitle">A participatory, community-first methodology that grows from the inside out.</p>
        </div>
        <div class="approach-grid">
            <div class="approach-card approach-card--green">
                <div class="approach-card__num">1</div>
                <div>
                    <h3 class="approach-card__title">Community Listening &amp; Diagnosis</h3>
                    <p class="approach-card__body">We begin by listening — deeply and without assumption. Participatory tools help us understand community needs, assets, and aspirations before any intervention is designed.</p>
                </div>
            </div>
            <div class="approach-card approach-card--lime">
                <div class="approach-card__num">2</div>
                <div>
                    <h3 class="approach-card__title">Co-Design With Communities</h3>
                    <p class="approach-card__body">Programs are designed with communities, not for them. Local knowledge, leadership, and ownership are built into every stage from the very beginning.</p>
                </div>
            </div>
            <div class="approach-card approach-card--earth">
                <div class="approach-card__num">3</div>
                <div>
                    <h3 class="approach-card__title">Implement &amp; Build Capacity</h3>
                    <p class="approach-card__body">We implement alongside communities, transferring skills, tools, and knowledge so that every program leaves behind stronger people and resilient institutions.</p>
                </div>
            </div>
            <div class="approach-card approach-card--gold">
                <div class="approach-card__num">4</div>
                <div>
                    <h3 class="approach-card__title">Learn, Adapt &amp; Scale</h3>
                    <p class="approach-card__body">We rigorously document what works, share lessons openly, and adapt continuously — growing successful models into broader and deeper community impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── GEOGRAPHIC REACH ─────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="reach-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Our Reach</span>
            <h2 class="section__title" id="reach-heading">Where We Work</h2>
        </div>
        <div class="scope-block">
            <div class="scope-block__content">
                <p>
                    [Geographic reach placeholder — describe the states, regions, or countries where
                    the organisation currently operates and any plans for expansion.]
                </p>
                <p style="margin-top:1rem;">
                    [Paragraph 2 — describe specific community or landscape types targeted:
                    rural, peri-urban, pastoral, farming communities, etc.]
                </p>
            </div>
            <div class="scope-map">
                <div class="scope-map__icon">🗺️</div>
                <div class="scope-map__title">[Region / Country]</div>
                <div class="scope-map__sub">[States / Areas of Operation — placeholder]</div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────────────────── --}}
<section class="section section--dark" aria-labelledby="about-cta-heading">
    <div class="container" style="text-align:center; position:relative; z-index:1;">
        <span class="section__label">Partner With Us</span>
        <h2 class="section__title" id="about-cta-heading" style="margin-top:0.75rem;">Ready to grow change together?</h2>
        <p class="section__subtitle" style="margin-bottom:2.25rem;">
            Whether you are a donor, government partner, CSO, or community member —
            there is a place for you in what we are building.
        </p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"  class="btn btn--secondary btn--lg">Get In Touch</a>
            <a href="{{ route('programs') }}" class="btn btn--outline   btn--lg">See Our Programs</a>
        </div>
    </div>
</section>

@endsection
