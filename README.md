# To-Do List App

My first CRUD application, built with Laravel to learn the fundamentals:
routing, controllers, migrations, and Blade views.

## Features

- Add tasks
- Mark tasks complete / incomplete
- Delete tasks

## Built with

- Laravel (PHP)
- SQLite
- Blade templates
- Served locally with Laravel Herd

## What I learned

- How a request flows from a route to a controller to a view
- Writing migrations to define database tables in code
- Form handling, validation, and CSRF protection
- Route model binding for cleaner update/delete actions
- Resolving a real port 80 conflict between Apache and nginx

## Running it locally

1. Clone the repo
2. Run `composer install`
3. Copy `.env.example` to `.env` and run `php artisan key:generate`
4. Run `php artisan migrate`
5. Serve with Herd, or run `php artisan serve`