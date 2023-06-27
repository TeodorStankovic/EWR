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
        Schema::create('ekspoziture', function (Blueprint $table) {
            $table->id("id_ex");
            $table->string("naziv");
            $table->string("mesto");
            $table->string("sef");
            $table->mediumInteger("kapacitet");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekspoziture');
    }
};
