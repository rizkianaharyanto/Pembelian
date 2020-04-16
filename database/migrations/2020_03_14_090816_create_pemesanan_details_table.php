<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_detailpemesanan');
            $table->double('pajak', 8, 3);
            $table->integer('jumlah_barang');
            $table->integer('harga');
            $table->integer('barang_belum_diterima');
            $table->timestamps();
            //fk
            $table->bigInteger('pemesanan_id');
            $table->bigInteger('barang_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_details');
    }
}
