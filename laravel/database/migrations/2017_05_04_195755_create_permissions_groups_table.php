<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permission_id')->unsigned()->default(0);
            $table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade');
            $table->integer('group_id')->unsigned()->default(0);
            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade');
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
        Schema::drop('permissions_groups');
    }
}
