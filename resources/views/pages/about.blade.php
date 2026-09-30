@extends('layouts.app')
@section('title', 'About Us — Impact Garden')
@section('meta_desc', 'Learn about Impact Garden for Community Development Initiative — our vision, mission, values, governance and accountability.')

@section('content')

{{-- ═══ PAGE BANNER ═════════════════════════════════════════════════════ --}}
<section class="hero-banner">
    <div class="hero-banner__leaf" aria-hidden="true"></div>
    <div class="wrap hero-banner__inner">
        <div class="hero-banner__tag">Our Story</div>
        <h1 class="hero-banner__title">
            About <em>Impact Garden</em>
        </h1>
        <p class="hero-banner__sub">
            A non-profit organisation supporting young people and marginalised communities
            to lead peaceful, inclusive and sustainable development.
        </p>
    </div>
</section>

{{-- ═══ WHO WE ARE ══════════════════════════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="who-about-heading">
    <div class="wrap">
        <div class="about-split">
            <div class="about-split__text">
                <span class="sec-tag">Who We Are</span>
                <h2 class="sec-title" id="who-about-heading" style="margin-bottom:1.25rem;">
                    Rooted in community.<br><em>Focused on impact.</em>
                </h2>
                <p>
                    Impact Garden is a non-profit organisation that supports young people and
                    marginalised communities to lead peaceful, inclusive and sustainable
                    development.
                </p>
                <p>
                    Registered as an Incorporated Trustee, the organisation is designed to
                    implement community-centred initiatives across diverse contexts. Our core
                    focus is peacebuilding, citizen-centred governance, inclusion and resilience.
                </p>
                <p>
                    Our approach is youth- and community-centred — we walk alongside communities,
                    not ahead of them. We listen before we act, and we build for sustainability
                    from the very first day.
                </p>
            </div>
            <div class="fact-stack">
                <div class="fact-card reveal">
                    <div class="fact-card__icon">🏛️</div>
                    <div>
                        <div class="fact-card__label">Legal Status</div>
                        <div class="fact-card__value">Incorporated Trustee</div>
                    </div>
                </div>
                <div class="fact-card reveal">
                    <div class="fact-card__icon">📍</div>
                    <div>
                        <div class="fact-card__label">Head Office</div>
                        <div class="fact-card__value">Abuja, Nigeria</div>
                    </div>
                </div>
                <div class="fact-card reveal">
                    <div class="fact-card__icon">🎯</div>
                    <div>
                        <div class="fact-card__label">Core Focus</div>
                        <div class="fact-card__value">Peacebuilding · Governance · Inclusion · Resilience</div>
                    </div>
                </div>
                <div class="fact-card reveal">
                    <div class="fact-card__icon">👥</div>
                    <div>
                        <div class="fact-card__label">Approach</div>
                        <div class="fact-card__value">Youth- and community-centred</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ VISION / MISSION ════════════════════════════════════════════════ --}}
<section class="section section--forest" aria-labelledby="vmg-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Our Foundation</span>
            <h2 class="sec-title" id="vmg-heading">Vision &amp; Mission</h2>
        </div>
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem;">
            <div style="background:rgba(255,255,255,0.10); border:1px solid rgba(255,255,255,0.18); border-radius:var(--r-xl); padding:2.5rem 2rem;">
                <div style="font-size:2.5rem; margin-bottom:1rem;" aria-hidden="true">🌍</div>
                <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--gold); margin-bottom:0.625rem;">Vision</div>
                <h3 style="font-family:var(--font-display); font-size:1.25rem; color:var(--white); margin-bottom:1rem; line-height:1.35;">
                    A world where young people and marginalised communities lead peaceful,
                    inclusive and sustainable development.
                </h3>
            </div>
            <div style="background:rgba(255,255,255,0.10); border:1px solid rgba(255,255,255,0.18); border-radius:var(--r-xl); padding:2.5rem 2rem;">
                <div style="font-size:2.5rem; margin-bottom:1rem;" aria-hidden="true">🎯</div>
                <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--gold); margin-bottom:0.625rem;">Mission</div>
                <p style="font-size:1rem; color:rgba(255,255,255,0.88); line-height:1.75;">
                    To empower young people and marginalised groups through community-led
                    initiatives that strengthen leadership, citizen-centred governance,
                    peacebuilding, accountability, inclusion, livelihoods and resilience.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ VALUES ══════════════════════════════════════════════════════════ --}}
