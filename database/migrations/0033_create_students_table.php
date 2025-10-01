<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id')->nullable()->constrained('media')->nullOnDelete();
            $table->string('student_id', 20)->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone', 15)->unique()->nullable();

            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER'])->nullable();

            $table->enum('religion', ['ISLAM', 'HINDUISM', 'CHRISTIANITY', 'BUDDHISM', 'OTHER'])->nullable();
            $table->string('guardian_name', 150)->nullable();
            $table->string('guardian_phone', 15)->nullable();

            $table->string('roll_number', 50);
            $table->foreignId('category_id')->constrained('categories')->nullOnDelete(); // Class

            $table->string('birth_registration_no', 20)->nullable();
            $table->string('national_id_no', 20)->nullable();

            $table->text('address')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
