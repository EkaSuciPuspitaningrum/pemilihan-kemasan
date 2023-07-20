<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_pencarian', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('kode_user')->unique();
            $table->string('nama_produk');
            $table->string('berat_produk');
            $table->string('ukuran_produk');
            $table->string('volume_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_pencarian');
    }
};
