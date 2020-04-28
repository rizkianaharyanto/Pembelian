<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_pengirim');
            $table->string('nama_pengirim', 100);
            $table->string('telp_pengirim');
            $table->string('email_pengirim');
            $table->timestamps();
            //fk
            $table->bigInteger('supplier_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirims');
    }
}
