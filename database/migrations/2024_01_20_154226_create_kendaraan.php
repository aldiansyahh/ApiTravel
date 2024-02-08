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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id('id_kendaraan')->autoIncrement();
            $table->unsignedBigInteger('id_penyewa');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa')->onDelete('cascade');
            $table->string('nama');
            $table->string('jenis');
            $table->string('merk');
            $table->integer('tahun_produksi');
            $table->string('warna');
            $table->string('nomor_plat');
            $table->decimal('harga_sewa', 10, 2);
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
        Schema::dropIfExists('kendaraan');
    }
};
