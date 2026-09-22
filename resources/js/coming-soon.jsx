import { useEffect, useState } from 'react';

/* ── Inline styles ────────────────────────────────────────────────────────
   Self-contained so the component needs no external CSS file.
──────────────────────────────────────────────────────────────────────────── */
const CSS = `
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --green-dark:  #1D632B;
    --green:       #55A24A;
    --green-light: #D6EDCF;
    --blue:        #1983AF;
    --orange:      #F17F29;
    --red:         #C3282F;
    --text:        #1A1A1A;
    --text-muted:  #505660;
    --bg:          #F0F5F2;
    --white:       #ffffff;
  }

  html { font-size: 16px; }

  body {
    font-family: 'Inter', 'Segoe UI', ui-sans-serif, system-ui, sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem 1.5rem;
    position: relative;
    overflow: hidden;
  }

  body::before, body::after {
    content: '';
    position: fixed;
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
  }
  body::before {
    width: 600px; height: 600px;
    top: -200px; right: -200px;
    background: radial-gradient(circle, rgba(85,162,74,0.12) 0%, transparent 70%);
  }
  body::after {
    width: 500px; height: 500px;
    bottom: -200px; left: -150px;
    background: radial-gradient(circle, rgba(25,131,175,0.10) 0%, transparent 70%);
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1);    box-shadow: 0 0 0 0    rgba(85,162,74,0.30); }
    50%       { transform: scale(1.06); box-shadow: 0 0 0 16px rgba(85,162,74,0); }
  }
  @keyframes blink {
    0%, 100% { opacity: 1; }
    50%       { opacity: 0.15; }
  }
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(22px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes countUp {
    from { opacity: 0; transform: translateY(6px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 480px) {
    .card-body { padding: 2rem 1.5rem 2.5rem !important; }
  }
`;

/* ── Sprout SVG icon ──────────────────────────────────────────────────── */
function SproutIcon() {
    return (
        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
            width="48" height="48" aria-hidden="true">
            {/* stem */}
            <line x1="24" y1="38" x2="24" y2="18"
                stroke="#55A24A" strokeWidth="3" strokeLinecap="round" />
            {/* left leaf */}
            <path d="M24 26 C20 22 12 22 12 14 C12 14 20 12 24 20"
                fill="#55A24A" opacity="0.85" />
            {/* right leaf */}
            <path d="M24 22 C28 18 36 17 37 9 C37 9 29 8 24 16"
                fill="#1D632B" opacity="0.80" />
            {/* soil */}
            <ellipse cx="24" cy="39" rx="10" ry="3"
                fill="#8B6C42" opacity="0.25" />
            {/* sun */}
            <circle cx="38" cy="10" r="4" fill="#F17F29" opacity="0.70" />
            {[
                [38,4,38,2], [38,16,38,18],
                [32,10,30,10], [44,10,46,10],
                [34,6,32,4],  [42,14,44,16],
            ].map(([x1,y1,x2,y2], i) => (
                <line key={i} x1={x1} y1={y1} x2={x2} y2={y2}
                    stroke="#F17F29" strokeWidth="1.5"
                    strokeLinecap="round" opacity="0.70" />
            ))}
        </svg>
    );
}

/* ── Animated countdown ───────────────────────────────────────────────── */
function Countdown({ targetDate }) {
    const calc = () => {
        const diff = Math.max(0, targetDate - Date.now());
        return {
            days:    Math.floor(diff / 86400000),
            hours:   Math.floor((diff % 86400000) / 3600000),
            minutes: Math.floor((diff % 3600000)  / 60000),
            seconds: Math.floor((diff % 60000)     / 1000),
        };
    };

    const [time, setTime] = useState(calc);

    useEffect(() => {
        const id = setInterval(() => setTime(calc()), 1000);
        return () => clearInterval(id);
    }, []);

    const units = [
        { label: 'Days',    value: time.days },
        { label: 'Hours',   value: time.hours },
        { label: 'Minutes', value: time.minutes },
        { label: 'Seconds', value: time.seconds },
    ];

    return (
        <div style={{
            display: 'flex', gap: '0.75rem', justifyContent: 'center',
            flexWrap: 'wrap', marginBottom: '2rem',
        }}>
            {units.map(({ label, value }) => (
                <div key={label} style={{
                    minWidth: '72px',
                    background: 'var(--bg)',
                    border: '1.5px solid #C8DACF',
                    borderRadius: '0.875rem',
                    padding: '0.875rem 0.625rem 0.625rem',
                    textAlign: 'center',
                    animation: 'countUp 0.4s ease',
                }}>
                    <span style={{
                        display: 'block',
                        fontSize: '1.75rem', fontWeight: 800,
                        color: 'var(--green-dark)', lineHeight: 1,
                        fontVariantNumeric: 'tabular-nums',
                        letterSpacing: '-0.02em',
                    }}>
                        {String(value).padStart(2, '0')}
                    </span>
                    <span style={{
                        display: 'block',
                        fontSize: '0.6875rem', fontWeight: 600,
                        color: 'var(--text-muted)',
                        textTransform: 'uppercase', letterSpacing: '0.08em',
                        marginTop: '0.375rem',
                    }}>
                        {label}
                    </span>
                </div>
            ))}
        </div>
    );
}

