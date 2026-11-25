# Multilingual Blog (Laravel)

The base of a blog in three languages, English, French and Arabic, built with Laravel and [laravel-translatable](https://github.com/Astrotomic/laravel-translatable). Posts, categories, tags and site settings each store their text once per language.

## Features

- **Translatable models:** posts (title, content, short description), categories (title, content), tags (title) and settings, each with a translations table per locale
- Three locales: `en`, `fr`, `ar`
- Posts belong to a category and can have tags
- Soft deletes on posts, categories and settings
- **Admin dashboard** built on the CoreUI Bootstrap template, with a sidebar
- **Site settings page:** logo, favicon, Facebook and Instagram links, phone and email

## Routes

| Path | What it does |
| --- | --- |
| `/` | Home page |
| `/dashboard` | Admin dashboard |
| `/dashboard/settings` | Site settings form |

## Built with

- PHP 8.1, Laravel 10
- astrotomic/laravel-translatable
- CoreUI (Bootstrap) for the dashboard
- MySQL (or any database Laravel supports)

## Run it locally

You need PHP 8.1+, Composer, Node.js and a database.

```bash
git clone https://github.com/hamzakhalem/multi-lang-blog.git
cd multi-lang-blog
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
```

Set `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in `.env`, then:

```bash
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000/dashboard.

## Project structure

```
app/Models/                   Post, Category, Tag, Setting and their *Translation models
app/Http/Controllers/Dashboard/   Settings controller
config/translatable.php       Available locales
database/migrations/          Tables and translation tables
resources/views/dashboard/    Dashboard layout, sidebar and pages
```
