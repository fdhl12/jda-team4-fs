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
        Schema::create('profile_kelurahans', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->text('alamat');
            $table->string('no_telp');
            $table->timestamps();
        });
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->text('icon');
            $table->timestamps();
        });
        Schema::create('image_landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_kelurahans');
        Schema::dropIfExists('social_medias');
        Schema::dropIfExists('image_landing_pages');
    }
};
