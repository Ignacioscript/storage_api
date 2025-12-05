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
        Schema::create('files', static function (Blueprint $table) {
            $table->id();

            //Foreign key to disk table
            $table->foreignId('disk_id')->constrained('disks')->cascadeOnDelete();

            //File Information
            $table->string('name');
            $table->string('path');
            $table->string('mime_type');
            $table->unsignedBigInteger('size'); //size in bytes
            $table->string('hash', 64)->nullable();
            $table->json('metadata')->nullable();

            //Timestamp
            $table->timestamps();

            //Soft deletes (files can be "deleted" but recoverable)
            $table->softDeletes();

            //Indexes
            $table->index('disk_id');
            $table->index('mime_type');
            $table->index('hash');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
