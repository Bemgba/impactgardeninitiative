@extends('layouts.app')
@section('title', 'Home — Impact Garden')
@section('meta_desc', 'Impact Garden for Community Development Initiative — Growing inclusive, peaceful and resilient communities across Nigeria.')

@section('content')

{{-- ═══ HERO ═══════════════════════════════════════════════════════════ --}}
<section class="home-hero" aria-label="Hero">
    <div class="home-hero__bg" id="hero" aria-hidden="true">
        <div class="home-hero__slide home-hero__slide--active"
             style="background-image:url('https://images.unsplash.com/photo-1508672019048-805c876b67e2?w=1400&q=72&auto=format')"></div>
        <div class="home-hero__slide"
             data-bg="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1400&q=72&auto=format"></div>
        <div class="home-hero__slide"
             data-bg="https://images.unsplash.com/photo-1542601906897-ecd1d08d3ea7?w=1400&q=72&auto=format"></div>
        <div class="home-hero__slide"
             data-bg="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1400&q=72&auto=format"></div>
        <div class="home-hero__overlay"></div>
    </div>

    <div class="home-hero__content">
        <div class="wrap home-hero__inner">
            <div>
                <div class="home-hero__badge">
                    <span class="home-hero__badge-dot"></span>
                    Non-Profit &nbsp;·&nbsp; Incorporated Trustee &nbsp;·&nbsp; Abuja, Nigeria
                </div>
                <h1 class="home-hero__title">
                    Growing <em>inclusive,</em><br>
                    peaceful &amp; resilient<br>
                    communities.
                </h1>
                <p class="home-hero__sub">
                    Impact Garden for Community Development Initiative empowers young people
                    and marginalised communities to lead peaceful, inclusive and sustainable
                    development through community-centred action.
                </p>
                <div class="home-hero__actions">
                    <a href="{{ route('whatwedo') }}" class="btn btn-sage btn-lg">
                        What We Do
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline btn-lg">Partner With Us</a>
                </div>
            </div>

            <div class="home-hero__stats" aria-label="Quick facts">
                <div class="hstat">
                    <span class="hstat__val">🌱</span>
                    <span class="hstat__label">Community-Led</span>
                </div>
                <div class="hstat">
                    <span class="hstat__val">3</span>
                    <span class="hstat__label">Key Pillars</span>
                </div>
                <div class="hstat">
                    <span class="hstat__val">7</span>
                    <span class="hstat__label">Priorities</span>
                </div>
                <div class="hstat">
                    <span class="hstat__val">🤝</span>
                    <span class="hstat__label">Partnerships</span>
                </div>
            </div>
        </div>
    </div>

    <div class="home-hero__dots" id="hero-dots" aria-label="Slide navigation"></div>
</section>

{{-- ═══ TAGLINE BAND ════════════════════════════════════════════════════ --}}
<div class="tagline-band" aria-hidden="true">
    <div class="tagline-band__inner">
        Rooted in Community
        <span class="tagline-band__dot">✦</span>
        Focused on Impact
        <span class="tagline-band__dot">✦</span>
        Growing inclusive, peaceful and resilient communities.
    </div>
</div>

{{-- ═══ WHO WE ARE ══════════════════════════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="who-heading">
    <div class="wrap">
        <div class="home-who">
            <div>
                <span class="sec-tag">Who We Are</span>
                <h2 class="sec-title" id="who-heading" style="margin-bottom:1.25rem;">
                    A non-profit rooted in<br><em>community leadership.</em>
                </h2>
                <p class="sec-lead" style="margin-bottom:1.25rem;">
                    Impact Garden is a non-profit organisation that supports young people
                    and marginalised communities to lead peaceful, inclusive and sustainable
                    development.
                </p>
                <p class="sec-lead" style="margin-bottom:1.75rem;">
                    Registered as an Incorporated Trustee, the organisation is designed to
                    implement community-centred initiatives across diverse contexts — with
                    a core focus on peacebuilding, citizen-centred governance, inclusion
                    and resilience.
                </p>
                <a href="{{ route('about') }}" class="btn btn-outline-forest">
                    Read Our Full Story
                </a>
            </div>
            <div style="display:flex; flex-direction:column; gap:1rem;">
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

{{-- ═══ THE CHALLENGE ═══════════════════════════════════════════════════ --}}
<section class="section section--sand" aria-labelledby="challenge-heading">
    <div class="wrap">
        <div class="challenge-grid">
            <div class="challenge-text">
                <span class="sec-tag">The Challenge We Respond To</span>
                <h2 class="sec-title" id="challenge-heading" style="margin-bottom:1.25rem;">
                    Communities face real,<br><em>persistent barriers.</em>
                </h2>
                <p class="sec-lead" style="margin-bottom:2rem;">
                    Many communities across the globe face exclusion, limited opportunities,
                    weak citizen participation and limited public accountability. Impact Garden
                    responds with community-led, inclusive and practical solutions.
                </p>
                <div class="challenge-list">
                    @php $challenges = [
                        ['icon'=>'🚫','text'=>'Youth exclusion'],
                        ['icon'=>'💼','text'=>'Limited livelihood opportunities'],
                        ['icon'=>'♀️','text'=>'Social exclusion of women and persons with disabilities'],
                        ['icon'=>'🗳️','text'=>'Weak citizen participation and public accountability'],
                        ['icon'=>'⚡','text'=>'Community tensions and insecurity'],
                        ['icon'=>'🌍','text'=>'Environmental pressures'],
                        ['icon'=>'📖','text'=>'Loss of cultural heritage and intergenerational learning'],
                    ]; @endphp
                    @foreach($challenges as $c)
                    <div class="chal-item reveal">
                        <span class="chal-item__icon" aria-hidden="true">{{ $c['icon'] }}</span>
                        {{ $c['text'] }}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="challenge-visual">
                <div class="challenge-visual__icon" aria-hidden="true">🌱</div>
                <p class="challenge-visual__quote">
                    "When communities lead, sustainable change takes root."
                </p>
                <p class="challenge-visual__attr">— Impact Garden</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ THREE PILLARS ═══════════════════════════════════════════════════ --}}
