@extends('layouts.app')
@section('title', 'Our Impact — Impact Garden Initiative')
@section('description', 'See the real-world impact of Impact Garden Initiative — stories, statistics, and outcomes from our work in communities.')

@section('content')

{{-- ── PAGE HERO ────────────────────────────────────────────────────────── --}}
<section class="page-hero">
    <div class="container">
        <p class="page-hero__eyebrow">The Difference We Make</p>
        <h1 class="page-hero__title">Our Impact</h1>
        <p class="page-hero__subtitle">
            Numbers tell part of the story. The rest is written in the lives of the communities
            we work with — families fed, leaders grown, environments healed.
        </p>
    </div>
</section>

{{-- ── IMPACT STATS BAR ─────────────────────────────────────────────────── --}}
<div class="stats-bar" aria-label="Key impact figures">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-item__value">[N]+</span>
                <span class="stat-item__label">Beneficiaries</span>
            </div>
            <div class="stat-item">
                <span class="stat-item__value">[N]+</span>
                <span class="stat-item__label">Communities</span>
            </div>
            <div class="stat-item">
                <span class="stat-item__value">[N]+</span>
                <span class="stat-item__label">Programs</span>
            </div>
            <div class="stat-item">
                <span class="stat-item__value">[N]+</span>
                <span class="stat-item__label">Partners</span>
            </div>
        </div>
    </div>
</div>

{{-- ── IMPACT AREAS ─────────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="impact-areas-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Areas of Impact</span>
            <h2 class="section__title" id="impact-areas-heading">Where Change Is Taking Root</h2>
            <p class="section__subtitle">
                Across six domains, our programs are creating measurable, lasting difference.
            </p>
        </div>
        <div class="feature-grid">
            <div class="feature-card feature-card--green">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🌾</span></div>
                <h3 class="feature-card__title">Food Security</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe measurable outcomes in food security:
                    number of gardens established, families with improved nutrition, crop yields, etc.]
                </p>
            </div>
            <div class="feature-card feature-card--lime">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">👩‍🌾</span></div>
                <h3 class="feature-card__title">Women &amp; Youth</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe leadership development outcomes:
                    women trained, youth-led initiatives launched, income improvements.]
                </p>
            </div>
            <div class="feature-card feature-card--earth">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🌍</span></div>
                <h3 class="feature-card__title">Environment</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe environmental outcomes:
                    trees planted, hectares restored, communities with improved waste management.]
                </p>
            </div>
            <div class="feature-card feature-card--gold">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">💧</span></div>
                <h3 class="feature-card__title">Clean Water</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe WASH outcomes:
                    boreholes rehabilitated, latrines built, households with safe water access.]
                </p>
            </div>
            <div class="feature-card feature-card--green">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">📚</span></div>
                <h3 class="feature-card__title">Livelihoods</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe livelihood outcomes:
                    people trained, businesses started, income levels before and after.]
                </p>
            </div>
            <div class="feature-card feature-card--lime">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🏥</span></div>
                <h3 class="feature-card__title">Health &amp; Wellbeing</h3>
                <p class="feature-card__body">
                    [Impact placeholder — describe health outcomes:
                    community health workers trained, health behaviours improved, facilities supported.]
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ── STORIES OF CHANGE ────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="stories-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Stories of Change</span>
            <h2 class="section__title" id="stories-heading">Voices from Our Gardens</h2>
            <p class="section__subtitle">
                Behind every number is a person. Here are some of their stories.
            </p>
        </div>
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:1.75rem;">

            @php
            $stories = [
                [
                    'name'    => '[Beneficiary Name — placeholder]',
                    'role'    => '[Role / Community — placeholder]',
                    'quote'   => '"[Story or testimonial quote placeholder — replace with a real beneficiary story that illustrates the change this program has made in their life.]"',
                    'image'   => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&q=65&auto=format',
                    'color'   => 'var(--color-green)',
                ],
                [
                    'name'    => '[Beneficiary Name — placeholder]',
                    'role'    => '[Role / Community — placeholder]',
                    'quote'   => '"[Story or testimonial quote placeholder — replace with a real beneficiary story that illustrates the change this program has made in their life.]"',
                    'image'   => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&q=65&auto=format',
                    'color'   => 'var(--color-lime-dark)',
                ],
                [
                    'name'    => '[Beneficiary Name — placeholder]',
                    'role'    => '[Role / Community — placeholder]',
                    'quote'   => '"[Story or testimonial quote placeholder — replace with a real beneficiary story that illustrates the change this program has made in their life.]"',
                    'image'   => 'https://images.unsplash.com/photo-1504805572947-34fad45aed93?w=400&q=65&auto=format',
                    'color'   => 'var(--color-earth)',
                ],
            ];
            @endphp

            @foreach($stories as $story)
            <div style="background:var(--color-bg-card); border:1px solid var(--color-border);
                        border-radius:var(--radius-xl); overflow:hidden;
                        box-shadow:var(--shadow-sm);">
                <img src="{{ $story['image'] }}"
                     alt="{{ $story['name'] }}"
                     width="400" height="220"
                     loading="lazy"
                     style="width:100%;height:200px;object-fit:cover;">
                <div style="padding:1.75rem;">
                    <div style="font-size:2rem; color:{{ $story['color'] }}; margin-bottom:0.75rem; line-height:1;">"</div>
                    <p style="font-size:0.9375rem; color:var(--color-text-muted); line-height:1.75; font-style:italic; margin-bottom:1.25rem;">
                        {{ $story['quote'] }}
                    </p>
                    <div style="border-top:1px solid var(--color-border); padding-top:1rem;">
                        <strong style="display:block; font-size:0.9375rem; color:var(--color-text);">{{ $story['name'] }}</strong>
                        <span style="font-size:0.8125rem; color:var(--color-text-muted);">{{ $story['role'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ── KEY OUTCOMES ─────────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="outcomes-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Documented Outcomes</span>
            <h2 class="section__title" id="outcomes-heading">What Our Data Shows</h2>
            <p class="section__subtitle">
                Placeholder outcomes — replace with real monitoring and evaluation data.
            </p>
        </div>
        <div class="objectives-list">
            @php
            $outcomes = [
                '[Outcome 1 placeholder — e.g. X% of participating households report improved food security after 6 months.]',
                '[Outcome 2 placeholder — e.g. X women completed leadership training and launched community initiatives.]',
                '[Outcome 3 placeholder — e.g. X trees planted across Y communities, contributing to reforestation goals.]',
                '[Outcome 4 placeholder — e.g. X boreholes rehabilitated, providing clean water to Y households.]',
                '[Outcome 5 placeholder — e.g. X% increase in household income reported by livelihood program participants.]',
            ];
            @endphp
            @foreach($outcomes as $i => $outcome)
            <div class="objective-item">
                <div class="objective-item__num">{{ $i + 1 }}</div>
                <p class="objective-item__text">{{ $outcome }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────────────────────── --}}
<section class="section section--dark" aria-labelledby="impact-cta-heading">
    <div class="container" style="text-align:center; position:relative; z-index:1;">
        <span class="section__label">Be Part of the Story</span>
        <h2 class="section__title" id="impact-cta-heading" style="margin-top:0.75rem;">Help us grow this impact further.</h2>
        <p class="section__subtitle" style="margin-bottom:2.25rem;">
            Your support — as a partner, volunteer, or donor — directly multiplies the
            change we are able to create in communities.
        </p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"  class="btn btn--secondary btn--lg">Get Involved</a>
            <a href="{{ route('programs') }}" class="btn btn--outline   btn--lg">Our Programs</a>
        </div>
    </div>
</section>

@endsection
