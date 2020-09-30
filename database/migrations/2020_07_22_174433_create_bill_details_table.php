<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
             $table->increments('id');
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->unsignedInteger('id_product');
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quntity');
            $table->float('unit_price');
            $table->float('total_price');
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
        Schema::dropIfExists('bill_details');
    }
}
