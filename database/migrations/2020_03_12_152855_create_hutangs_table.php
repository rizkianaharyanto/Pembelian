<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHutangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hutangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_hutang');
            $table->integer('total_hutang');
            $table->integer('total_lunas');
            $table->integer('total_sisa');
            $table->timestamps();
            $table->string('transaction_type')->nullable();
            //fk
            $table->bigInteger('supplier_id')->nullable();
            $table->bigInteger('kode_transaksi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hutangs');
    }
}
