<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranHutangDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_hutang_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->timestamps();
            //fk
            $table->bigInteger('pembayaran_id');
            $table->bigInteger('hutang_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_hutang_details');
    }
}
