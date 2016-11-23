<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quote_id')->unsigned()->default(0);
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('product_id')->unsigned()->default(0);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 4);
            $table->integer('discount_id')->unsigned()->default(0);
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('quote_products');
    }
}
