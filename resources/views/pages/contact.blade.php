@extends('layouts.app')
@section('title', 'Contact Us — Impact Garden')
@section('meta_desc', 'Contact Impact Garden for Community Development Initiative — House 40, Victoria Gowon Street, Gwarinpa, Abuja. Email: impactgarden.ng@gmail.com')

@section('content')

{{-- ═══ PAGE BANNER ═════════════════════════════════════════════════════ --}}
<section class="hero-banner">
    <div class="hero-banner__leaf" aria-hidden="true"></div>
    <div class="wrap hero-banner__inner">
        <div class="hero-banner__tag">Reach Out</div>
        <h1 class="hero-banner__title">
            Let's <em>grow impact</em> together.
        </h1>
        <p class="hero-banner__sub">
            We welcome partnerships, volunteers, community members and supporters.
            Reach out and let's start a conversation.
        </p>
    </div>
</section>

{{-- ═══ CONTACT LAYOUT ══════════════════════════════════════════════════ --}}
<section class="section section--alt" aria-labelledby="contact-heading">
    <div class="wrap">
        <div class="contact-grid">

            {{-- ── Left: contact info card ──────────────────────────── --}}
            <div class="contact-card">
                <h2 class="contact-card__title">Impact Garden</h2>
                <p class="contact-card__sub">for Community Development Initiative</p>

                <div class="contact-detail">
                    <div class="contact-detail__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <div class="contact-detail__label">Office Address</div>
                        <div class="contact-detail__value">
                            House 40, Victoria Gowon Street,<br>
                            2nd Avenue, Gwarinpa,<br>
                            Abuja, FCT, Nigeria
                        </div>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.18a2 2 0 012-2.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 6.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    </div>
                    <div>
                        <div class="contact-detail__label">Telephone</div>
                        <div class="contact-detail__value">
                            <a href="tel:+2348033243345">+234 (0) 803 324 3345</a><br>
                            <a href="tel:+2349023833602">+234 (0) 902 383 3602</a>
                        </div>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div>
                        <div class="contact-detail__label">Email</div>
                        <div class="contact-detail__value">
                            <a href="mailto:impactgarden.ng@gmail.com">impactgarden.ng@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="contact-detail__icon" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                    </div>
                    <div>
                        <div class="contact-detail__label">Website</div>
                        <div class="contact-detail__value">
                            <a href="https://impactgardeninitiative.org" target="_blank" rel="noopener noreferrer">
                                impactgardeninitiative.org
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="contact-divider">

                {{-- Ways to engage --}}
                <div style="font-size:0.75rem; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:rgba(255,255,255,0.40); margin-bottom:1rem;">Ways to Engage</div>
                @php $engage = [
                    ['icon'=>'🤝','text'=>'Partner with us on programmes'],
                    ['icon'=>'🙋','text'=>'Volunteer your time and skills'],
                    ['icon'=>'💚','text'=>'Donate or fund an initiative'],
                    ['icon'=>'📢','text'=>'Spread the word and amplify our work'],
                ]; @endphp
                @foreach($engage as $e)
                <div style="display:flex; align-items:center; gap:0.625rem; margin-bottom:0.625rem; font-size:0.875rem; color:rgba(255,255,255,0.72);">
                    <span style="font-size:1rem;" aria-hidden="true">{{ $e['icon'] }}</span>
                    {{ $e['text'] }}
                </div>
                @endforeach
            </div>

            {{-- ── Right: contact form ───────────────────────────────── --}}
            <div class="form-box">
                <h2 class="form-box__title">Send Us a Message</h2>
                <p class="form-box__sub">Fill in the form below and we will get back to you.</p>

                @if(session('success'))
                <div class="alert alert-ok" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-err" role="alert">
                    Please correct the errors below and try again.
                </div>
                @endif

                <form class="form-contact" method="POST" action="{{ route('contact.store') }}" novalidate>
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="name">
                                Full Name<span class="form-req" aria-hidden="true">*</span>
                            </label>
                            <input class="form-input {{ $errors->has('name') ? 'form-input--err' : '' }}"
                                   type="text" id="name" name="name"
                                   value="{{ old('name') }}"
                                   required maxlength="150" autocomplete="name"
                                   placeholder="Your full name">
                            @error('name')
                                <span class="form-err" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="organisation">
                                Organisation
                                <span style="font-weight:400; font-size:0.8125rem; color:var(--stone);">(optional)</span>
                            </label>
                            <input class="form-input {{ $errors->has('organisation') ? 'form-input--err' : '' }}"
                                   type="text" id="organisation" name="organisation"
                                   value="{{ old('organisation') }}"
                                   maxlength="200" autocomplete="organization"
                                   placeholder="Your organisation">
                            @error('organisation')
                                <span class="form-err" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="email">
                                Email Address<span class="form-req" aria-hidden="true">*</span>
                            </label>
                            <input class="form-input {{ $errors->has('email') ? 'form-input--err' : '' }}"
                                   type="email" id="email" name="email"
                                   value="{{ old('email') }}"
                                   required maxlength="200" autocomplete="email"
                                   placeholder="you@example.com">
                            @error('email')
                                <span class="form-err" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">
                                Phone Number
                                <span style="font-weight:400; font-size:0.8125rem; color:var(--stone);">(optional)</span>
                            </label>
                            <input class="form-input {{ $errors->has('phone') ? 'form-input--err' : '' }}"
                                   type="tel" id="phone" name="phone"
                                   value="{{ old('phone') }}"
                                   maxlength="30" autocomplete="tel"
                                   placeholder="+234 000 000 0000">
                            @error('phone')
                                <span class="form-err" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="subject">
                            Subject<span class="form-req" aria-hidden="true">*</span>
                        </label>
                        <input class="form-input {{ $errors->has('subject') ? 'form-input--err' : '' }}"
                               type="text" id="subject" name="subject"
                               value="{{ old('subject') }}"
                               required maxlength="200"
                               placeholder="How can we help you?">
                        @error('subject')
                            <span class="form-err" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">
                            Message<span class="form-req" aria-hidden="true">*</span>
                        </label>
                        <textarea class="form-input form-textarea {{ $errors->has('message') ? 'form-input--err' : '' }}"
                                  id="message" name="message"
                                  required maxlength="3000" rows="6"
                                  placeholder="Tell us about yourself and how you'd like to work together...">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="form-err" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-forest btn-lg" style="align-self:flex-start;">
                        Send Message
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
