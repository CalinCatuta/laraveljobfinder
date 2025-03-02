# Tinker Psy Shell

Go into the tinker Shell `php artisan tinker`

-   Access the Job Model

```bash
App\Models\Job::all()
```

-   Showing the Schema.

```bash
Schema::getColumnListing('job_listing');
```

**We can create a variable in the Shell**

-   If we exit the Shell we need to do this agane.

`$job = App\Models\Job::class`

Then we can use `$job::all()` instead of `App\Models\Job::all()`

# Insert Data

```bash
$job::create(['title' => 'Job four', 'description' => 'This is job four'])
```

# Find Data

-   Find by id

```bash
$job::find(1);
```

# Update Data

-   Find by id and update it

```bash
$job::find(1)->update(['title' => 'Updated Job One']);
```

# Delete Data

```bash
$job::find(1)->delete();
```

**exit to leave the shell**
