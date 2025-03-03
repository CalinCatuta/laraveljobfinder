<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // if the teable doesn't match the model name we need to specify
    protected $table = 'job_listings';

    // enable mass assignment on certain field, (security feat), this prevent users from modifying column that they shouldn't be able to modify.
    protected $fillable = ['title', 'description','salary', 'tags', 'job_type', 'remote', 'requirements',
            'benefits', 'address', 'city', 'state', 'zipcode', 'contact_email',
            'contact_phone', 'company_name', 'company_description', 'company_logo',
            'company_website'];
}
