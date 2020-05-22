<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_detailpermintaan')->nullable();
            $table->double('pajak', 8, 3)->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamps();
            //fk
            $table->bigInteger('permintaan_id')->nullable();
            $table->bigInteger('barang_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_details');
    }
}
