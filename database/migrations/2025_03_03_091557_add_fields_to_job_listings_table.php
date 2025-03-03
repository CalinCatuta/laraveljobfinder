<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Clear table data
        DB::table('job_listings')->truncate();
        Schema::table('job_listings', function (Blueprint $table) {
            // Define Schema
            // $table->string('state'); this is required
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('job_type', ['Full-Time', 'Part-Time', 'Contract', 'Temporary', 'Internship', 'Volunteer', 'On-Call'])->default('Full-Time');
            $table->boolean('remote')->default(false);
            $table->text('requirments')->nullable();
            $table->text('benefits')->nullable();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->text('company_description')->nullable();
            $table->sting('company_logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            // Remove all the fields
            $table->dropColumn(['salary', 'tags', 'job_type', 'remote', 'requirements',
            'benefits', 'address', 'city', 'state', 'zipcode', 'contact_email',
            'contact_phone', 'company_name', 'company_description', 'company_logo',
            'company_website']);
        });
    }
};
