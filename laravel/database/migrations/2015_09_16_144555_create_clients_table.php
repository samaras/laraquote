<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company')->default('');
            $table->string('address')->default('');
            $table->string('contact_person')->default('');
            $table->string('address_line1')->default('');
            $table->string('address_line2')->default('');
            $table->string('address_line3')->default('');
            $table->string('province')->default('');
            $table->string('postal_code', 45)->default('');
            $table->string('phone_number', 20)->default('');
            $table->string('cell_number', 20)->default('');
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
        Schema::drop('clients');
    }
}
