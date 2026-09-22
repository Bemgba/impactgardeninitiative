@extends('layouts.app')
@section('title', 'Contact Us — Impact Garden Initiative')
@section('description', 'Get in touch with Impact Garden Initiative — reach out to partner, volunteer, donate, or simply learn more about our work.')

@section('content')

{{-- ── PAGE HERO ────────────────────────────────────────────────────────── --}}
<section class="page-hero">
    <div class="container">
        <p class="page-hero__eyebrow">Reach Out</p>
        <h1 class="page-hero__title">Contact Us</h1>
        <p class="page-hero__subtitle">
            We would love to hear from you — whether you want to partner, volunteer, donate,
            or simply learn more about our work.
        </p>
    </div>
</section>

{{-- ── CONTACT LAYOUT ───────────────────────────────────────────────────── --}}
<section class="section">
    <div class="container contact-layout">

        {{-- Left: contact info --}}
        <div class="contact-info">
            <div class="contact-info__header">
                <h2 class="contact-info__name">Impact Garden Initiative</h2>
                <p class="contact-info__reg">[Registration / CAC No. — placeholder]</p>
            </div>

            {{-- Phone --}}
            <div class="contact-block">
                <div class="contact-block__title">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 0 0 .012 1.18a2 2 0 012-2.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 6.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    Phone
                </div>
                <a href="tel:+2340000000000" class="contact-block__link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 000 1.18a2 2 0 012-2.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 6.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    [Phone number — placeholder]
                </a>
            </div>

            {{-- Email --}}
            <div class="contact-block">
                <div class="contact-block__title">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Email
                </div>
                <a href="mailto:info@impactgardeninitiative.org" class="contact-block__link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    info@impactgardeninitiative.org
                </a>
                <a href="mailto:programs@impactgardeninitiative.org" class="contact-block__link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    programs@impactgardeninitiative.org
                </a>
            </div>

            {{-- Office --}}
            <div class="contact-block">
                <div class="contact-block__title">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    Office
                </div>
                <p class="contact-block__address">
                    [Street address — placeholder]<br>
                    [City, State — placeholder]
                </p>
            </div>

            {{-- Social --}}
            <div class="contact-block">
                <div class="contact-block__title">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                    Follow Us
                </div>
                <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-top:0.25rem;">
                    <a href="#" class="contact-block__link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        Facebook
                    </a>
                    <a href="#" class="contact-block__link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        Instagram
                    </a>
                    <a href="#" class="contact-block__link" target="_blank" rel="noopener noreferrer" aria-label="X / Twitter">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        Twitter / X
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: contact form --}}
        <div class="contact-form-wrap">
            <h2 class="contact-form-wrap__title">Send Us a Message</h2>
            <p class="contact-form-wrap__subtitle">Fill in the form below and we will get back to you as soon as possible.</p>

            {{-- Success alert --}}
            @if(session('success'))
            <div class="alert alert--success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            {{-- Validation errors --}}
            @if($errors->any())
            <div class="alert alert--error" role="alert">
                Please correct the errors below and resubmit.
            </div>
            @endif

            <form class="contact-form"
                  method="POST"
                  action="{{ route('contact.store') }}"
                  novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="name">
                            Full Name<span class="form-required" aria-hidden="true">*</span>
                        </label>
                        <input class="form-input {{ $errors->has('name') ? 'form-input--error' : '' }}"
                               type="text"
                               id="name"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               maxlength="150"
                               autocomplete="name"
                               placeholder="Your full name">
                        @error('name')
                        <span class="form-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="organisation">
                            Organisation
                            <span style="font-size:0.8rem; font-weight:400; color:var(--color-text-muted);">(optional)</span>
                        </label>
                        <input class="form-input {{ $errors->has('organisation') ? 'form-input--error' : '' }}"
                               type="text"
                               id="organisation"
                               name="organisation"
                               value="{{ old('organisation') }}"
                               maxlength="200"
                               autocomplete="organization"
                               placeholder="Your organisation">
                        @error('organisation')
                        <span class="form-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="email">
                            Email Address<span class="form-required" aria-hidden="true">*</span>
                        </label>
                        <input class="form-input {{ $errors->has('email') ? 'form-input--error' : '' }}"
                               type="email"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               maxlength="200"
                               autocomplete="email"
                               placeholder="you@example.com">
                        @error('email')
                        <span class="form-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">
                            Phone Number
                            <span style="font-size:0.8rem; font-weight:400; color:var(--color-text-muted);">(optional)</span>
                        </label>
                        <input class="form-input {{ $errors->has('phone') ? 'form-input--error' : '' }}"
                               type="tel"
                               id="phone"
                               name="phone"
                               value="{{ old('phone') }}"
                               maxlength="30"
                               autocomplete="tel"
                               placeholder="+234 000 000 0000">
                        @error('phone')
                        <span class="form-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="subject">
                        Subject<span class="form-required" aria-hidden="true">*</span>
                    </label>
                    <input class="form-input {{ $errors->has('subject') ? 'form-input--error' : '' }}"
                           type="text"
                           id="subject"
                           name="subject"
                           value="{{ old('subject') }}"
                           required
                           maxlength="200"
                           placeholder="How can we help?">
                    @error('subject')
                    <span class="form-error" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">
                        Message<span class="form-required" aria-hidden="true">*</span>
                    </label>
                    <textarea class="form-input form-textarea {{ $errors->has('message') ? 'form-input--error' : '' }}"
                              id="message"
                              name="message"
                              required
                              maxlength="3000"
                              rows="6"
                              placeholder="Tell us about yourself and how you'd like to get involved...">{{ old('message') }}</textarea>
                    @error('message')
                    <span class="form-error" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn--primary btn--lg" style="align-self:flex-start;">
                    Send Message
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>
            </form>
        </div>

    </div>
</section>

{{-- ── GET INVOLVED CARDS ───────────────────────────────────────────────── --}}
<section class="section section--alt" aria-labelledby="involved-heading">
    <div class="container">
        <div class="section__header">
            <span class="section__label">Ways to Engage</span>
            <h2 class="section__title" id="involved-heading">How You Can Get Involved</h2>
        </div>
        <div class="feature-grid">
            <div class="feature-card feature-card--green">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🤝</span></div>
                <h3 class="feature-card__title">Partner With Us</h3>
                <p class="feature-card__body">Are you an NGO, government agency, or private company? Let's explore how a partnership can multiply impact in the communities we serve.</p>
            </div>
            <div class="feature-card feature-card--lime">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">🙋</span></div>
                <h3 class="feature-card__title">Volunteer</h3>
                <p class="feature-card__body">Bring your skills, time, and passion to our programs. We welcome volunteers from all backgrounds — both field-based and remote.</p>
            </div>
            <div class="feature-card feature-card--earth">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">💚</span></div>
                <h3 class="feature-card__title">Donate / Fund</h3>
                <p class="feature-card__body">Your financial support — whether a small gift or a major grant — directly funds community programs that create lasting change.</p>
            </div>
            <div class="feature-card feature-card--gold">
                <div class="feature-card__icon-wrap"><span class="feature-card__icon">📢</span></div>
                <h3 class="feature-card__title">Spread the Word</h3>
                <p class="feature-card__body">Follow us on social media, share our stories, and help amplify the voices of the communities we work with. Awareness creates change too.</p>
            </div>
        </div>
    </div>
</section>

@endsection
