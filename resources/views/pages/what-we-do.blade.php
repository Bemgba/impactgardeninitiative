@extends('layouts.app')
@section('title', 'What We Do — Impact Garden')
@section('meta_desc', 'Impact Garden\'s three pillars: Governance & Peacebuilding, Community Wellbeing, and Climate Resilience — with a 6-step community process and emerging priorities.')

@section('content')

{{-- ═══ PAGE BANNER ═════════════════════════════════════════════════════ --}}
<section class="hero-banner">
    <div class="hero-banner__leaf" aria-hidden="true"></div>
    <div class="wrap hero-banner__inner">
        <div class="hero-banner__tag">Our Work</div>
        <h1 class="hero-banner__title">
            What We <em>Do</em>
        </h1>
        <p class="hero-banner__sub">
            Inclusive, youth-led and community-driven programmes across three key pillars —
            practical, participatory and built for lasting change.
        </p>
    </div>
</section>

{{-- ═══ THREE PILLARS (FULL DETAIL) ═══════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="pillars-full-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Three Key Pillars</span>
            <h2 class="sec-title" id="pillars-full-heading">
                Our <em>programme pillars.</em>
            </h2>
            <p class="sec-lead">
                We implement inclusive, youth-led and community-driven programmes across
                three interconnected pillars. Each pillar addresses a critical dimension
                of community development and they reinforce each other.
            </p>
        </div>

        {{-- Pillar 1 --}}
        <div style="background:var(--color-card); border-radius:var(--r-xl); overflow:hidden; box-shadow:var(--s-sm); margin-bottom:2rem;" class="reveal">
            <div style="background:linear-gradient(135deg, var(--forest-dark), var(--forest)); padding:2rem 2.5rem; display:flex; align-items:center; gap:1.5rem;">
                <span style="font-size:3rem;" aria-hidden="true">🏛️</span>
                <div>
                    <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--mint); margin-bottom:0.375rem;">Pillar One</div>
                    <h3 style="font-family:var(--font-display); font-size:1.375rem; color:var(--white); line-height:1.3;">
                        Citizen-Centred Governance, Youth Leadership &amp; Peacebuilding
                    </h3>
                </div>
            </div>
            <div style="padding:2rem 2.5rem; display:grid; grid-template-columns:1fr 1fr; gap:2rem; align-items:start;">
                <div>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75; margin-bottom:1rem;">
                        Empowering young people and communities to participate meaningfully in
                        governance, demand accountability and influence the decisions that affect
                        their lives — while building the foundations for sustainable peace.
                    </p>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75;">
                        Through civic education, dialogue facilitation and youth leadership
                        development, we strengthen the link between citizens and the institutions
                        that serve them.
                    </p>
                </div>
                <div>
                    <h4 style="font-size:0.875rem; font-weight:700; text-transform:uppercase; letter-spacing:0.07em; color:var(--forest); margin-bottom:1rem;">Programme Activities</h4>
                    <ul class="pillar-card__list" style="gap:0.625rem;">
                        <li>Civic education and participation</li>
                        <li>Accountability and integrity initiatives</li>
                        <li>Dialogue and social cohesion programmes</li>
                        <li>Conflict prevention and early warning</li>
                        <li>Youth leadership development</li>
                        <li>Community advocacy and engagement</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Pillar 2 --}}
        <div style="background:var(--color-card); border-radius:var(--r-xl); overflow:hidden; box-shadow:var(--s-sm); margin-bottom:2rem;" class="reveal">
            <div style="background:linear-gradient(135deg, #7A3018, var(--terracotta)); padding:2rem 2.5rem; display:flex; align-items:center; gap:1.5rem;">
                <span style="font-size:3rem;" aria-hidden="true">🤝</span>
                <div>
                    <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--terra-light); margin-bottom:0.375rem;">Pillar Two</div>
                    <h3 style="font-family:var(--font-display); font-size:1.375rem; color:var(--white); line-height:1.3;">
                        Community Wellbeing, Inclusion, Culture &amp; Livelihoods
                    </h3>
                </div>
            </div>
            <div style="padding:2rem 2.5rem; display:grid; grid-template-columns:1fr 1fr; gap:2rem; align-items:start;">
                <div>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75; margin-bottom:1rem;">
                        Building the wellbeing, inclusion and sustainable livelihoods of
                        community members — leaving no one behind. We pay particular attention
                        to women, young people, persons with disabilities and other groups
                        facing exclusion.
                    </p>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75;">
                        Culture and heritage are central to our work: we believe that preserving
                        cultural identity strengthens community bonds and creates pathways
                        for creative economic opportunity.
                    </p>
                </div>
                <div>
                    <h4 style="font-size:0.875rem; font-weight:700; text-transform:uppercase; letter-spacing:0.07em; color:var(--terracotta); margin-bottom:1rem;">Programme Activities</h4>
                    <ul class="pillar-card__list" style="gap:0.625rem;">
                        <li>Education and wellbeing support</li>
                        <li>Disability inclusion programmes</li>
                        <li>Skills and entrepreneurship training</li>
                        <li>Cultural preservation and heritage</li>
                        <li>Creative livelihoods and arts</li>
                        <li>Women and girls' empowerment</li>
                        <li>Intergenerational dialogue</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Pillar 3 --}}
        <div style="background:var(--color-card); border-radius:var(--r-xl); overflow:hidden; box-shadow:var(--s-sm);" class="reveal">
            <div style="background:linear-gradient(135deg, var(--sage), var(--sage-light)); padding:2rem 2.5rem; display:flex; align-items:center; gap:1.5rem;">
                <span style="font-size:3rem;" aria-hidden="true">♻️</span>
                <div>
                    <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--forest-dark); margin-bottom:0.375rem;">Pillar Three</div>
                    <h3 style="font-family:var(--font-display); font-size:1.375rem; color:var(--forest-dark); line-height:1.3;">
                        Climate Action &amp; Community Resilience
                    </h3>
                </div>
            </div>
            <div style="padding:2rem 2.5rem; display:grid; grid-template-columns:1fr 1fr; gap:2rem; align-items:start;">
                <div>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75; margin-bottom:1rem;">
                        Protecting the environment and building the capacity of communities
                        to adapt to and recover from climate challenges. We mobilise youth
                        as climate champions and explore nature-based solutions rooted in
                        local knowledge.
                    </p>
                    <p style="font-size:1rem; color:var(--color-text-mid); line-height:1.75;">
                        Our climate work links directly to livelihoods — green economies
                        and sustainable practices that communities can own and sustain
                        long after our programmes conclude.
                    </p>
                </div>
                <div>
                    <h4 style="font-size:0.875rem; font-weight:700; text-transform:uppercase; letter-spacing:0.07em; color:var(--sage); margin-bottom:1rem;">Programme Activities</h4>
                    <ul class="pillar-card__list" style="gap:0.625rem;">
                        <li>Climate awareness and education</li>
                        <li>Conservation and restoration</li>
                        <li>Youth climate action groups</li>
                        <li>Nature-based solutions</li>
                        <li>Green livelihoods and enterprises</li>
                        <li>Environmental advocacy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ HOW WE WORK ═════════════════════════════════════════════════════ --}}
