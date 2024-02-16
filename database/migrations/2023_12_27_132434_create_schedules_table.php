*<?php

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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->date('date');
            $table->time('time');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('school_room_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('teacher_id');
            $table->text('requirements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
