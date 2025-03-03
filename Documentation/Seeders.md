# Seeders

Laravel seeders allow you to populate your database with test or default data.
This is useful for initial setup or testing purposes. Seeders are part of Laravel's database seeding feature, which works alongside factories and migrations.

Create Seeders with command.

```bash
php artisan make:seeder JobSeeder
```

To run all seeders

```bash
php artisan db:seed
```

**Execute a soecufuc seeder**

```bash
php artisan db:seed --class=JobSeeder
```

# Features

✅ Uses Factories for dynamic data.
✅ Supports multiple seeders using DatabaseSeeder.php.
✅ Works well with Migrations (migrate --seed).
✅ Can be run individually (--class=SeederName).
✅ Uses Faker for realistic data generation.
