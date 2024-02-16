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
        Schema::create('school_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_room_type_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('has_windows')->default(false);
            $table->unsignedInteger('seats')->default(0);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_rooms');
    }
};
