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
        Schema::create('zaposleni_ekspozitura', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_zapo')->references('id')->on('zaposlen');
            $table->foreignId('id_expo')->references('id_ex')->on('ekspoziture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zaposleni_ekspozitura');
    }
};
