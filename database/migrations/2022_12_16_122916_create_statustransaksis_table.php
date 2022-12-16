<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatustransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statustransaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('namastatus')->nullable();
            $table->integer('idtransaksi')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('statustransaksis');
    }
}
