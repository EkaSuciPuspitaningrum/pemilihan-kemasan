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
        Schema::create('jenis_kemasan', function (Blueprint $table) {
            $table->id();
            $table->text("id_kemasan");
            $table->string("jenis_kemasan")->nullable();
            $table->string("bahan_kemasan")->nullable();
            $table->string("keterangan_kemasan")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kemasan');
    }
};