<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaktuTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waktu_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('stok');
            $table->integer('jumlah_terjual');
            $table->timestamps();
            $table->unsignedBigInteger('nama_barang_id');
            $table->foreign('nama_barang_id')->references('id')->on('master_penjualan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waktu_transaksi');
    }
}