<section class="section section--alt" aria-labelledby="values-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Our Values</span>
            <h2 class="sec-title" id="values-heading">What guides everything we do.</h2>
            <p class="sec-lead">Six values that shape how we work, how we relate, and who we are.</p>
        </div>
        <div class="values-grid">
            @php $values = [
                ['icon'=>'🤝','name'=>'Inclusion',             'desc'=>'Everyone belongs and matters.'],
                ['icon'=>'🌱','name'=>'Community Ownership',    'desc'=>'Communities lead, we walk alongside.'],
                ['icon'=>'⚖️','name'=>'Integrity',             'desc'=>'We do the right thing, always.'],
                ['icon'=>'☮️','name'=>'Peace and Non-Violence', 'desc'=>'We build peace in all we do.'],
                ['icon'=>'💡','name'=>'Learning and Innovation','desc'=>'We learn, adapt and grow.'],
                ['icon'=>'♻️','name'=>'Sustainability',        'desc'=>'We protect people, culture and our environment.'],
            ]; @endphp
            @foreach($values as $v)
            <div class="value-card reveal">
                <div class="value-card__icon" aria-hidden="true">{{ $v['icon'] }}</div>
                <h3 class="value-card__name">{{ $v['name'] }}</h3>
                <p class="value-card__desc">{{ $v['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ GOVERNANCE ══════════════════════════════════════════════════════ --}}
<section class="section section--dark" aria-labelledby="gov-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">Governance &amp; Accountability</span>
            <h2 class="sec-title" id="gov-heading">
                Transparency and <em>responsible leadership.</em>
            </h2>
            <p class="sec-lead">
                Impact Garden operates through a governance and management structure designed
                to promote transparency, responsible leadership, accountability and effective
                programme delivery.
            </p>
        </div>
        <div class="gov-grid">
            @php $gov = [
                ['num'=>'01','name'=>'Board of Trustees',          'desc'=>'Strategic direction, governance oversight and fiduciary accountability.'],
                ['num'=>'02','name'=>'Executive Leadership',       'desc'=>'Operations, partnerships, resource mobilisation and programme delivery.'],
                ['num'=>'03','name'=>'Programme Team',             'desc'=>'Implementation, community engagement, reporting and learning.'],
                ['num'=>'04','name'=>'Communities &amp; Participants','desc'=>'Programme input, feedback and accountability.'],
            ]; @endphp
            @foreach($gov as $g)
            <div class="gov-card reveal">
                <div class="gov-card__num">{{ $g['num'] }}</div>
                <h3 class="gov-card__name">{!! $g['name'] !!}</h3>
                <p class="gov-card__desc">{{ $g['desc'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Accountability commitments --}}
        <div style="margin-top:3.5rem;">
            <h3 style="font-family:var(--font-display); font-size:1.375rem; color:var(--white); text-align:center; margin-bottom:2rem;">
                Our Accountability Commitments
            </h3>
            <div class="acc-list" style="max-width:640px; margin-inline:auto;">
                @php $acc = [
                    'Governance oversight',
                    'Compliance and policies',
                    'Financial management',
                    'Record keeping and reporting',
                    'Monitoring, evaluation and learning',
                ]; @endphp
                @foreach($acc as $item)
                <div class="acc-item reveal">
                    <div class="acc-item__check" aria-hidden="true">✓</div>
                    <span class="acc-item__text">{{ $item }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══ CTA ════════════════════════════════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="about-cta-heading">
    <div class="wrap">
        <div class="cta-banner">
            <h2 class="cta-banner__title" id="about-cta-heading">
                Ready to partner with <em>Impact Garden?</em>
            </h2>
            <p class="cta-banner__sub">
                We welcome partnerships built on trust, mutual respect and a shared commitment
                to measurable community impact. Let's build something lasting together.
            </p>
            <div class="cta-banner__actions">
                <a href="{{ route('contact') }}"  class="btn btn-sage btn-lg">Get In Touch</a>
                <a href="{{ route('whatwedo') }}" class="btn btn-outline btn-lg">See What We Do</a>
            </div>
        </div>
    </div>
</section>

@endsection
