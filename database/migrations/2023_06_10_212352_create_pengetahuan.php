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
        Schema::create('pengetahuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_kemasan_id');
            $table->unsignedBigInteger('kriteria_id');
            $table->string("cf");
            $table->timestamps();
            
            $table->foreign('kriteria_id')->references('id')->on('kriteria_produk')->onDelete('cascade');
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
        Schema::dropIfExists('pengetahuan');
    }
};
