@extends('layouts.app')
@section('title', 'Our Programs — Impact Garden Initiative')
@section('description', 'Explore Impact Garden Initiative programs — community empowerment, food security, youth leadership, and environmental stewardship.')

@section('content')

{{-- ── PAGE HERO ────────────────────────────────────────────────────────── --}}
<section class="page-hero">
    <div class="container">
        <p class="page-hero__eyebrow">What We Do</p>
        <h1 class="page-hero__title">Our Programs</h1>
        <p class="page-hero__subtitle">
            Every program is a seed — deliberately planted, carefully tended, and grown to
            produce lasting change in the communities we serve.
        </p>
    </div>
</section>

{{-- ── PROGRAMS OVERVIEW ────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="programs-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Active Programs</span>
            <h2 class="section__title" id="programs-heading">What We Are Growing</h2>
            <p class="section__subtitle">
                Our programs span four interconnected pillars. Replace placeholder text and images
                with real program details when content is available.
            </p>
        </div>
        <div class="programs-grid">

            {{-- Program 1 --}}
            <article class="program-card program-card--green">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">🌾</span>
                    <h3 class="program-card__title">Community Food Gardens</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=600&q=65&auto=format"
                         alt="Community garden — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the community food garden
                    program, its goals, target beneficiaries, and activities. Replace when
                    real content is available.]</p>
                    <p>[Paragraph 2 — describe outcomes, number of gardens established,
                    families benefitting, etc.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--green">Food Security</span>
                        <span class="program-tag program-tag--lime">Nutrition</span>
                        <span class="program-tag program-tag--earth">Community</span>
                    </div>
                </div>
            </article>

            {{-- Program 2 --}}
            <article class="program-card program-card--lime">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">👩‍🌾</span>
                    <h3 class="program-card__title">Women &amp; Youth Leadership</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=65&auto=format"
                         alt="Women leadership training — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the women and youth leadership
                    program, its objectives, training components, and the communities served.]</p>
                    <p>[Paragraph 2 — describe measurable outcomes: number of leaders trained,
                    community initiatives launched, etc.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--lime">Leadership</span>
                        <span class="program-tag program-tag--green">Women</span>
                        <span class="program-tag program-tag--gold">Youth</span>
                    </div>
                </div>
            </article>

            {{-- Program 3 --}}
            <article class="program-card program-card--earth">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">♻️</span>
                    <h3 class="program-card__title">Environmental Stewardship</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=600&q=65&auto=format"
                         alt="Environmental program — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the environmental stewardship
                    program: tree planting, waste management, clean energy, or other activities.]</p>
                    <p>[Paragraph 2 — describe outcomes and community uptake.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--green">Environment</span>
                        <span class="program-tag program-tag--lime">Climate</span>
                        <span class="program-tag program-tag--earth">Sustainability</span>
                    </div>
                </div>
            </article>

            {{-- Program 4 --}}
            <article class="program-card program-card--gold">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">📚</span>
                    <h3 class="program-card__title">Skills &amp; Livelihoods Training</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&q=65&auto=format"
                         alt="Skills training — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the skills and livelihoods
                    training program: vocational skills, entrepreneurship, financial literacy, etc.]</p>
                    <p>[Paragraph 2 — describe impact on household incomes and economic resilience.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--gold">Livelihoods</span>
                        <span class="program-tag program-tag--green">Skills</span>
                        <span class="program-tag program-tag--lime">Entrepreneurship</span>
                    </div>
                </div>
            </article>

            {{-- Program 5 --}}
            <article class="program-card program-card--green">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">💧</span>
                    <h3 class="program-card__title">Clean Water &amp; Sanitation</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1541544181051-e46607bc22a4?w=600&q=65&auto=format"
                         alt="Clean water program — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the WASH program:
                    borehole rehabilitation, sanitation facilities, hygiene promotion activities.]</p>
                    <p>[Paragraph 2 — describe the communities served and outcomes achieved.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--lime">WASH</span>
                        <span class="program-tag program-tag--green">Health</span>
                        <span class="program-tag program-tag--earth">Sanitation</span>
                    </div>
                </div>
            </article>

            {{-- Program 6 --}}
            <article class="program-card program-card--lime">
                <div class="program-card__header">
                    <span class="program-card__icon" aria-hidden="true">🤝</span>
                    <h3 class="program-card__title">Community Health &amp; Wellbeing</h3>
                </div>
                <div class="program-card__body">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&q=65&auto=format"
                         alt="Community health program — placeholder"
                         width="600" height="300"
                         loading="lazy"
                         style="width:100%;height:180px;object-fit:cover;border-radius:0.625rem;margin-bottom:1rem;">
                    <p>[Program description placeholder — describe the community health program:
                    maternal health, nutrition, mental health, or community health worker training.]</p>
                    <p>[Paragraph 2 — describe reach and impact metrics.]</p>
                    <div style="margin-top:1rem;">
                        <span class="program-tag program-tag--green">Health</span>
                        <span class="program-tag program-tag--lime">Wellbeing</span>
                        <span class="program-tag program-tag--gold">Nutrition</span>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

{{-- ── FOCUS AREAS ──────────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="focus-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Cross-Cutting Themes</span>
            <h2 class="section__title" id="focus-heading">Threads woven through every program</h2>
            <p class="section__subtitle">
                Regardless of the specific program, these themes run through all our work.
            </p>
        </div>
        <div class="feature-grid">
            <div class="feature-card feature-card--green">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">⚖️</span></div>
                <h3 class="feature-card__title">Gender Equity</h3>
                <p class="feature-card__body">All programs intentionally address gender barriers and ensure women and girls benefit equitably from all activities.</p>
            </div>
            <div class="feature-card feature-card--lime">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">♿</span></div>
                <h3 class="feature-card__title">Inclusion &amp; Disability</h3>
                <p class="feature-card__body">We design activities to be accessible and inclusive, leaving no one behind regardless of ability, age, or background.</p>
            </div>
            <div class="feature-card feature-card--earth">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🌍</span></div>
                <h3 class="feature-card__title">Climate Resilience</h3>
                <p class="feature-card__body">We embed climate-smart practices across all programs so communities can adapt and thrive in the face of environmental change.</p>
            </div>
            <div class="feature-card feature-card--gold">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">📊</span></div>
                <h3 class="feature-card__title">Evidence &amp; Learning</h3>
                <p class="feature-card__body">We document results, generate learning, and share evidence so that successful approaches can be adapted and replicated.</p>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────────────────── --}}
<section class="section section--dark" aria-labelledby="programs-cta-heading">
    <div class="container" style="text-align:center; position:relative; z-index:1;">
        <span class="section__label">Get Involved</span>
        <h2 class="section__title" id="programs-cta-heading" style="margin-top:0.75rem;">Want to support a program?</h2>
        <p class="section__subtitle" style="margin-bottom:2.25rem;">
            Reach out to learn how you can volunteer, partner, or fund one of our programs
            to help communities grow.
        </p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn btn--secondary btn--lg">Contact Us</a>
            <a href="{{ route('impact') }}"  class="btn btn--outline   btn--lg">See Our Impact</a>
        </div>
    </div>
</section>

@endsection
