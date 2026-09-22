@extends('layouts.app')
@section('title', 'Home — Impact Garden Initiative')
@section('description', 'Impact Garden Initiative — growing communities, nurturing sustainable change, and cultivating futures across Africa.')

@section('content')

{{-- ── HERO ──────────────────────────────────────────────────────────── --}}
<section class="hp-hero" aria-label="Hero banner">

    <div class="hp-hero__slides" id="hero" aria-hidden="true">
        {{-- Slide 1: active on load — inline style for LCP --}}
        <div class="hp-hero__slide hp-hero__slide--active"
             style="background-image:url('https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1400&q=70&auto=format')"></div>
        {{-- Slides 2–4: lazy-loaded via data-bg --}}
        <div class="hp-hero__slide"
             data-bg="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=1400&q=70&auto=format"></div>
        <div class="hp-hero__slide"
             data-bg="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=1400&q=70&auto=format"></div>
        <div class="hp-hero__slide"
             data-bg="https://images.unsplash.com/photo-1500651230702-0e2d8a49d4ad?w=1400&q=70&auto=format"></div>
        <div class="hp-hero__scrim"></div>
    </div>

    <div class="hp-hero__body">
        <div class="container hp-hero__inner">

            <div class="hp-hero__text">
                <div class="hp-hero__pill">
                    <span class="hp-hero__pill-dot hp-hero__pill-dot--green"></span>
                    <span class="hp-hero__pill-dot hp-hero__pill-dot--lime"></span>
                    <span class="hp-hero__pill-dot hp-hero__pill-dot--earth"></span>
                    Community-Driven · Sustainable · Impactful
                </div>
                <h1 class="hp-hero__title">
                    Growing<br>
                    <em class="hp-hero__title-em">Communities.</em><br>
                    Sustaining Futures.
                </h1>
                <p class="hp-hero__sub">
                    Impact Garden Initiative cultivates lasting change by empowering communities,
                    nurturing local leadership, and growing sustainable solutions that take root
                    and flourish for generations.
                </p>
                <div class="hp-hero__actions">
                    <a href="{{ route('programs') }}" class="btn btn--secondary btn--lg">Our Programs</a>
                    <a href="{{ route('contact') }}"  class="btn btn--outline   btn--lg">Get Involved</a>
                </div>
            </div>

            <div class="hp-hero__quads" aria-label="Key figures">
                <div class="hp-quad hp-quad--green">
                    <span class="hp-quad__value">[Yr]</span>
                    <span class="hp-quad__label">Founded</span>
                </div>
                <div class="hp-quad hp-quad--lime">
                    <span class="hp-quad__value">[N]+</span>
                    <span class="hp-quad__label">Programs</span>
                </div>
                <div class="hp-quad hp-quad--earth">
                    <span class="hp-quad__value">[N]+</span>
                    <span class="hp-quad__label">Communities</span>
                </div>
                <div class="hp-quad hp-quad--gold">
                    <span class="hp-quad__value">🌱</span>
                    <span class="hp-quad__label">Growing</span>
                </div>
            </div>

        </div>
    </div>

    <div class="hp-hero__dots" id="hero-dots" aria-label="Slide indicators"></div>
</section>

{{-- ── MISSION BAND ─────────────────────────────────────────────────────── --}}
<div class="hp-band" aria-hidden="true">
    <div class="container">
        <p class="hp-band__text">
            <span class="hp-band__q hp-band__q--green">Grow</span>
            <span class="hp-band__sep">·</span>
            <span class="hp-band__q hp-band__q--lime">Nurture</span>
            <span class="hp-band__sep">·</span>
            <span class="hp-band__q hp-band__q--earth">Sustain</span>
            <span class="hp-band__sep">·</span>
            <span class="hp-band__q hp-band__q--green">Impact</span>
        </p>
    </div>
</div>

