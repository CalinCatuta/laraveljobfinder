# What are Factories

Factories are a way to define the attributes of a model in a reusable way. They allow you to define a blueprint for creating model instances with predefined attributes.
This is useful when you need to seed your database with sample data or when you need to create model instances in your tests.

**Laravel feat**
Laravel provides a factory class that you can use to define factories for your models.
Factories are typically stored in the `database/factories` directory of your Laravel application.

# Create Factori

```bash
php artisan make:factory JobFactory
```

-   This generated the file in database/factories

# Using tinker to create fake user

```bash
\App\Models\User::factory()->create();
\App\Models\User::factory()->count(10)->create(); // more users in the same time
```

-   This will create a fake user.

```php
 {#5294
    name: "Letitia Hagenes",
    email: "ramiro87@example.org",
    email_verified_at: "2025-03-03 11:07:42",
    #password: "$2y$12$ughCkQXHN6d2Y5/qFLGRkOw8vmTZyHm8oAwxAnTt26noaG1Diuprm",
    #remember_token: "IMhCiqESMt",
    updated_at: "2025-03-03 11:07:43",
    created_at: "2025-03-03 11:07:43",
    id: 1,
  }
```

```php
// Generate fake data using `faker`
'user_id' => User::factory(),
'title' => $this->faker->jobTitle(),
'description' => $this->faker->paragraphs (2, true),
'salary' => $this->faker->numberBetween (40000, 120000),
'tags' =>
implode(',
,
$this->faker->words (3)),
'job_type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract']),
' remote' => $this->faker->boolean(),
'requirements' => $this->faker->sentences (3, true),
'benefits' => $this->faker->sentences (2, true),
'address' => $this->faker->streetAddress(),
'city' => $this->faker->city(),
'state' => $this->faker->state(),
'zipcode' => $this->faker->postcode(),
'zipcode' => $this->faker->postcode().
```
