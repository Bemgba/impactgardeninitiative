@extends('layouts.app')
@section('title', 'Our Team — Impact Garden Initiative')
@section('description', 'Meet the dedicated team behind Impact Garden Initiative — the people growing change in communities every day.')

@section('content')

{{-- ── PAGE HERO ────────────────────────────────────────────────────────── --}}
<section class="page-hero">
    <div class="container">
        <p class="page-hero__eyebrow">The People Behind the Work</p>
        <h1 class="page-hero__title">Our Team</h1>
        <p class="page-hero__subtitle">
            Passionate, committed, and rooted in community — meet the people who show up every day
            to grow lasting change.
        </p>
    </div>
</section>

{{-- ── TEAM INTRO ───────────────────────────────────────────────────────── --}}
<section class="section">
    <div class="container about-intro">
        <div class="about-intro__text">
            <span class="section__label">Who We Are</span>
            <h2 class="section__title" style="margin-top:0.75rem;">A Team Rooted in Community</h2>
            <p>
                [Team overview placeholder — describe the composition and character of the team:
                backgrounds, expertise, shared values, and what makes them well-suited to
                the mission of the organisation. Replace when real content is available.]
            </p>
            <p>
                [Paragraph 2 — describe the team's commitment to community-led development,
                local knowledge, and long-term relationships with the communities they serve.]
            </p>
        </div>
        <div class="about-intro__aside">
            <div class="stat-badge stat-badge--green">
                <span class="stat-badge__value">[N]</span>
                <span class="stat-badge__label">Team Members</span>
            </div>
            <div class="stat-badge stat-badge--lime">
                <span class="stat-badge__value">[N]</span>
                <span class="stat-badge__label">Field Staff</span>
            </div>
            <div class="stat-badge stat-badge--earth">
                <span class="stat-badge__value">[N]+</span>
                <span class="stat-badge__label">Volunteers</span>
            </div>
        </div>
    </div>
</section>

{{-- ── LEADERSHIP ───────────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="leadership-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Leadership</span>
            <h2 class="section__title" id="leadership-heading">Steering the Garden</h2>
            <p class="section__subtitle">
                Our leadership team brings together diverse expertise united by a shared commitment to community impact.
            </p>
        </div>
        <div class="team-grid">
            @php
            $leaders = [
                ['name' => '[Executive Director — placeholder]',   'role' => 'Executive Director',        'bio' => '[Brief bio placeholder — background, expertise, and what drives this person. Replace with real content.]'],
                ['name' => '[Deputy Director — placeholder]',      'role' => 'Deputy Director / Programs', 'bio' => '[Brief bio placeholder — background, expertise, and what drives this person. Replace with real content.]'],
                ['name' => '[Finance Manager — placeholder]',      'role' => 'Finance & Operations',       'bio' => '[Brief bio placeholder — background, expertise, and what drives this person. Replace with real content.]'],
                ['name' => '[Communications Lead — placeholder]',  'role' => 'Communications & Outreach',  'bio' => '[Brief bio placeholder — background, expertise, and what drives this person. Replace with real content.]'],
            ];
            @endphp
            @foreach($leaders as $person)
            <div class="team-card">
                <div class="team-card__avatar">
                    <div class="team-card__avatar-placeholder" aria-hidden="true">👤</div>
                </div>
                <div class="team-card__body">
                    <h3 class="team-card__name">{{ $person['name'] }}</h3>
                    <p class="team-card__role">{{ $person['role'] }}</p>
                    <p class="team-card__bio">{{ $person['bio'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── PROGRAM STAFF ────────────────────────────────────────────────────── --}}
<section class="section" aria-labelledby="staff-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Program Team</span>
            <h2 class="section__title" id="staff-heading">The Hands in the Field</h2>
            <p class="section__subtitle">
                Our program staff are the ones who show up in communities every day — planting,
                nurturing, and harvesting change.
            </p>
        </div>
        <div class="team-grid">
            @php
            $staff = [
                ['name' => '[Program Officer 1 — placeholder]',  'role' => 'Program Officer, Food Security',      'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
                ['name' => '[Program Officer 2 — placeholder]',  'role' => 'Program Officer, Youth & Women',      'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
                ['name' => '[Field Officer 1 — placeholder]',    'role' => 'Field Officer, [State/Region]',       'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
                ['name' => '[Field Officer 2 — placeholder]',    'role' => 'Field Officer, [State/Region]',       'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
                ['name' => '[M&E Officer — placeholder]',        'role' => 'Monitoring, Evaluation & Learning',   'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
                ['name' => '[Admin Officer — placeholder]',      'role' => 'Administrative Officer',              'bio' => '[Brief bio placeholder. Replace with real content when available.]'],
            ];
            @endphp
            @foreach($staff as $person)
            <div class="team-card">
                <div class="team-card__avatar">
                    <div class="team-card__avatar-placeholder" aria-hidden="true">👤</div>
                </div>
                <div class="team-card__body">
                    <h3 class="team-card__name">{{ $person['name'] }}</h3>
                    <p class="team-card__role">{{ $person['role'] }}</p>
                    <p class="team-card__bio">{{ $person['bio'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── EXPERTISE ────────────────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="expertise-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Collective Expertise</span>
            <h2 class="section__title" id="expertise-heading">Skills We Bring to Every Garden</h2>
        </div>
        <div class="expertise-grid">
            @php
            $skills = [
                'Community Development & Facilitation',
                'Sustainable Agriculture & Agroecology',
                'Women & Gender Programming',
                'Youth Development & Leadership',
                'Monitoring, Evaluation & Learning',
                'Project Management & Coordination',
                'Environmental Management',
                'WASH (Water, Sanitation & Hygiene)',
                'Health Promotion & Nutrition',
                'Financial Management & Reporting',
                'Communications & Advocacy',
                'Partnership Development',
            ];
            @endphp
            @foreach($skills as $skill)
            <div class="expertise-item">
                <span class="expertise-item__icon" aria-hidden="true">✓</span>
                <span>{{ $skill }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── JOIN THE TEAM ────────────────────────────────────────────────────── --}}
<section class="section section--dark" aria-labelledby="join-heading">
    <div class="container" style="text-align:center; position:relative; z-index:1;">
        <span class="section__label">Grow With Us</span>
        <h2 class="section__title" id="join-heading" style="margin-top:0.75rem;">Want to join our team?</h2>
        <p class="section__subtitle" style="margin-bottom:2.25rem;">
            We are always looking for passionate, community-oriented people to join us —
            whether as staff, volunteers, or interns. Get in touch.
        </p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn btn--secondary btn--lg">Contact Us</a>
            <a href="{{ route('about') }}"   class="btn btn--outline   btn--lg">Learn About Us</a>
        </div>
    </div>
</section>

@endsection