{{-- ── WHAT WE DO ───────────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="what-heading">
    <div class="container">
        <div class="hp-what__layout">

            <div class="hp-what__header">
                <span class="section__label">What We Do</span>
                <h2 class="hp-what__title" id="what-heading">Four pillars.<br>One shared garden.</h2>
                <p class="hp-what__desc">
                    Everything we do is rooted in community. We plant seeds of change through
                    four interconnected pillars that grow together into lasting impact.
                </p>
                <a href="{{ route('programs') }}" class="btn btn--primary" style="margin-top:1.5rem;">
                    See Our Programs →
                </a>
            </div>

            <div class="hp-what__cards">
                <article class="hp-pillar hp-pillar--green">
                    <div class="hp-pillar__num">01</div>
                    <div class="hp-pillar__icon">🌱</div>
                    <h3 class="hp-pillar__title">Community Empowerment</h3>
                    <p class="hp-pillar__body">We build the capacity of local communities to identify their own needs, lead their own solutions, and sustain their own development pathways.</p>
                </article>
                <article class="hp-pillar hp-pillar--lime">
                    <div class="hp-pillar__num">02</div>
                    <div class="hp-pillar__icon">🌿</div>
                    <h3 class="hp-pillar__title">Sustainable Agriculture & Food Security</h3>
                    <p class="hp-pillar__body">We promote regenerative farming practices, kitchen gardens, and food systems that nourish families and protect the environment.</p>
                </article>
                <article class="hp-pillar hp-pillar--earth">
                    <div class="hp-pillar__num">03</div>
                    <div class="hp-pillar__icon">👩‍🌾</div>
                    <h3 class="hp-pillar__title">Youth & Women Leadership</h3>
                    <p class="hp-pillar__body">We cultivate a generation of changemakers — equipping young people and women with skills, platforms, and networks to lead meaningful change.</p>
                </article>
                <article class="hp-pillar hp-pillar--gold">
                    <div class="hp-pillar__num">04</div>
                    <div class="hp-pillar__icon">♻️</div>
                    <h3 class="hp-pillar__title">Environmental Stewardship</h3>
                    <p class="hp-pillar__body">We champion climate-smart practices, green spaces, and environmental education — because every garden begins with healthy soil.</p>
                </article>
            </div>

        </div>
    </div>
</section>

{{-- ── VISION / MISSION / VALUES (dark) ───────────────────────────────── --}}
<section class="hp-vmg" aria-labelledby="vmg-heading">
    <div class="container">
        <div class="hp-vmg__header">
            <span class="section__label">Our Foundation</span>
            <h2 class="hp-vmg__title" id="vmg-heading">Rooted in purpose.<br><em>Growing for good.</em></h2>
        </div>
        <div class="hp-vmg__grid">
            <div class="hp-vmg__card hp-vmg__card--green">
                <div class="hp-vmg__card-label">Vision</div>
                <div class="hp-vmg__card-icon">🌳</div>
                <p class="hp-vmg__card-text">
                    [Vision statement placeholder — a thriving Africa where every community has the
                    resources, knowledge, and agency to grow sustainably and equitably.]
                </p>
            </div>
            <div class="hp-vmg__card hp-vmg__card--lime">
                <div class="hp-vmg__card-label">Mission</div>
                <div class="hp-vmg__card-icon">🎯</div>
                <p class="hp-vmg__card-text">
                    [Mission statement placeholder — to cultivate sustainable, community-led development
                    by growing local capacity, nurturing innovation, and building lasting partnerships.]
                </p>
            </div>
            <div class="hp-vmg__card hp-vmg__card--earth">
                <div class="hp-vmg__card-label">Core Values</div>
                <div class="hp-vmg__card-icon">🤝</div>
                <p class="hp-vmg__card-text">
                    Inclusivity · Sustainability · Community ownership · Transparency · Innovation ·
                    Environmental responsibility — these are the values that guide every seed we plant.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ── FOCUS AREAS ──────────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="focus-heading">
    <div class="container">
        <div class="hp-sectors__top">
            <div>
                <span class="section__label">Focus Areas</span>
                <h2 class="section__title" id="focus-heading" style="margin-top:0.5rem;">Where we plant seeds</h2>
            </div>
            <p class="hp-sectors__note">
                Our work spans multiple sectors — all united by a single purpose: sustainable community impact.
            </p>
        </div>
        <div class="hp-sectors__grid">
            @php
            $areas = [
                ['icon' => '🌾', 'label' => 'Food Security & Nutrition',               'color' => 'green'],
                ['icon' => '💧', 'label' => 'Clean Water & Sanitation',                'color' => 'lime'],
                ['icon' => '👩‍🌾', 'label' => 'Women & Girls Empowerment',              'color' => 'earth'],
                ['icon' => '🌱', 'label' => 'Youth Development & Leadership',          'color' => 'green'],
                ['icon' => '🌍', 'label' => 'Climate Action & Environment',            'color' => 'lime'],
                ['icon' => '📚', 'label' => 'Education & Skills Training',             'color' => 'earth'],
                ['icon' => '🏥', 'label' => 'Community Health & Wellbeing',            'color' => 'gold'],
                ['icon' => '🤝', 'label' => 'Partnerships & Civic Engagement',        'color' => 'green'],
                ['icon' => '🏗️', 'label' => 'Livelihoods & Economic Inclusion',       'color' => 'lime'],
                ['icon' => '🌿', 'label' => 'Agroecology & Regenerative Agriculture', 'color' => 'earth'],
            ];
            @endphp
            @foreach($areas as $a)
            <div class="hp-sector-tile hp-sector-tile--{{ $a['color'] }}">
                <span class="hp-sector-tile__icon" aria-hidden="true">{{ $a['icon'] }}</span>
                <span class="hp-sector-tile__label">{{ $a['label'] }}</span>
            </div>
            @endforeach
        </div>
        <div style="text-align:center; margin-top:2.5rem;">
            <a href="{{ route('about') }}" class="btn btn--primary btn--lg">Learn About Our Work</a>
        </div>
    </div>
</section>

{{-- ── PARTNERS MARQUEE ─────────────────────────────────────────────────── --}}
<section class="hp-clients" aria-label="Our partners and supporters">
    <div class="hp-clients__header">
        <div class="container">
            <span class="section__label" style="background:rgba(255,255,255,0.15); color:rgba(255,255,255,0.9);">Partners & Supporters</span>
            <h2 class="hp-clients__title">Growing together with trusted partners</h2>
        </div>
    </div>
    <div class="hp-clients__marquee-wrap">
        <div class="hp-clients__marquee">
            @php
            $partners = [
                '[Partner Organisation 1]', '[Partner Organisation 2]',
                '[Donor / Funder Name]',    '[Government Agency]',
                '[NGO Partner]',            '[Community Group]',
                '[International Partner]',  '[Local CSO]',
                '[Partner Organisation 1]', '[Partner Organisation 2]',
                '[Donor / Funder Name]',    '[Government Agency]',
                '[NGO Partner]',            '[Community Group]',
                '[International Partner]',  '[Local CSO]',
            ];
            @endphp
            @foreach($partners as $p)
            <div class="hp-clients__chip">{{ $p }}</div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────────────────── --}}
