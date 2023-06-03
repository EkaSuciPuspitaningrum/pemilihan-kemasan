<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jenis_produk', function (Blueprint $table) {
            $table->id();
            $table->text("id_produk");
            $table->string("jenis_produk")->nullable();
            $table->string("keterangan_produk")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jenis_produk');
    }
};
