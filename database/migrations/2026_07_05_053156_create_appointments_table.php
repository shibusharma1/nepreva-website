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
        Schema::create('cl_appointments', function (Blueprint $table) {
            $table->id();

            // Patient Information
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('country')->nullable();

            // Appointment Details
            $table->string('request_type')->default('Appointment');
            $table->string('service')->nullable();      // Department
            $table->string('location');
            $table->date('appointment_date');
            $table->time('appointment_time');

            // Extra Information
            $table->string('subject')->nullable();
            $table->text('message')->nullable();

            // Appointment Status
            $table->enum('status', [
                'Pending',
                'Confirmed',
                'Cancelled',
                'Completed',
                'No Show'
            ])->default('Pending');

            $table->timestamps();

            // Helpful Indexes
            $table->index(['appointment_date', 'appointment_time']);
            $table->index('status');
            $table->index('email');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