<section class="hp-cta" aria-labelledby="cta-heading">
    <div class="container hp-cta__inner">
        <div class="hp-cta__text">
            <span class="section__label" style="background:rgba(255,255,255,0.15); color:rgba(255,255,255,0.9);">Join Us</span>
            <h2 class="hp-cta__title" id="cta-heading">Ready to help something<br>beautiful grow?</h2>
            <p class="hp-cta__sub">
                Whether you want to volunteer, partner, donate, or simply learn more —
                there is a place for you in our garden. Let's grow change together.
            </p>
            <div class="hp-cta__actions">
                <a href="{{ route('contact') }}"  class="btn btn--secondary btn--lg">Get Involved</a>
                <a href="{{ route('programs') }}" class="btn btn--outline   btn--lg">View Programs</a>
            </div>
        </div>
        <div class="hp-cta__quads" aria-hidden="true">
            <div class="hp-cta__quad hp-cta__quad--tl">
                <span>People</span><strong>First</strong>
            </div>
            <div class="hp-cta__quad hp-cta__quad--tr">
                <span>Nature</span><strong>Centred</strong>
            </div>
            <div class="hp-cta__quad hp-cta__quad--bl">
                <span>Community</span><strong>Led</strong>
            </div>
            <div class="hp-cta__quad hp-cta__quad--br">
                <span>Lasting</span><strong>Change</strong>
            </div>
        </div>
    </div>
</section>

@endsection
