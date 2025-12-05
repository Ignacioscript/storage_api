<?php

declare(strict_types=1);

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
        Schema::create('disks', static function (Blueprint $table) {
            $table->id();

            //Disk information
            $table->string('name')->unique();
            $table->string('driver');
            $table->json('configuration')->nullable();
            $table->boolean('is_active')->default(true);

            //timestamp
            $table->timestamps();

            //Index
            $table->index('driver');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disks');
    }
};
