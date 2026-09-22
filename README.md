# Impact Garden Initiative — Website

This is the Laravel project for the **Impact Garden Initiative** information website.

## Status

🚧 **Under Construction** — The site is live with a *Coming Soon* placeholder.
All URLs currently return the coming-soon page.

## Tech Stack

- PHP 8.4 / Laravel 12
- Vite (asset bundling)
- Tailwind CSS v4

## Local Development

```bash
# 1. Install PHP dependencies
composer install

# 2. Set up environment
cp .env.example .env
php artisan key:generate

# 3. Run migrations
php artisan migrate

# 4. Install JS dependencies & build assets
npm install
npm run build

# 5. Serve locally
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000).

---

> Development will begin in earnest at the appropriate time.
