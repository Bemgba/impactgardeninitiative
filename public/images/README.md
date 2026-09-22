# DevOptions — Public Images

Place the following image files in this directory:

| File | Usage | Recommended Size |
|------|-------|-----------------|
| `logo.png` | Main navbar & footer logo | 240×104px transparent PNG |
| `favicon.png` | Browser tab icon | 32×32px or 64×64px PNG |
| `og-image.jpg` | Open Graph social share image | 1200×630px |

## Logo Notes
The DevOptions logo uses a multi-color brand identity:
- Blue `#1983AF` — top-left quadrant
- Green `#55A24A` — top-right quadrant  
- Orange `#F17F29` — bottom-left quadrant
- Red `#C3282F` — bottom-right quadrant
- Black `#000000` — "DevOptions" text
- Dark Green `#1D632B` — tagline text

## Fallback
If `logo.png` is missing, the navbar shows the text "DevOptions" with its tagline
styled in brand colors via CSS (see `navbar__brand-text` in `app.css`).
