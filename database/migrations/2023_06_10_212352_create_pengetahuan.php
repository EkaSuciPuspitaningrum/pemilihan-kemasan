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
            $table->text("id_pengetahuan");
            $table->string("jenis_kemasan")->nullable();
            $table->string("kriteria_produk")->nullable();
            $table->string("nilai_mb")->nullable();
            $table->string("nilai_md")->nullable();
            $table->string("nilai_cf")->nullable();
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
        Schema::dropIfExists('pengetahuan');
    }
};
