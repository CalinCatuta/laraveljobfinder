# Types Of Relationships

-   Relationships in eloquent, which allo us to relate models.
-   In our application, we want to associate or relate job listings with a user, because obviously we don't want just any user to be able to edit or delete any job listing.
-   A job listing has to belong to a user, in any DB design.

---

# Common Relationships

# One-To-One

-   Relationship between two tables where each record in one table is related to exactly one record in the other table.
    Example: User profiles

# One-To-Many

-   Relationship between two tables where each record in one table is related to zero, one, or many records in the other table.
    Example: User blog posts

# Many-To-Many

-   Relationship between two tables where each record in one table is related to zero, one, or many records in the other table, and vice versa.
    Example: Student courses

# Example

```php
// Relation to user
    public function user(): BelongsTo
    {
        // `this` meaning the job.
        return $this->belongsTo(User::class);
    }
```

```php
 // Relate to job listing
    public function jobListings(): HasMany
    {
        // `this` meaning the user.
        return $this->hasMany(JobListing::class);
    }
```

# Migrations

```php
            // Add user foriegn key constraint
            // we take the user_id from the table and we references to the id field on the user table.
            // we delete the job listing if the account is deleted
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
```