/* ── Main component ───────────────────────────────────────────────────── */
export default function ComingSoon() {
    // Launch target: Sep 12 2026 — 3 days from Sep 9 2026
    const LAUNCH_DATE = new Date('2026-09-15T00:00:00');

    return (
        <>
            {/* Inject styles */}
            <style dangerouslySetInnerHTML={{ __html: CSS }} />

            {/* Card */}
            <div style={{
                position: 'relative', zIndex: 1,
                background: 'var(--white)',
                borderRadius: '1.5rem',
                boxShadow: '0 20px 60px -10px rgba(0,0,0,0.14), 0 4px 16px -4px rgba(0,0,0,0.08)',
                maxWidth: '640px', width: '100%',
                overflow: 'hidden', textAlign: 'center',
                animation: 'fadeUp 0.6s ease both',
            }}>

                {/* 4-colour brand bar */}
                <div aria-hidden="true" style={{ display: 'flex', height: '6px' }}>
                    {['#1983AF','#55A24A','#F17F29','#C3282F'].map((c) => (
                        <span key={c} style={{ flex: 1, background: c }} />
                    ))}
                </div>

                {/* Body */}
                <div className="card-body" style={{ padding: '3rem 2.5rem 3.5rem' }}>

                    {/* Sprout icon */}
                    <div aria-hidden="true" style={{
                        width: 90, height: 90,
                        borderRadius: '50%',
                        background: 'var(--green-light)',
                        display: 'flex', alignItems: 'center', justifyContent: 'center',
                        margin: '0 auto 1.75rem',
                        animation: 'pulse 3s ease-in-out infinite',
                    }}>
                        <SproutIcon />
                    </div>

                    {/* Eyebrow */}
                    <span style={{
                        display: 'inline-block',
                        fontSize: '0.75rem', fontWeight: 700,
                        textTransform: 'uppercase', letterSpacing: '0.12em',
                        color: 'var(--green-dark)', background: 'var(--green-light)',
                        padding: '0.3rem 0.875rem', borderRadius: '999px',
                        marginBottom: '1.125rem',
                    }}>
                        Impact Garden Initiative
                    </span>

                    {/* Headings */}
                    <h1 style={{
                        fontSize: 'clamp(1.75rem, 5vw, 2.5rem)', fontWeight: 800,
                        color: 'var(--text)', lineHeight: 1.15,
                        letterSpacing: '-0.025em', marginBottom: '0.25rem',
                    }}>
                        Something{' '}
                        <span style={{ color: 'var(--green)' }}>Green</span>
                        <br />is Growing
                    </h1>

                    <h2 style={{
                        fontSize: 'clamp(1rem, 3vw, 1.375rem)', fontWeight: 600,
                        color: 'var(--blue)', marginBottom: '1.5rem',
                        letterSpacing: '-0.01em',
                    }}>
                        Our website is under construction
                    </h2>

                    {/* Status badge */}
                    <div role="status" aria-live="polite" style={{
                        display: 'inline-flex', alignItems: 'center', gap: '0.5rem',
                        fontSize: '0.875rem', fontWeight: 700,
                        color: 'var(--orange)',
                        background: '#FEF3E8',
                        border: '1.5px solid #FACBA0',
                        borderRadius: '999px',
                        padding: '0.4rem 1.125rem',
                        marginBottom: '1.75rem',
                        letterSpacing: '0.02em',
                    }}>
                        <span aria-hidden="true" style={{
                            width: 8, height: 8, borderRadius: '50%',
                            background: 'var(--orange)',
                            display: 'inline-block',
                            animation: 'blink 1.4s ease-in-out infinite',
                        }} />
                        Under Construction — Coming Soon
                    </div>

                    {/* Live countdown */}
                    <Countdown targetDate={LAUNCH_DATE} />

                    {/* Description */}
                    <p style={{
                        fontSize: '1rem', color: 'var(--text-muted)',
                        lineHeight: 1.75, maxWidth: '480px',
                        margin: '0 auto 2.25rem',
                    }}>
                        We are working hard to bring you our new website.
                        In the meantime, rest assured that the impact keeps growing.
                        Check back soon!
                    </p>

                    {/* Divider */}
                    <hr style={{
                        border: 'none', borderTop: '1px solid #E2E8E4',
                        margin: '0 auto 2rem', width: '80%',
                    }} />

                    {/* Footer note */}
                    <p style={{
                        fontSize: '0.8125rem', color: '#8A9499', lineHeight: 1.6,
                    }}>
                        For enquiries, please reach out to us directly.<br />
                        — The Impact Garden Initiative Team
                    </p>

                </div>{/* /card-body */}
            </div>{/* /card */}

            {/* Copyright */}
            <p style={{
                position: 'relative', zIndex: 1,
                marginTop: '1.75rem',
                fontSize: '0.8rem', color: '#9BAAA4', textAlign: 'center',
            }}>
                &copy; {new Date().getFullYear()} Impact Garden Initiative. All rights reserved.
            </p>
        </>
    );
}
