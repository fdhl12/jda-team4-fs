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
        Schema::create('demografi_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('demografis', function (Blueprint $table) {
            $table->id();
            $table->string('kriteria');
            $table->string('jumlah');
            $table->unsignedBigInteger('demografi_categories_id');
            $table->foreign('demografi_categories_id')->references('id')->on('demografi_categories');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demografis');
        Schema::dropIfExists('demografi_categories');
    }
};
