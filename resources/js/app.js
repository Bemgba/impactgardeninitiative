/* ── Impact Garden Initiative — app.js ───────────────────────────────────
   Handles: hamburger menu, hero slideshow, scroll navbar shadow,
            intersection-observer fade-in animations
────────────────────────────────────────────────────────────────────────── */

document.addEventListener('DOMContentLoaded', () => {

    /* ── Hamburger / mobile menu ─────────────────────────────────────── */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            const isOpen = mobileMenu.style.display === 'flex';
            mobileMenu.style.display = isOpen ? 'none' : 'flex';
            hamburger.setAttribute('aria-expanded', String(!isOpen));
        });

        /* Close on Escape */
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && mobileMenu.style.display === 'flex') {
                mobileMenu.style.display = 'none';
                hamburger.setAttribute('aria-expanded', 'false');
                hamburger.focus();
            }
        });

        /* Close on outside click */
        document.addEventListener('click', e => {
            const navbar = document.getElementById('navbar');
            if (navbar && !navbar.contains(e.target) && mobileMenu.style.display === 'flex') {
                mobileMenu.style.display = 'none';
                hamburger.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ── Hero slideshow ──────────────────────────────────────────────── */
    const heroEl = document.getElementById('hero');
    if (heroEl) {
        const slides = Array.from(heroEl.querySelectorAll('.hp-hero__slide'));
        const dotsEl = document.getElementById('hero-dots');
        let current  = 0;
        let timer;

        if (slides.length < 2) {
            /* single slide — still show the first one */
            if (slides[0]) slides[0].classList.add('hp-hero__slide--active');
        } else {
            /* Build dot indicators */
            slides.forEach((_, i) => {
                const btn = document.createElement('button');
                btn.className  = 'hero__dot' + (i === 0 ? ' hero__dot--active' : '');
                btn.setAttribute('aria-label', `Go to slide ${i + 1}`);
                btn.setAttribute('type', 'button');
                btn.addEventListener('click', () => { goTo(i); resetTimer(); });
                if (dotsEl) dotsEl.appendChild(btn);
            });

            /* Lazy-load non-first slides */
            slides.forEach((slide, i) => {
                if (i === 0) return;
                const bg = slide.getAttribute('data-bg');
                if (bg) slide.style.backgroundImage = `url(${bg})`;
            });

            function goTo(n) {
                if (n === current) return;
                slides[current].classList.remove('hp-hero__slide--active');
                slides[current].classList.add('hp-hero__slide--leaving');
                if (dotsEl) dotsEl.children[current].classList.remove('hero__dot--active');

                const prev = current;
                current = ((n % slides.length) + slides.length) % slides.length;

                slides[current].classList.remove('hp-hero__slide--leaving');
                slides[current].classList.add('hp-hero__slide--active');
                if (dotsEl) dotsEl.children[current].classList.add('hero__dot--active');

                setTimeout(() => slides[prev].classList.remove('hp-hero__slide--leaving'), 1600);
            }

            function next()       { goTo((current + 1) % slides.length); }
            function startTimer() { timer = setInterval(next, 6000); }
            function resetTimer() { clearInterval(timer); startTimer(); }

            startTimer();

            /* Pause on hover / focus */
            heroEl.addEventListener('mouseenter', () => clearInterval(timer));
            heroEl.addEventListener('mouseleave', startTimer);
            heroEl.addEventListener('focusin',    () => clearInterval(timer));
            heroEl.addEventListener('focusout',   startTimer);
        }
    }

    /* ── Scroll-enhanced navbar shadow ──────────────────────────────── */
    const navbar = document.getElementById('navbar');
    if (navbar) {
        const update = () => {
            navbar.style.boxShadow = window.scrollY > 10
                ? '0 4px 20px rgb(0 0 0 / 0.13)'
                : '';
        };
        window.addEventListener('scroll', update, { passive: true });
        update();
    }

    /* ── Fade-up on scroll (Intersection Observer) ───────────────────── */
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity   = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll(
            '.feature-card, .approach-card, .commitment-card, ' +
            '.program-card, .team-card, .objective-item, ' +
            '.hp-pillar, .hp-sector-tile, .hp-vmg__card, .stat-badge'
        ).forEach(el => {
            el.style.opacity    = '0';
            el.style.transform  = 'translateY(18px)';
            el.style.transition = 'opacity 0.45s ease, transform 0.45s ease';
            observer.observe(el);
        });
    }
});
