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
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique(); // Unique email field
            $table->string('phone')->nullable(); // Phone number (nullable)
            $table->string('department')->nullable(); // Department (nullable)
            $table->decimal('salary', 10, 2); // Salary with two decimal places
            $table->timestamps();

            });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }

}
