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
        Schema::create('school_master', function (Blueprint $table) {

        $table->id();

        // -------------------------------------------------
        // Basic School Information
        // -------------------------------------------------

        $table->string('name', 255);

        $table->string('registration_code', 50)
            ->unique();

        $table->string('email', 255)
            ->unique();

        $table->string('alt_email', 255)
            ->nullable();

        $table->string('mobile', 15)
            ->unique();

        $table->string('alt_mobile', 15)
            ->nullable();


        // -------------------------------------------------
        // Address
        // -------------------------------------------------

        $table->text('address_line1')
            ->nullable();

        $table->text('address_line2')
            ->nullable();

        $table->string('landmark', 255)
            ->nullable();


        // -------------------------------------------------
        // Location
        // -------------------------------------------------

        $table->foreignId('country_id')
            ->constrained('countries')
            ->cascadeOnDelete();

        $table->foreignId('state_id')
            ->constrained('states')
            ->cascadeOnDelete();

        $table->foreignId('city_id')
            ->constrained('cities')
            ->cascadeOnDelete();

        $table->string('pincode', 10)
            ->nullable();


        // -------------------------------------------------
        // Geo Location
        // -------------------------------------------------

        $table->decimal('latitude', 10, 8)
            ->nullable();

        $table->decimal('longitude', 11, 8)
            ->nullable();


        // -------------------------------------------------
        // School Details
        // -------------------------------------------------

        $table->string('logo')
            ->nullable();

        $table->string('medium', 50)
            ->nullable();


        // -------------------------------------------------
        // Verification
        // -------------------------------------------------

        $table->timestamp('email_verified_at')
            ->nullable();

        $table->timestamp('mobile_verified_at')
            ->nullable();


        // -------------------------------------------------
        // School Status
        // -------------------------------------------------

        $table->boolean('is_active')
            ->default(true);

        $table->enum('status', [
            'pending',
            'approved',
            'rejected',
            'suspended',
            'inactive'
        ])->default('pending');


        // -------------------------------------------------
        // Subscription / Validity
        // -------------------------------------------------

        $table->timestamp('valid_upto')->nullable();


        // -------------------------------------------------
        // Login Information
        // -------------------------------------------------

        $table->timestamp('last_login_at')
            ->nullable();

        $table->timestamp('approved_at')->nullable();

        $table->unsignedBigInteger('approved_by')->nullable();


        // -------------------------------------------------
        // Created / Updated
        // -------------------------------------------------
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_master');
    }
};