<section class="section section--alt" aria-labelledby="how-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">How We Work</span>
            <h2 class="sec-title" id="how-heading">
                Practical, participatory<br>&amp; <em>community-led.</em>
            </h2>
            <p class="sec-lead">
                Our six-step process ensures every programme is grounded in community
                realities, co-owned by participants and designed for sustainability
                from the very beginning.
            </p>
        </div>

        <div class="process-track">
            @php $steps = [
                ['num'=>'1','label'=>'Listen',           'sub'=>'Understand community needs, assets and aspirations'],
                ['num'=>'2','label'=>'Co-Create',        'sub'=>'Design solutions with communities, not for them'],
                ['num'=>'3','label'=>'Strengthen',       'sub'=>'Build capacity, skills and local leadership'],
                ['num'=>'4','label'=>'Support Action',   'sub'=>'Accompany communities as they implement change'],
                ['num'=>'5','label'=>'Learn',            'sub'=>'Document results, gather feedback and evidence'],
                ['num'=>'6','label'=>'Improve',          'sub'=>'Adapt, scale and share what works'],
            ]; @endphp
            @foreach($steps as $s)
            <div class="step reveal">
                <div class="step__bubble">{{ $s['num'] }}</div>
                <div class="step__label">{{ $s['label'] }}</div>
                <div class="step__sub">{{ $s['sub'] }}</div>
            </div>
            @endforeach
        </div>

        {{-- Approach chips --}}
        <div style="margin-top:3.5rem; text-align:center;">
            <h3 style="font-family:var(--font-display); font-size:1.25rem; color:var(--forest); margin-bottom:1.25rem;">Our Approach Principles</h3>
            <div class="approach-chips" style="justify-content:center;">
                @php $chips = [
                    ['icon'=>'👥','label'=>'Community-led engagement'],
                    ['icon'=>'💪','label'=>'Capacity strengthening'],
                    ['icon'=>'🤝','label'=>'Partnership and collaboration'],
                    ['icon'=>'📊','label'=>'Evidence and learning'],
                    ['icon'=>'🛡️','label'=>'Inclusion and safeguarding'],
                    ['icon'=>'♻️','label'=>'Sustainability'],
                ]; @endphp
                @foreach($chips as $c)
                <span class="chip">
                    <span class="chip__icon" aria-hidden="true">{{ $c['icon'] }}</span>
                    {{ $c['label'] }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══ EMERGING PRIORITIES ═════════════════════════════════════════════ --}}
