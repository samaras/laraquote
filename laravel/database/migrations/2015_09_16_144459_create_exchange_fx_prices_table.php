<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeFxPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_fx_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->default(0);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->double('price', 10, 4);
            $table->integer('base_currency')->unsigned()->default(0);
            $table->foreign('base_currency')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qoute_currency')->unsigned()->default(0);
            $table->foreign('qoute_currency')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->double('exchange_rate', 10, 4);
            $table->float('commision')->default(0.0);
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
        Schema::drop('exchange_fx_prices');
    }
}
