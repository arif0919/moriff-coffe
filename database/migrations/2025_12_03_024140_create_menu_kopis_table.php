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
        Schema::create('menu_kopis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->decimal('harga');

            $table->unsignedBigInteger('jenis_id');

            $table->unsignedBigInteger('barista_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_kopis');
    }
};