<section class="section section--sand" aria-labelledby="priorities-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Emerging Priorities</span>
            <h2 class="sec-title" id="priorities-heading">
                What we are <em>preparing to do.</em>
            </h2>
            <p class="sec-lead">
                As a young organisation, Impact Garden is preparing to implement practical,
                locally relevant initiatives across diverse communities. Our priorities will
                be delivered through partnerships, identified needs and available opportunities.
            </p>
        </div>
        <div class="priorities-grid">
            @php $priorities = [
                ['icon'=>'🏛️','title'=>'Citizen-Centred Governance &amp; Youth Leadership',
                 'desc'=>'Empowering young people and communities to participate, demand accountability and influence decisions.'],
                ['icon'=>'☮️','title'=>'Community Peacebuilding',
                 'desc'=>'Promoting dialogue, tolerance and peaceful coexistence within and between communities.'],
                ['icon'=>'♀️','title'=>'Women &amp; Marginalised Groups\' Inclusion',
                 'desc'=>'Advancing equality and inclusion for women, persons with disabilities and other marginalised groups.'],
                ['icon'=>'💼','title'=>'Skills, Livelihoods &amp; Economic Empowerment',
                 'desc'=>'Building skills and supporting sustainable livelihoods for young people and communities.'],
                ['icon'=>'🌿','title'=>'Climate &amp; Environmental Resilience',
                 'desc'=>'Protecting the environment and building community resilience to climate change.'],
                ['icon'=>'🎨','title'=>'Culture, Heritage &amp; Youth Creativity',
                 'desc'=>'Preserving cultural heritage and inspiring youth creativity through arts and digital media.'],
                ['icon'=>'🧠','title'=>'Community Learning &amp; Innovation',
                 'desc'=>'Encouraging local learning, innovation and homegrown solutions to community challenges.'],
            ]; @endphp
            @foreach($priorities as $p)
            <div class="priority-card reveal">
                <div class="priority-card__icon" aria-hidden="true">{{ $p['icon'] }}</div>
                <div>
                    <h3 class="priority-card__title">{!! $p['title'] !!}</h3>
                    <p class="priority-card__desc">{{ $p['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ PARTNERSHIPS ════════════════════════════════════════════════════ --}}
<section class="section section--forest" aria-labelledby="partners-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Partnership for Community Impact</span>
            <h2 class="sec-title" id="partners-heading">
                Sustainable development requires <em>collaboration.</em>
            </h2>
            <p class="sec-lead">
                We value partnerships built on trust, mutual respect and measurable community
                impact. We work across sectors to ensure our programmes are resourced,
                aligned and amplified.
            </p>
        </div>
        <div class="partners-wrap">
            @php $partners = [
                'Development Partners and Donors',
                'Government Institutions',
                'Civil Society Organisations',
                'Youth and Women-Led Groups',
                'Schools and Learning Institutions',
                'Private-Sector Organisations',
                'Media and Research Institutions',
                'Community and Traditional Structures',
            ]; @endphp
            @foreach($partners as $p)
            <div class="partner-tile reveal" style="background:rgba(255,255,255,0.10); border-color:rgba(255,255,255,0.20); color:rgba(255,255,255,0.85);">
                <div class="partner-tile__dot" style="background:var(--gold);"></div>
                {{ $p }}
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA ════════════════════════════════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="wwd-cta-heading">
    <div class="wrap">
        <div class="cta-banner">
            <h2 class="cta-banner__title" id="wwd-cta-heading">
                Want to support our <em>programmes?</em>
            </h2>
            <p class="cta-banner__sub">
                Whether you are a development partner, CSO, government institution or
                community member — there is a role for you in what we are building.
                Reach out and let us explore how we can work together.
            </p>
            <div class="cta-banner__actions">
                <a href="{{ route('contact') }}" class="btn btn-sage btn-lg">Contact Us</a>
                <a href="{{ route('about') }}"   class="btn btn-outline btn-lg">About Impact Garden</a>
            </div>
        </div>
    </div>
</section>

@endsection
