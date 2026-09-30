/* ── Impact Garden — app.js ──────────────────────────────────────────
   Handles: navbar burger, scroll shadow, hero slideshow, reveal animations
────────────────────────────────────────────────────────────────────── */

document.addEventListener('DOMContentLoaded', () => {

    /* ── Navbar scroll shadow ────────────────────────────────────── */
    const nav = document.getElementById('site-nav');
    if (nav) {
        const onScroll = () => nav.classList.toggle('nav--scrolled', window.scrollY > 8);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ── Hamburger / mobile drawer ───────────────────────────────── */
    const burger = document.getElementById('nav-burger');
    const drawer = document.getElementById('nav-drawer');

    if (burger && drawer) {
        burger.addEventListener('click', () => {
            const open = drawer.style.display === 'flex';
            drawer.style.display = open ? 'none' : 'flex';
            burger.setAttribute('aria-expanded', String(!open));
        });

        /* Close on Escape */
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && drawer.style.display === 'flex') {
                drawer.style.display = 'none';
                burger.setAttribute('aria-expanded', 'false');
                burger.focus();
            }
        });

        /* Close on outside click */
        document.addEventListener('click', e => {
            if (nav && !nav.contains(e.target) && drawer.style.display === 'flex') {
                drawer.style.display = 'none';
                burger.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ── Hero slideshow ──────────────────────────────────────────── */
    const heroEl = document.getElementById('hero');
    if (heroEl) {
        const slides = Array.from(heroEl.querySelectorAll('.home-hero__slide'));
        const dotsEl = document.getElementById('hero-dots');

        if (slides.length > 1 && dotsEl) {
            let current = 0;
            let timer;

            /* Lazy-load slides 2+ */
            slides.forEach((slide, i) => {
                if (i === 0) return;
                const bg = slide.getAttribute('data-bg');
                if (bg) slide.style.backgroundImage = `url(${bg})`;
            });

            /* Build dots */
            slides.forEach((_, i) => {
                const btn = document.createElement('button');
                btn.className = 'hdot' + (i === 0 ? ' hdot--on' : '');
                btn.setAttribute('aria-label', `Slide ${i + 1}`);
                btn.setAttribute('type', 'button');
                btn.addEventListener('click', () => { goTo(i); resetTimer(); });
                dotsEl.appendChild(btn);
            });

            function goTo(n) {
                if (n === current) return;
                slides[current].classList.remove('home-hero__slide--active');
                slides[current].classList.add('home-hero__slide--leaving');
                dotsEl.children[current].classList.remove('hdot--on');

                const prev = current;
                current = ((n % slides.length) + slides.length) % slides.length;

                slides[current].classList.remove('home-hero__slide--leaving');
                slides[current].classList.add('home-hero__slide--active');
                dotsEl.children[current].classList.add('hdot--on');

                setTimeout(() => slides[prev].classList.remove('home-hero__slide--leaving'), 1800);
            }

            const next        = () => goTo((current + 1) % slides.length);
            const startTimer  = () => { timer = setInterval(next, 6000); };
            const resetTimer  = () => { clearInterval(timer); startTimer(); };

            startTimer();
            heroEl.addEventListener('mouseenter', () => clearInterval(timer));
            heroEl.addEventListener('mouseleave', startTimer);
        }
    }

    /* ── Scroll-reveal (IntersectionObserver) ────────────────────── */
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal--in');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.10, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    } else {
        /* Fallback — show all immediately */
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('reveal--in'));
    }

});
