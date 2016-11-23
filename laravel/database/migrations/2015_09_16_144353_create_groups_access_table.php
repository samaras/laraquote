<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_access', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned()->default(0);
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->string('access');
            $table->string('group_access');
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
        Schema::drop('groups_access');
    }
}
