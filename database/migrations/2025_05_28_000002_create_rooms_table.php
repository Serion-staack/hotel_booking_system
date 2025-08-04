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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique();
            $table->string('name')->nullable();
            $table->integer('capacity')->nullable();
             $table->string('status')->default('free');
             $table->string('room_type')->nullable();
            $table->text('description')->nullable();
            $table->integer('beds')->nullable();
            $table->decimal('price',8,2);
            $table->boolean('is_active')->default(true);
            $table->json('amenities')->nullable();
            $table->integer('floor')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
