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
        Schema::create('profile_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->text('alamat');
            $table->string('no_telp');
            $table->timestamps();
        });
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->text('icon');
            $table->timestamps();
        });
        Schema::create('image_landing_page', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_kelurahan');
        Schema::dropIfExists('social_media');
    }
};
