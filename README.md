<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Blade Template Mastering Project

This Laravel project converts a static HTML structure into a dynamic Blade template system, implementing a registration and login system along with static pages for home, about, contact, categories, blog, and profile. It uses Laravel’s Blade templating engine, controllers for authentication, and Tailwind CSS with FontAwesome for styling.

## Folder Structure

```
Blade Template Mastering/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Controller.php
│   │   │   ├── LoginController.php
│   │   │   └── RegisterController.php
│   │   │   └── ContactController.php
├── public/
│   ├── assets/css/
│   │   └── style.css
│   └── js/
│       └── script.js
└── resources/
   └── views/
       ├── layouts/
       │   └── app.blade.php
       ├── partials/
       │   ├── header.blade.php
       │   ├── nav.blade.php
       │   └── footer.blade.php
       ├── auth/
       │   ├── login.blade.php
       │   └── register.blade.php
       ├── blog/
       │   └── index.blade.php
       ├── about.blade.php
       ├── contact.blade.php
       ├── home.blade.php
       ├── categories.blade.php
       └── profile.blade.php

```
## Project Overview

This project fulfills an assignment to convert a static HTML page into a dynamic Laravel Blade template structure. Key features include:

- A base layout `(layouts/app.blade.php)` with reusable header, navigation, and footer partials.
- Authentication pages `(auth/login.blade.php, auth/register.blade.php)` handled by LoginController and RegisterController.
- Contact Us page `(contact.blade.php)` handled by ContactController.
- Static pages (home, about, categories, profile, blog/index) rendered via route closures.
- Custom CSS and JS in `public/assets` folder. and Tailwind CSS and FontAwesome loaded via CDN.

## Blade Features Used

- **Layouts:** `layouts/app.blade.php` uses `@yield` for dynamic content and title.
- **Partials:** `header.blade.php`, `nav.blade.php`, and `footer.blade.php` are included with `@include` for reusability.
- **Directives:** Used `@extends`, `@section`, `@yield` and `@csrf` for form handling.
- **Asset Helper:** `asset()` links custom CSS `(public/css/app.css)` and JS `(public/js/app.js)`.

## Setup Instructions

### 1. Clone the Repository:
```
git clone https://github.com/thecodeliner/blade-template-mastering
cd blade-template-mastering
```
### 2. Install Dependencies:
```
composer install
npm install
```
### 3. Configure Environment:
```
cp .env.example .env
```
- Generate an application key:
```
php artisan key:generate
```
### 4. Run Migrations:
```
php artisan migrate
```
### 5. Serve the Application:
```
php artisan serve
```
## Future Improvements
- Implement full authentication.
- Add dynamic data for `blog/index.blade.php` with a `BlogController`.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
