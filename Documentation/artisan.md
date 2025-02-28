## What is Artisan?

Artisan is a PHP script located in the root of your Laravel project (the `artisan` file). It provides a variety of commands to streamline development tasks such as:

-   Generating boilerplate code (e.g., controllers, models, components).
-   Running migrations to manage your database.
-   Serving your application locally for testing.
-   Clearing caches, optimizing the app, and more.

You interact with Artisan via the `php artisan` command in your terminal. Each command is designed to save you time and keep your project organized.

---

**Setting Up Artisan in Your Laravel Project**

Since Artisan comes with Laravel out of the box, you don’t need to "install" it separately.

## Artisan commands

```bash
php artisan make:controller JobController --resource // create a controller with CRUD functions setup

php artisan make:component Layout // create a component and his view Class
```

## What It Does `php artisan make:controller JobController --resource`

-   Creates a new controller file called JobController.php in the app/Http/Controllers directory.

-   Automatically adds seven predefined methods for CRUD operations: index(), create(), store(), show(), edit(), update(), and destroy().

-   Saves you from writing boilerplate code for basic resource management.

## Creating a Component

Components in Laravel are reusable pieces of UI logic (like a layout or a button) that combine a PHP class with a Blade view.

`php artisan make:component Layout`

-   Creates a Layout.php class in app/View/Components.
-   Creates a corresponding Blade view file in resources/views/components/layout.blade.php.
-   Sets you up to build reusable UI elements with logic encapsulated in the component class.
