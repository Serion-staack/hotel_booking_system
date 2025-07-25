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
        Schema::table('rooms', function (Blueprint $table) {
            if (!Schema::hasColumn('rooms', 'status')) {
                $table->string('status')->default('free');
            }
            if (!Schema::hasColumn('rooms', 'type')) {
                $table->string('type')->nullable();
            }
            if (!Schema::hasColumn('rooms', 'amenities')) {
                $table->text('amenities')->nullable();
            }
            if (!Schema::hasColumn('rooms', 'floor')) {
                $table->integer('floor')->nullable();
            }
            if (!Schema::hasColumn('rooms', 'image_url')) {
                $table->string('image_url')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            if (Schema::hasColumn('rooms', 'type')) {
                $table->dropColumn('type');
            }
            if (Schema::hasColumn('rooms', 'amenities')) {
                $table->dropColumn('amenities');
            }
            if (Schema::hasColumn('rooms', 'floor')) {
                $table->dropColumn('floor');
            }
            if (Schema::hasColumn('rooms', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('rooms', 'image_url')) {
                $table->dropColumn('image_url');
            }
        });
    }
};
