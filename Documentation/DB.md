# Postgresql

I use postgresql with pgAdmin 4 16.8 version.
I create a jobfinder user and DB (owner for DB is the jobfinder user).

in .env we use this

```php
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=jobfinder
DB_USERNAME=jobfinder
DB_PASSWORD=123456 // this is the password chose for pgAdmin.
```

instead of

```php
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

# Migrations

Used to manage database schema changes. They allow you to create, modify or delete tables and columns in a structured and repeatable way.
Migrations are run from the `database/migrations folder`

**Make sure to Uncomment ; in php.ini**
Find php.ini with php --ini command

```php
extension=pgsql
extension=pdo_pgsql
```

```bash
php artisan +
migrate - Runs all of the migrations that are in the migrations directory.
migrate:fresh - Completely drops all tables and re-runs all migrations.
migrate:install - Creates the migrations table.
migrate:refresh - Rolls back all migrations and then re-applies them.
migrate:reset - Rolls back all of the migrations that have been run.
migrate:rollback - Rolls back the last migration that was run.
migrate:status - Shows the status of the migrations.
```

After using `php artisan migrate` we can check pgAdmin in DB -> Schemas -> public -> Tables

# Create new migration

```bash
php artisan make:migration create_job_listings_table
```

-   This will create a new migrations in database folder with basic setup.

```bash
php artisan make:migration add_fields_to_job_listings_table --table=job_listings
```
