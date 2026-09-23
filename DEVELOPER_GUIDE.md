# Impact Garden Initiative — Developer Guide

**Audience:** Beginner developer assigned to edit page content and eventually build new features.  
**Goal:** Understand how every part of this project works, where to find things, and how to make changes confidently.

---

## Table of Contents

1. [Project Overview](#1-project-overview)
2. [Folder Structure](#2-folder-structure)
3. [How a Page Loads — The Request Lifecycle](#3-how-a-page-loads--the-request-lifecycle)
4. [Routes — `routes/web.php`](#4-routes--routeswebphp)
5. [Controllers](#5-controllers)
6. [Views (Blade Templates)](#6-views-blade-templates)
7. [The Layout File — Your Master Template](#7-the-layout-file--your-master-template)
8. [Editing Page Content — Practical Walkthrough](#8-editing-page-content--practical-walkthrough)
9. [CSS — How Styling Works](#9-css--how-styling-works)
10. [JavaScript — `app.js`](#10-javascript--appjs)
11. [The Contact Form — Model, Controller & Database](#11-the-contact-form--model-controller--database)
12. [React Components — Coming Soon Page](#12-react-components--coming-soon-page)
13. [React vs Blade — Which to Use and When](#13-react-vs-blade--which-to-use-and-when)
14. [Vite — The Asset Build Tool](#14-vite--the-asset-build-tool)
15. [Environment Configuration — `.env`](#15-environment-configuration--env)
16. [Database & Migrations](#16-database--migrations)
17. [Security Features](#17-security-features)
18. [Local Development Workflow](#18-local-development-workflow)
19. [Common Editing Tasks — Quick Reference](#19-common-editing-tasks--quick-reference)

---

## 1. Project Overview

This is a **Laravel 13** information website for Impact Garden Initiative. Here is what it does at a high level:

```
Visitor opens a URL in browser
        ↓
Laravel matches the URL to a Route
        ↓
Route calls a Controller method
        ↓
Controller returns a View (Blade template)
        ↓
Blade renders HTML and sends it to the browser
        ↓
Browser loads CSS from public/build/ and displays the page
```

The site has **6 public pages** and a **contact form** that saves messages to a database.

There is also a **React component** (`coming-soon.jsx`) that was used as the temporary holding page before the full site was built. React is kept ready for future interactive features.

---

## 2. Folder Structure

Only the folders you will actually work with are explained here.

```
impactgardeninitiative/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PageController.php      ← serves all 6 info pages
│   │   │   └── ContactController.php   ← handles the contact form submission
│   │   └── Middleware/
│   │       └── SecurityHeaders.php     ← adds security headers to responses
│   ├── Models/
│   │   ├── ContactMessage.php          ← represents a row in contact_messages table
│   │   └── User.php                    ← default Laravel user (not used yet)
│   └── Providers/
│       └── AppServiceProvider.php      ← forces HTTPS in production
│
├── database/
│   └── migrations/
│       └── 2026_09_09_..._create_contact_messages_table.php  ← creates DB table
│
├── public/
│   ├── build/                          ← compiled CSS & JS (never edit directly)
│   ├── images/
│   │   └── logo.png                    ← replace with the real logo
│   └── index.php                       ← entry point (never edit)
│
├── resources/
│   ├── css/
│   │   └── app.css                     ← ALL the styling lives here
│   ├── js/
│   │   ├── app.js                      ← vanilla JS (hamburger, slideshow, etc.)
│   │   ├── coming-soon.jsx             ← React component (coming-soon page)
│   │   └── coming-soon-entry.jsx       ← React entry point (mounts the component)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           ← master layout (navbar + footer)
│       ├── pages/
│       │   ├── home.blade.php          ← Home page content
│       │   ├── about.blade.php         ← About Us page content
│       │   ├── programs.blade.php      ← Programs page content
│       │   ├── impact.blade.php        ← Impact page content
│       │   ├── team.blade.php          ← Team page content
│       │   └── contact.blade.php       ← Contact page content
│       └── coming-soon.blade.php       ← minimal shell for the React coming-soon
│
├── routes/
│   └── web.php                         ← URL → Controller mapping
│
├── vite.config.js                      ← build tool configuration
└── .env                                ← environment settings (DB, URL, etc.)
```

**Golden rule:** Almost all content editing happens inside `resources/views/pages/`.

---

## 3. How a Page Loads — The Request Lifecycle

Understanding this chain is the single most important concept. Walk through it once and everything else will make sense.

**Example: visitor goes to `/about`**

### Step 1 — Router (`routes/web.php`)
```php
Route::get('/about', [PageController::class, 'about'])->name('about');
```
Laravel sees the URL `/about`, matches it to this route, and calls `PageController::about()`.

### Step 2 — Controller (`app/Http/Controllers/PageController.php`)
```php
public function about() { return view('pages.about'); }
```
The controller does one thing: tells Laravel to render the `pages/about` view.

### Step 3 — View (`resources/views/pages/about.blade.php`)
```blade
@extends('layouts.app')
@section('content')
  ... all the page HTML ...
@endsection
```
The view uses `@extends` to "inherit" the master layout, then fills in its own content.

### Step 4 — Layout (`resources/views/layouts/app.blade.php`)
The layout provides the navbar, footer, and the `<head>` tag that loads the CSS. It has a placeholder called `@yield('content')` where each page's unique content gets inserted.

### Step 5 — Browser
The browser receives fully rendered HTML. It then fetches `public/build/assets/app-xxxx.css` (the stylesheet) and displays the styled page.

---

## 4. Routes — `routes/web.php`

```php
Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/about',     [PageController::class, 'about'])->name('about');
Route::get('/programs',  [PageController::class, 'programs'])->name('programs');
Route::get('/impact',    [PageController::class, 'impact'])->name('impact');
Route::get('/team',      [PageController::class, 'team'])->name('team');
Route::get('/contact',   [PageController::class, 'contact'])->name('contact');
Route::post('/contact',  [ContactController::class, 'store'])->name('contact.store');

Route::fallback(fn () => redirect()->route('home'));
```

**Reading a route line:**
```
Route::get('/about', [PageController::class, 'about'])->name('about');
  │        │          │                      │           └─ shortcut name used in links
  │        │          │                      └─ method to call inside the controller
  │        │          └─ which controller class
  │        └─ the URL path
  └─ HTTP method (GET = browser loading a page, POST = form submission)
```

**The `->name()` part** lets you write `route('about')` anywhere in Blade instead of hardcoding `/about`. If the URL ever changes, you only update the route — all links update automatically.

**`Route::fallback`** — if someone types a URL that doesn't exist (e.g. `/banana`), redirect them to the home page instead of showing a 404 error.

**You do not need to touch this file** to edit page content. You would only edit it if you were adding a completely new page.

---

## 5. Controllers

Controllers are PHP classes that sit between the route and the view. This project has two.

### 5.1 — `PageController.php`

```php
<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()     { return view('pages.home'); }
    public function about()    { return view('pages.about'); }
    public function programs() { return view('pages.programs'); }
    public function impact()   { return view('pages.impact'); }
    public function team()     { return view('pages.team'); }
    public function contact()  { return view('pages.contact'); }
}
```

Each method has exactly one job: return a view. The string `'pages.home'` means Laravel looks for the file `resources/views/pages/home.blade.php`. Dots (`.`) in the string become folder slashes (`/`).

**When would you add code here?** When a page needs data from the database before it can display. For example, if you wanted to show published blog posts on the home page:

```php
// Future example — not in the project yet
public function home()
{
    $posts = Post::latest()->take(3)->get();  // fetch 3 posts from DB
    return view('pages.home', compact('posts')); // pass $posts to the view
}
```

For now, the pages are static content, so the controller stays minimal.

### 5.2 — `ContactController.php`

```php
<?php
namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:150'],
            'organisation' => ['nullable', 'string', 'max:200'],
            'email'        => ['required', 'email', 'max:200'],
            'phone'        => ['nullable', 'string', 'max:30'],
            'subject'      => ['required', 'string', 'max:200'],
            'message'      => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Thank you! Your message has been received.');
    }
}
```

This method is triggered when someone submits the contact form (a POST request).

**Line by line:**

| Code | What it does |
|---|---|
| `$request->validate([...])` | Checks that the submitted data is valid. If not, it automatically sends the user back to the form with error messages. |
| `ContactMessage::create($validated)` | Saves the validated data as a new row in the `contact_messages` database table. |
| `return back()->with('success', '...')` | Redirects back to the contact page and flashes a success message. |

**Validation rules explained:**
- `required` — field cannot be empty
- `nullable` — field is allowed to be empty (organisation and phone are optional)
- `string` — must be text
- `max:150` — cannot be longer than 150 characters
- `email` — must be a valid email address format

---

## 6. Views (Blade Templates)

Blade is Laravel's templating language. A Blade file is essentially HTML with special `{{ }}` and `@directive` syntax added.

### Blade syntax you will encounter

```blade
{{-- This is a comment — not shown in the browser --}}

{{ $variable }}              {{-- prints a variable, safely escaped --}}

@extends('layouts.app')     {{-- inherit from the master layout --}}

@section('content')         {{-- start filling in a section --}}
  ... your HTML here ...
@endsection                 {{-- end the section --}}

@yield('content')           {{-- in the layout: "insert section here" --}}

@foreach($items as $item)   {{-- loop through a list --}}
  <p>{{ $item }}</p>
@endforeach

@if(session('success'))     {{-- conditional: show if session value exists --}}
  <div>{{ session('success') }}</div>
@endif

@php                        {{-- run plain PHP --}}
  $greeting = 'Hello';
@endphp

{{ route('about') }}        {{-- generates the URL for a named route --}}

{{ asset('images/logo.png') }}  {{-- generates the URL for a public file --}}

@vite(['resources/css/app.css'])  {{-- loads the compiled CSS/JS --}}

@csrf                       {{-- security token for forms (always include in POST forms) --}}
```

### How pages are structured

Every page view (`home.blade.php`, `about.blade.php`, etc.) follows the same pattern:

```blade
@extends('layouts.app')                    ← use the master layout
@section('title', 'About Us — IGI')        ← set the browser tab title
@section('description', 'About page...')  ← set the meta description for SEO

@section('content')

  {{-- All your page HTML goes here --}}
  <section class="page-hero">
    <div class="container">
      <h1 class="page-hero__title">About Us</h1>
    </div>
  </section>

@endsection
```

---

## 7. The Layout File — Your Master Template

`resources/views/layouts/app.blade.php` wraps every page. You rarely need to edit it, but you should understand it.

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') — Growing Change.</title>
    <link rel="stylesheet" href="Google Fonts...">
    @vite(['resources/css/app.css'])       ← loads the compiled stylesheet
</head>
<body>
<div class="site-wrapper">

    <div class="brand-quad">...</div>      ← the 4-colour strip at the top

    <header class="navbar">               ← navigation bar
        ...navbar links...
    </header>

    <main id="main-content">
        @yield('content')                  ← each page's unique HTML goes here
    </main>

    <footer class="footer">               ← footer
        ...footer columns...
    </footer>

</div>

@vite(['resources/js/app.js'])            ← loads the compiled JavaScript
@stack('scripts')                         ← placeholder for page-specific JS
</body>
</html>
```

**What you would edit in the layout:**
- The organisation name in the navbar brand and footer
- The footer contact details (phone, email, address)
- Social media links in the footer
- The navigation links if you add/rename pages

---

## 8. Editing Page Content — Practical Walkthrough

This is the section you will use most. All content editing is done in `resources/views/pages/`.

### 8.1 — Editing text content

Open any page file, find the text, and change it. Example — editing the About page hero:

```blade
{{-- BEFORE --}}
<h1 class="page-hero__title">About Impact Garden Initiative</h1>
<p class="page-hero__subtitle">
    A community-led organisation rooted in the belief...
</p>

{{-- AFTER — just type your new text --}}
<h1 class="page-hero__title">Who We Are</h1>
<p class="page-hero__subtitle">
    Founded in 2021, Impact Garden Initiative has been growing
    sustainable communities across the North-East region.
</p>
```

### 8.2 — Replacing placeholder text

Every piece of placeholder content is wrapped in square brackets like this:

```blade
[Organisation background — describe when and why Impact Garden Initiative was founded...]
```

Simply delete the entire bracket block and type the real content.

### 8.3 — Replacing placeholder statistics

The stat badges use placeholders like `[Yr]`, `[N]+`:

```blade
{{-- BEFORE --}}
<span class="stat-badge__value">[Yr]</span>
<span class="stat-badge__label">Year Founded</span>

{{-- AFTER --}}
<span class="stat-badge__value">2021</span>
<span class="stat-badge__label">Year Founded</span>
```

### 8.4 — Replacing placeholder images

Images use Unsplash URLs as placeholders. Replace with real image URLs or local files:

```blade
{{-- BEFORE — Unsplash placeholder --}}
<img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1400"
     alt="Community garden — placeholder">

{{-- AFTER — local image stored in public/images/ --}}
<img src="{{ asset('images/garden-community.jpg') }}"
     alt="Farmers working in the community garden, Borno State">
```

To use a local image:
1. Copy the image file into `public/images/`
2. Reference it with `{{ asset('images/your-file.jpg') }}`

### 8.5 — Updating the hero slideshow (Home page)

The home page has 4 slides. Slide 1 uses `style="background-image:url(...)"` directly (for fast loading). Slides 2–4 use `data-bg` (lazy-loaded by JavaScript):

```blade
{{-- Slide 1 — change the URL --}}
<div class="hp-hero__slide hp-hero__slide--active"
     style="background-image:url('https://your-image-url.jpg')"></div>

{{-- Slides 2, 3, 4 — change the data-bg value --}}
<div class="hp-hero__slide"
     data-bg="https://your-second-image.jpg"></div>
```

### 8.6 — Editing lists (objectives, programs, partners)

Lists are built with `@php` arrays for easy editing. Example from `about.blade.php`:

```blade
@php
$objectives = [
    'Strengthen community capacity...',
    'Promote sustainable food systems...',
    'Empower women and youth...',
    'Foster partnerships...',
    'Advocate for inclusive policies...',
];
@endphp
```

To add an objective, add a new string to the array:
```php
$objectives = [
    'Strengthen community capacity...',
    'Promote sustainable food systems...',
    'Empower women and youth...',
    'Foster partnerships...',
    'Advocate for inclusive policies...',
    'Your new sixth objective here.',   ← add this
];
```

To remove one, delete its line. To reorder, drag the lines around.

### 8.7 — Updating footer contact details

Open `resources/views/layouts/app.blade.php` and find the Contact column:

```blade
<div class="footer__col">
    <h4 class="footer__col-title">Contact</h4>
    <ul class="footer__contact-list">
        <li><a href="tel:+2340000000000" class="footer__link">+234 000 000 0000</a></li>
        <li><a href="mailto:info@impactgardeninitiative.org" class="footer__link">
            info@impactgardeninitiative.org
        </a></li>
    </ul>
</div>
```

Change the phone number in both `href="tel:..."` and the visible text. Same for email.

### 8.8 — Adding a new page

If you ever need to add a new page (e.g. `/news`), there are 4 steps:

**Step 1 — Create the view file**
Create `resources/views/pages/news.blade.php` with the page content.

**Step 2 — Add a controller method** in `PageController.php`:
```php
public function news() { return view('pages.news'); }
```

**Step 3 — Add a route** in `routes/web.php`:
```php
Route::get('/news', [PageController::class, 'news'])->name('news');
```

**Step 4 — Add the link to the navbar** in `layouts/app.blade.php`:
```blade
<a href="{{ route('news') }}" class="navbar__link ...">News</a>
```

---

## 9. CSS — How Styling Works

All styles are in one file: `resources/css/app.css`.

### How classes are named (BEM convention)

The project uses **BEM** (Block-Element-Modifier) naming:

```
.navbar              ← Block (the component)
.navbar__link        ← Element (a part of the block, separated by __)
.navbar__link--active ← Modifier (a variation, separated by --)
```

This makes it easy to find styles. If you want to style the active nav link, search for `.navbar__link--active`.

### Design tokens (CSS custom properties)

The brand colours, fonts, and spacing are defined as variables at the top of `app.css`:

```css
:root {
    --color-green:   #2E7D32;   /* primary brand green */
    --color-lime:    #8BC34A;   /* secondary lime green */
    --color-earth:   #795548;   /* earth brown */
    --color-gold:    #F9A825;   /* warm gold */
    --color-text:    #1B2518;   /* main body text */
    --color-bg:      #F5F7F2;   /* page background */
    --font-display:  'Poppins'; /* headings */
    --font-sans:     'Inter';   /* body text */
}
```

**To change the brand colour**, change the value in `:root` and it updates everywhere on the site automatically.

### After editing CSS

Whenever you edit `app.css`, you must rebuild the assets so the browser gets the updated file:

```bash
npm run build
```

This compiles `app.css` into `public/build/assets/app-xxxx.css`.

---

## 10. JavaScript — `app.js`

`resources/js/app.js` handles three things:

### 10.1 — Hamburger menu (mobile)

```js
const hamburger  = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');

hamburger.addEventListener('click', () => {
    const isOpen = mobileMenu.style.display === 'flex';
    mobileMenu.style.display = isOpen ? 'none' : 'flex';
    hamburger.setAttribute('aria-expanded', String(!isOpen));
});
```

Clicking the hamburger button toggles `mobileMenu` between `display:flex` and `display:none`.

### 10.2 — Hero slideshow (home page)

```js
const heroEl = document.getElementById('hero');
// slides cycle every 6 seconds
// first slide is preloaded, rest are lazy-loaded from data-bg attributes
```

The slideshow finds all `.hp-hero__slide` elements inside `#hero` and rotates them. It adds dot navigation buttons dynamically.

### 10.3 — Fade-in animations

```js
document.querySelectorAll('.feature-card, .approach-card, .team-card, ...')
    .forEach(el => {
        // starts invisible, fades in when scrolled into view
    });
```

Uses `IntersectionObserver` — a browser API that watches when elements scroll into the visible area and triggers the fade animation.

**You do not need to edit `app.js`** for content changes. You would edit it if you wanted to change animation behaviour or add new interactive features.

---

## 11. The Contact Form — Model, Controller & Database

This is the only part of the site that interacts with the database.

### 11.1 — The flow

```
User fills form → submits POST /contact
        ↓
ContactController::store() validates the data
        ↓
ContactMessage::create() saves to database
        ↓
User is redirected back with a success message
```

### 11.2 — The Model (`app/Models/ContactMessage.php`)

A **Model** is a PHP class that represents one row in a database table. `ContactMessage` represents one row in the `contact_messages` table.

```php
class ContactMessage extends Model
{
    // These are the fields that can be saved (mass assignment protection)
    protected $fillable = [
        'name', 'organisation', 'email',
        'phone', 'subject', 'message',
        'is_read', 'read_at',
    ];

    // Tells Laravel how to treat certain fields:
    protected $casts = [
        'is_read' => 'boolean',   // treat as true/false, not 1/0
        'read_at' => 'datetime',  // treat as a date object
    ];

    // A method you can call to mark a message as read
    public function markAsRead(): void
    {
        if (! $this->is_read) {
            $this->update(['is_read' => true, 'read_at' => now()]);
        }
    }
}
```

**What `$fillable` means:** Laravel protects you from accidentally saving data you didn't intend to. Only fields listed in `$fillable` can be saved via `Model::create()`. If a hacker adds an extra field to the form POST request, it is silently ignored.

### 11.3 — The Migration (`database/migrations/..._create_contact_messages_table.php`)

A **migration** is a PHP file that creates or modifies a database table. Think of it as a version-controlled blueprint for your database.

```php
Schema::create('contact_messages', function (Blueprint $table) {
    $table->id();                             // auto-incrementing primary key
    $table->string('name', 150);              // text field, max 150 chars
    $table->string('organisation', 200)->nullable(); // optional
    $table->string('email', 200);
    $table->string('phone', 30)->nullable();  // optional
    $table->string('subject', 200);
    $table->text('message');                  // long text field
    $table->boolean('is_read')->default(false); // true/false, starts as false
    $table->timestamp('read_at')->nullable(); // date/time, optional
    $table->timestamps();                     // adds created_at and updated_at
});
```

To create this table in the database, run:
```bash
php artisan migrate
```

### 11.4 — Viewing submitted messages

Currently there is no admin panel to view messages (that is a future feature). To see messages now, you can use Laravel Tinker (a REPL):

```bash
php artisan tinker
> App\Models\ContactMessage::all()           # show all messages
> App\Models\ContactMessage::where('is_read', false)->get()  # unread only
```

---

## 12. React Components — Coming Soon Page

React is currently used for **one component** — the Coming Soon / Under Construction page that was shown before the main site was built.

### 12.1 — File overview

| File | Purpose |
|---|---|
| `resources/js/coming-soon.jsx` | The React component — all the UI and logic |
| `resources/js/coming-soon-entry.jsx` | The entry point — mounts the component into the HTML |
| `resources/views/coming-soon.blade.php` | The Blade shell — a minimal HTML page with a `<div id="app">` |

### 12.2 — How React mounts into the page

**`coming-soon.blade.php`** (the Blade shell):
```blade
<!DOCTYPE html>
<html>
<head>
    ...
    @vite(['resources/css/app.css', 'resources/js/coming-soon-entry.jsx'])
</head>
<body>
    <div id="app"></div>   ← React mounts HERE
</body>
</html>
```

**`coming-soon-entry.jsx`** (the entry point):
```jsx
import { createRoot } from 'react-dom/client';
import ComingSoon from './coming-soon.jsx';

const root = document.getElementById('app');  // find the div

createRoot(root).render(
    <StrictMode>
        <ComingSoon />   // mount the component into that div
    </StrictMode>
);
```

**`coming-soon.jsx`** (the component — simplified view):
```jsx
export default function ComingSoon() {
    const LAUNCH_DATE = new Date('2026-09-15T00:00:00');  // countdown target

    return (
        <>
            <SproutIcon />         {/* the animated plant icon */}
            <h1>Something Green is Growing</h1>
            <Countdown targetDate={LAUNCH_DATE} />  {/* live timer */}
            <p>We are working hard...</p>
        </>
    );
}
```

### 12.3 — How React components work (core concepts)

**A component is a function that returns HTML-like code (called JSX):**
```jsx
function MyComponent() {
    return <h1>Hello World</h1>;
}
```

**Props are inputs passed to a component:**
```jsx
function Greeting({ name }) {       // receives { name } as input
    return <h1>Hello, {name}!</h1>;
}

// used like this:
<Greeting name="Alice" />
```

**State is data that changes over time (triggers a re-render):**
```jsx
import { useState } from 'react';

function Counter() {
    const [count, setCount] = useState(0);  // count starts at 0

    return (
        <button onClick={() => setCount(count + 1)}>
            Clicked {count} times
        </button>
    );
}
```

**useEffect runs code after the component renders (e.g. timers, API calls):**
```jsx
import { useEffect, useState } from 'react';

function Clock() {
    const [time, setTime] = useState(new Date());

    useEffect(() => {
        const interval = setInterval(() => setTime(new Date()), 1000);
        return () => clearInterval(interval);  // cleanup when component unmounts
    }, []);  // [] means: run only once on mount

    return <p>{time.toLocaleTimeString()}</p>;
}
```

### 12.4 — Editing the Coming Soon page

**To change the launch date:**
```jsx
// In resources/js/coming-soon.jsx
const LAUNCH_DATE = new Date('2026-12-31T00:00:00');  // change this date
```

**To change the heading text:**
```jsx
<h1 style={{ ... }}>
    Something{' '}
    <span style={{ color: 'var(--green)' }}>Green</span>
    <br />is Growing             {/* ← change this text */}
</h1>
```

**To change the description paragraph:**
```jsx
<p style={{ ... }}>
    We are working hard to bring you our new website.   {/* ← change this */}
    In the meantime, rest assured that the impact keeps growing.
    Check back soon!
</p>
```

After editing, always rebuild:
```bash
npm run build
```

---

## 13. React vs Blade — Which to Use and When

This is one of the most important architectural decisions in this project.

| | Blade (current info site) | React (future app features) |
|---|---|---|
| **How it works** | PHP renders HTML on the server, sends complete page to browser | JavaScript runs in the browser, builds the UI dynamically |
| **Load speed** | Very fast — no JS parsing needed | Slightly slower — browser must parse and execute JS bundle |
| **SEO** | Excellent — search engines see full HTML | Requires extra setup for good SEO |
| **Best for** | Static content pages, text, images | Interactive features: live search, dashboards, real-time updates |
| **Where it lives** | `resources/views/pages/` | `resources/js/` |
| **Examples in this project** | Home, About, Programs, Impact, Team, Contact | Coming Soon page (countdown timer) |

**The rule for this project:**
- Content pages that just display information → **Blade**
- Features that need to respond to user actions without page reloads → **React**

**Example of where React would make sense in the future:**
- An admin dashboard showing live stats
- A donation form with real-time validation and payment integration
- A search box that filters programs as you type
- A map showing community locations

---

## 14. Vite — The Asset Build Tool

Vite takes your source files (`resources/css/app.css`, `resources/js/app.js`) and compiles them into optimised files for the browser inside `public/build/`.

### Why is this needed?

- The CSS file is written in a clean, readable format with variables and comments
- After `npm run build`, Vite minifies it (removes spaces and comments) to make it smaller and faster to download
- For React files, Vite converts JSX (which browsers cannot read) into standard JavaScript

### The two commands you need

```bash
# Compile once — use this when deploying or testing the built CSS
npm run build

# Watch for changes and recompile instantly — use during active development
npm run dev
```

**Important:** If you run `npm run dev`, it creates a file called `public/hot`. When that file exists, Laravel loads CSS from the dev server (port 5173) instead of from `public/build/`. If you stop `npm run dev` without a clean exit, the `hot` file can get left behind and break CSS loading. If CSS ever stops working, check:

```bash
# Does this file exist?
ls public/hot

# If yes, delete it
rm public/hot   # Linux/Mac
del public\hot  # Windows
```

### `vite.config.js`

```js
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',        // compile this CSS
                'resources/js/app.js',          // compile this JS
            ],
        }),
    ],
});
```

This tells Vite which files to process. If you add a new CSS or JS file, add it here.

---

## 15. Environment Configuration — `.env`

The `.env` file stores settings that change between environments (local development vs production server). It is never committed to git.

```env
APP_NAME="Impact Garden Initiative"    # site name
APP_ENV=local                          # local = dev, production = live server
APP_DEBUG=true                         # show errors (true locally, false in production)
APP_URL=http://127.0.0.1:8000          # the base URL

DB_CONNECTION=sqlite                   # which database driver
SESSION_DRIVER=file                    # store sessions as files
CACHE_STORE=file                       # store cache as files
```

**Key rules:**
- `APP_ENV=local` — development mode. Never set this to `production` locally because it activates HTTPS forcing, which breaks asset loading on a plain HTTP dev server.
- Never commit `.env` to git — it may contain passwords and secret keys.
- The example file `.env.example` shows all available settings without sensitive values.

---

## 16. Database & Migrations

### What is a migration?

A migration is a PHP file that describes a database table. Running `php artisan migrate` executes all pending migrations and creates/updates the tables.

**This project's migration:**
```bash
database/migrations/2026_09_09_000001_create_contact_messages_table.php
```

This creates the `contact_messages` table with columns:
`id, name, organisation, email, phone, subject, message, is_read, read_at, created_at, updated_at`

### Useful artisan commands for the database

```bash
php artisan migrate          # run all pending migrations
php artisan migrate:status   # see which migrations have run
php artisan migrate:rollback # undo the last migration (careful!)
php artisan db:table contact_messages  # inspect the table structure
```

### SQLite (local development)

The project currently uses **SQLite** — a file-based database stored at `database/database.sqlite`. No database server is needed. The database is a single file you can open, inspect, and delete/recreate freely during development.

On the production server (cPanel), you will switch to **MySQL** by updating the `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=impactgardeninitiative
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

---

## 17. Security Features

These work automatically — you do not need to configure them. This section explains what they do.

### `SecurityHeaders` middleware
Located at `app/Http/Middleware/SecurityHeaders.php`. Adds HTTP headers to every response:

| Header | What it prevents |
|---|---|
| `X-Frame-Options: SAMEORIGIN` | Clickjacking — embedding your site in an iframe on another site |
| `X-Content-Type-Options: nosniff` | MIME sniffing — browser misinterpreting file types |
| `Content-Security-Policy` | Specifies exactly which sources CSS, JS, and images can be loaded from |
| `Referrer-Policy` | Controls how much referrer information is shared |
| `Permissions-Policy` | Blocks camera, microphone, geolocation access |

### `public/.htaccess`
Additional security on the Apache web server:

- Blocks access to `.env`, `composer.json`, `artisan` and other sensitive files
- Blocks known scanner tools and bad bots by user-agent string
- Enables gzip compression and long-term caching for CSS/JS assets

### `@csrf` in forms
Every POST form includes `@csrf`:
```blade
<form method="POST" action="{{ route('contact.store') }}">
    @csrf    ← generates a hidden security token
    ...
</form>
```
This prevents **Cross-Site Request Forgery** — an attack where a malicious website tricks a user's browser into submitting a form to your site. Laravel validates the token on every POST request.

---

## 18. Local Development Workflow

### Starting the server

```bash
# Navigate to project folder
cd C:\Users\BDIC\Laravel\impactgardeninitiative

# Start Laravel development server
php artisan serve
```

Visit **`http://127.0.0.1:8000`** in your browser (always use `http://`, not `https://`).

### When you edit CSS or JS

```bash
npm run build
```

Then **hard-refresh** the browser: `Ctrl + Shift + R` (Windows) or `Cmd + Shift + R` (Mac).

### Checking for errors

```bash
# View the Laravel error log
tail -f storage/logs/laravel.log    # Linux/Mac
Get-Content storage\logs\laravel.log -Wait  # Windows PowerShell
```

### Clearing caches (when something seems stuck)

```bash
php artisan config:clear   # clear configuration cache
php artisan view:clear     # clear compiled views
php artisan cache:clear    # clear application cache
```

### Git workflow

```bash
git status                          # see what has changed
git add resources/views/pages/home.blade.php  # stage specific file
git commit -m "Update home page hero text"    # commit with a message
git push                            # push to GitHub
```

---

## 19. Common Editing Tasks — Quick Reference

| Task | File to edit |
|---|---|
| Change home page hero text/image | `resources/views/pages/home.blade.php` |
| Change About Us story | `resources/views/pages/about.blade.php` |
| Add/edit a program card | `resources/views/pages/programs.blade.php` |
| Update impact statistics | `resources/views/pages/impact.blade.php` |
| Add/edit a team member | `resources/views/pages/team.blade.php` |
| Change contact details in form | `resources/views/pages/contact.blade.php` |
| Change contact details in footer | `resources/views/layouts/app.blade.php` |
| Change navigation links | `resources/views/layouts/app.blade.php` |
| Change brand colours | `resources/css/app.css` (`:root` section) |
| Change fonts | `resources/css/app.css` + `resources/views/layouts/app.blade.php` |
| Change coming soon countdown date | `resources/js/coming-soon.jsx` (`LAUNCH_DATE`) |
| Change coming soon text | `resources/js/coming-soon.jsx` |
| Add a completely new page | Routes + Controller + new Blade view |
| Change DB credentials (production) | `.env` file on the server |

---

*This guide covers every part of the project that is actively used. As the project grows — admin panel, blog, user login, React app features — new sections will be added to this document.*
