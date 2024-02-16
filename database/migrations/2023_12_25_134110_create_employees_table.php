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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->boolean('is_teacher')->default(false);
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->float('salary')->default(0);
            $table->timestamps();

            // $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
