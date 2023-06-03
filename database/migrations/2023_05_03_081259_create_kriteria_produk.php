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
        Schema::create('kriteria_produk', function (Blueprint $table) {
            $table->id();
            $table->text("id_kriteria");
            $table->string("kriteria_produk")->nullable();
            $table->string("keterangan_kriteria")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_produk');
    }
};
