# Models

To create a basic Model we use this command.

```bash
php artisan make:model Job
```

-   Inside the Model if the teable doesn't match the model name we need to specify.

```php
class Job extends Model
{
    protected $table = 'job_listings'; // migrations file name
}

```

-   In Controller we need to call the Model

```php
use App\Models\Job;
```