<section class="section section--alt" aria-labelledby="pillars-heading">
    <div class="wrap">
        <div class="sec-header">
            <span class="sec-tag">What We Do</span>
            <h2 class="sec-title" id="pillars-heading">Three pillars of <em>lasting change.</em></h2>
            <p class="sec-lead">
                We implement inclusive, youth-led and community-driven programmes across
                three key pillars — each addressing a critical dimension of community development.
            </p>
        </div>
        <div class="pillars-grid">
            <div class="pillar-card pillar-card--gov reveal">
                <div class="pillar-card__stripe"></div>
                <div class="pillar-card__body">
                    <div class="pillar-card__num" aria-hidden="true">01</div>
                    <div class="pillar-card__icon" aria-hidden="true">🏛️</div>
                    <h3 class="pillar-card__title">Citizen-Centred Governance, Youth Leadership &amp; Peacebuilding</h3>
                    <p class="pillar-card__text">Empowering communities to participate, demand accountability and build peace.</p>
                    <ul class="pillar-card__list" aria-label="Activities">
                        <li>Civic education and participation</li>
                        <li>Accountability and integrity</li>
                        <li>Dialogue and social cohesion</li>
                        <li>Conflict prevention</li>
                    </ul>
                </div>
            </div>
            <div class="pillar-card pillar-card--well reveal">
                <div class="pillar-card__stripe"></div>
                <div class="pillar-card__body">
                    <div class="pillar-card__num" aria-hidden="true">02</div>
                    <div class="pillar-card__icon" aria-hidden="true">🤝</div>
                    <h3 class="pillar-card__title">Community Wellbeing, Inclusion, Culture &amp; Livelihoods</h3>
                    <p class="pillar-card__text">Building wellbeing, inclusion and sustainable livelihoods for all.</p>
                    <ul class="pillar-card__list" aria-label="Activities">
                        <li>Education and wellbeing</li>
                        <li>Disability inclusion</li>
                        <li>Skills and entrepreneurship</li>
                        <li>Cultural preservation</li>
                        <li>Creative livelihoods</li>
                    </ul>
                </div>
            </div>
            <div class="pillar-card pillar-card--clim reveal">
                <div class="pillar-card__stripe"></div>
                <div class="pillar-card__body">
                    <div class="pillar-card__num" aria-hidden="true">03</div>
                    <div class="pillar-card__icon" aria-hidden="true">♻️</div>
                    <h3 class="pillar-card__title">Climate Action &amp; Community Resilience</h3>
                    <p class="pillar-card__text">Protecting the environment and building climate-resilient communities.</p>
                    <ul class="pillar-card__list" aria-label="Activities">
                        <li>Climate awareness and conservation</li>
                        <li>Youth climate action</li>
                        <li>Nature-based solutions</li>
                        <li>Green livelihoods</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('whatwedo') }}" class="btn btn-forest btn-lg">Explore All Our Work</a>
        </div>
    </div>
</section>

{{-- ═══ CTA ════════════════════════════════════════════════════════════ --}}
<section class="section section--cream" aria-labelledby="cta-home-heading">
    <div class="wrap">
        <div class="cta-banner">
            <h2 class="cta-banner__title" id="cta-home-heading">
                Let us <em>grow impact</em> together.
            </h2>
            <p class="cta-banner__sub">
                We believe every community has the potential to grow when people are included,
                empowered and supported to lead change. Partner with us, volunteer, or simply
                reach out to learn more.
            </p>
            <div class="cta-banner__actions">
                <a href="{{ route('contact') }}"  class="btn btn-sage btn-lg">Get In Touch</a>
                <a href="{{ route('about') }}"    class="btn btn-outline btn-lg">Learn About Us</a>
            </div>
        </div>
    </div>
</section>

@endsection
