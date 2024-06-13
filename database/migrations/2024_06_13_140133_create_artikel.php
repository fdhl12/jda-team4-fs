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
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('category_id')->nullable()->index();
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
        Schema::dropIfExists('categories');
    }
};
