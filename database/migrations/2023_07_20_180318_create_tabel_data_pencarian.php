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
        Schema::create('data_pencarian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('berat_produk');
            $table->string('ukuran_produk');
            $table->string('volume_produk');
            $table->unsignedBigInteger('jenis_kemasan_id');
            $table->float('persen');
            $table->timestamps();

            $table->foreign('jenis_kemasan_id')->references('id')->on('jenis_kemasan')->onDelete('cascade');

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
