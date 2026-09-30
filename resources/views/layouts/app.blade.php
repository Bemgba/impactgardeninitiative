<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_desc', 'Impact Garden for Community Development Initiative — Growing inclusive, peaceful and resilient communities.')">
    <meta name="robots" content="index, follow">
    <title>@yield('title', 'Impact Garden') — Growing inclusive, peaceful and resilient communities.</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="/favicon.ico">
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="site">

    {{-- ── Navbar ───────────────────────────────────────────────────── --}}
    <header class="nav" id="site-nav" role="banner">
        <div class="nav__inner">

            <a href="{{ route('home') }}" class="nav__logo" aria-label="Impact Garden — Home">
                <img src="{{ asset('images/logo.png') }}"
                     alt="Impact Garden logo"
                     class="nav__logo-img"
                     width="56" height="56"
                     onerror="this.style.display='none'">
                <span class="nav__logo-text">
                    <span class="nav__logo-name">Impact Garden</span>
                    <span class="nav__logo-tag">Community Development Initiative</span>
                </span>
            </a>

            <nav class="nav__links" aria-label="Main navigation">
                @php $seg = request()->segment(1); @endphp
                <a href="{{ route('home') }}"
                   class="nav__link {{ $seg === null || $seg === '' ? 'nav__link--on' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                   class="nav__link {{ $seg === 'about' ? 'nav__link--on' : '' }}">About Us</a>
                <a href="{{ route('whatwedo') }}"
                   class="nav__link {{ $seg === 'what-we-do' ? 'nav__link--on' : '' }}">What We Do</a>
                <a href="{{ route('contact') }}"
                   class="nav__link {{ $seg === 'contact' ? 'nav__link--on' : '' }}">Contact</a>
            </nav>

            <a href="{{ route('contact') }}" class="btn btn-forest btn-sm nav__cta">
                Get Involved
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>

            <button class="nav__burger" id="nav-burger"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="nav-drawer">
                <span></span><span></span><span></span>
            </button>
        </div>

        <div class="nav__drawer" id="nav-drawer" style="display:none" role="navigation"
             aria-label="Mobile navigation">
            @php $seg = request()->segment(1); @endphp
            <a href="{{ route('home') }}"
               class="nav__drawer-link {{ $seg === null || $seg === '' ? 'nav__drawer-link--on' : '' }}">Home</a>
            <a href="{{ route('about') }}"
               class="nav__drawer-link {{ $seg === 'about' ? 'nav__drawer-link--on' : '' }}">About Us</a>
            <a href="{{ route('whatwedo') }}"
               class="nav__drawer-link {{ $seg === 'what-we-do' ? 'nav__drawer-link--on' : '' }}">What We Do</a>
            <a href="{{ route('contact') }}"
               class="nav__drawer-link {{ $seg === 'contact' ? 'nav__drawer-link--on' : '' }}">Contact</a>
            <div class="nav__drawer-cta">
                <a href="{{ route('contact') }}" class="btn btn-forest btn-sm" style="width:100%;justify-content:center;">
                    Get Involved
                </a>
            </div>
        </div>
    </header>

    {{-- ── Content ───────────────────────────────────────────────────── --}}
    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>

    {{-- ── Footer ───────────────────────────────────────────────────── --}}
    <footer class="footer" role="contentinfo">
        <div class="footer__body">

            {{-- Brand --}}
            <div>
                <img src="{{ asset('images/logo.png') }}"
                     alt="Impact Garden" class="footer__logo-img"
                     onerror="this.style.display='none'">
                <span class="footer__org">Impact Garden for Community Development Initiative</span>
                <p class="footer__tagline">Growing inclusive, peaceful and resilient communities.</p>
                <div class="footer__social">
                    <a href="https://www.x.com/ImpactGardenNG" class="footer__soc-btn" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter) — @ImpactGardenNG">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/impact-garden-for-community-development-initiative/" class="footer__soc-btn" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn — Impact Garden for Community Development Initiative">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/ImpactGarden.Ng" class="footer__soc-btn" target="_blank" rel="noopener noreferrer" aria-label="Instagram — @ImpactGarden.Ng">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    {{-- Facebook: URL unknown — update href when available --}}
                    <a href="#" class="footer__soc-btn" aria-label="Facebook — coming soon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Nav links --}}
            <div>
                <h4 class="footer__col-head">Navigate</h4>
                <div class="footer__col-links">
                    <a href="{{ route('home') }}"     class="footer__col-link">Home</a>
                    <a href="{{ route('about') }}"    class="footer__col-link">About Us</a>
                    <a href="{{ route('whatwedo') }}" class="footer__col-link">What We Do</a>
                    <a href="{{ route('contact') }}"  class="footer__col-link">Contact</a>
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="footer__col-head">Contact</h4>
                <div class="footer__col-links">
                    <a href="tel:+2348033243345" class="footer__col-link">+234 (0) 803 324 3345</a>
                    <a href="tel:+2349023833602" class="footer__col-link">+234 (0) 902 383 3602</a>
                    <a href="mailto:impactgarden.ng@gmail.com" class="footer__col-link">impactgarden.ng@gmail.com</a>
                    <a href="https://impactgardeninitiative.org" class="footer__col-link" target="_blank" rel="noopener noreferrer">impactgardeninitiative.org</a>
                </div>
            </div>

            {{-- Address --}}
            <div>
                <h4 class="footer__col-head">Office</h4>
                <div class="footer__col-links">
                    <span class="footer__col-link" style="cursor:default;line-height:1.65;">
                        House 40, Victoria Gowon Street,<br>
                        2nd Avenue, Gwarinpa,<br>
                        Abuja, FCT, Nigeria
                    </span>
                </div>
            </div>
        </div>

        <div class="footer__strip">
            <p>&copy; {{ date('Y') }} Impact Garden for Community Development Initiative. All rights reserved.</p>
            <p>Incorporated Trustee &nbsp;·&nbsp; Abuja, Nigeria</p>
        </div>
    </footer>

</div>{{-- /.site --}}

@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>
