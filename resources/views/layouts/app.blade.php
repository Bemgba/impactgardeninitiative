<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', 'Impact Garden Initiative — growing communities, nurturing change, sustaining futures across Africa.')">
    <meta name="robots" content="index, follow">

    <title>@yield('title', 'Impact Garden Initiative') — Growing Change. Sustaining Futures.</title>

    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('images/logo.png') }}">
    <link rel="icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    {{-- Google Fonts: Inter (body) + Poppins (display) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@700;800&display=swap">

    @vite(['resources/css/app.css'])
</head>
<body>

<div class="site-wrapper">

    {{-- ── Brand quad accent bar ───────────────────────────────────── --}}
    <div class="brand-quad" aria-hidden="true">
        <span></span><span></span><span></span><span></span>
    </div>

    {{-- ── Navbar ──────────────────────────────────────────────────── --}}
    <header class="navbar" id="navbar" role="banner">
        <div class="navbar__inner">

            {{-- Logo / brand --}}
            <a href="{{ route('home') }}" class="navbar__brand" aria-label="Impact Garden Initiative — Home">
                <img src="{{ asset('images/logo.png') }}"
                     alt="Impact Garden Initiative Logo"
                     class="navbar__logo"
                     width="120" height="48"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <span class="navbar__brand-text" style="display:none">
                    <span class="navbar__brand-name">Impact Garden</span>
                    <span class="navbar__brand-tagline">Growing Change. Sustaining Futures.</span>
                </span>
            </a>

            {{-- Desktop nav --}}
            <nav class="navbar__links" aria-label="Main navigation">
                @php $path = request()->path(); @endphp
                <a href="{{ route('home') }}"     class="navbar__link {{ $path === '/'         ? 'navbar__link--active' : '' }}">Home</a>
                <a href="{{ route('about') }}"    class="navbar__link {{ $path === 'about'     ? 'navbar__link--active' : '' }}">About</a>
                <a href="{{ route('programs') }}" class="navbar__link {{ $path === 'programs'  ? 'navbar__link--active' : '' }}">Programs</a>
                <a href="{{ route('impact') }}"   class="navbar__link {{ $path === 'impact'    ? 'navbar__link--active' : '' }}">Impact</a>
                <a href="{{ route('team') }}"     class="navbar__link {{ $path === 'team'      ? 'navbar__link--active' : '' }}">Our Team</a>
                <a href="{{ route('contact') }}"  class="navbar__link {{ $path === 'contact'   ? 'navbar__link--active' : '' }}">Contact</a>
            </nav>

            {{-- CTA button --}}
            <a href="{{ route('contact') }}" class="btn btn--secondary btn--sm navbar__cta">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                Get Involved
            </a>

            {{-- Hamburger --}}
            <button class="navbar__hamburger" id="hamburger"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                <span></span><span></span><span></span>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div class="navbar__mobile" id="mobile-menu" style="display:none"
             role="navigation" aria-label="Mobile navigation">
            @php $path = request()->path(); @endphp
            <a href="{{ route('home') }}"     class="navbar__mobile-link {{ $path === '/'        ? 'navbar__mobile-link--active' : '' }}">Home</a>
            <a href="{{ route('about') }}"    class="navbar__mobile-link {{ $path === 'about'    ? 'navbar__mobile-link--active' : '' }}">About</a>
            <a href="{{ route('programs') }}" class="navbar__mobile-link {{ $path === 'programs' ? 'navbar__mobile-link--active' : '' }}">Programs</a>
            <a href="{{ route('impact') }}"   class="navbar__mobile-link {{ $path === 'impact'   ? 'navbar__mobile-link--active' : '' }}">Impact</a>
            <a href="{{ route('team') }}"     class="navbar__mobile-link {{ $path === 'team'     ? 'navbar__mobile-link--active' : '' }}">Our Team</a>
            <a href="{{ route('contact') }}"  class="navbar__mobile-link {{ $path === 'contact'  ? 'navbar__mobile-link--active' : '' }}">Contact</a>
            <div class="navbar__mobile-cta">
                <a href="{{ route('contact') }}" class="btn btn--secondary btn--sm" style="width:100%;justify-content:center;">
                    Get Involved
                </a>
            </div>
        </div>
    </header>

    {{-- ── Page content ────────────────────────────────────────────── --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────────────── --}}
    <footer class="footer" role="contentinfo">
        <div class="footer__inner">

            {{-- Brand column --}}
            <div class="footer__brand">
                <img src="{{ asset('images/logo.png') }}"
                     alt="Impact Garden Initiative"
                     class="footer__logo-img"
                     onerror="this.style.display='none'">
                <span class="footer__brand-name">Impact Garden Initiative</span>
                <p class="footer__tagline">"Growing Change. Sustaining Futures."</p>
                <div class="footer__social">
                    <a href="#" class="footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="X / Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="#" class="footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="#" class="footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="footer__col">
                <h4 class="footer__col-title">Navigation</h4>
                <nav class="footer__nav" aria-label="Footer navigation">
                    <a href="{{ route('home') }}"     class="footer__link">Home</a>
                    <a href="{{ route('about') }}"    class="footer__link">About Us</a>
                    <a href="{{ route('programs') }}" class="footer__link">Our Programs</a>
                    <a href="{{ route('impact') }}"   class="footer__link">Our Impact</a>
                    <a href="{{ route('team') }}"     class="footer__link">Our Team</a>
                    <a href="{{ route('contact') }}"  class="footer__link">Contact Us</a>
                </nav>
            </div>

            {{-- Contact --}}
            <div class="footer__col">
                <h4 class="footer__col-title">Contact</h4>
                <ul class="footer__contact-list">
                    <li><a href="tel:+2340000000000" class="footer__link">[Phone — placeholder]</a></li>
                    <li><a href="mailto:info@impactgardeninitiative.org" class="footer__link">info@impactgardeninitiative.org</a></li>
                    <li><a href="#" class="footer__link" target="_blank" rel="noopener noreferrer">www.impactgardeninitiative.org</a></li>
                </ul>
            </div>

            {{-- Address --}}
            <div class="footer__col">
                <h4 class="footer__col-title">Office</h4>
                <ul class="footer__contact-list">
                    <li class="footer__link" style="cursor:default">[Office address — placeholder]</li>
                </ul>
            </div>
        </div>

        <div class="footer__quad" aria-hidden="true">
            <span></span><span></span><span></span><span></span>
        </div>

        <div class="footer__bottom">
            <p>&copy; {{ date('Y') }} Impact Garden Initiative. All rights reserved.</p>
            <p>Growing Change. Sustaining Futures.</p>
        </div>
    </footer>

</div>{{-- /.site-wrapper --}}

@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>
