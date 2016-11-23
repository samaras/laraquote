<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default(0);
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('quote_date');
            $table->integer('status_id')->unsigned()->default(0);
            $table->foreign('status_id')->references('id')->on('quote_status')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('quotes');
    }
}
