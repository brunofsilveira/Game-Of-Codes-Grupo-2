<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViaIdToLocals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locals', function (Blueprint $table) {
            $table->integer('via_id')->unsigned();
            $table->foreign('via_id')->references('id')->on('vias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locals', function (Blueprint $table) {
            //
        });
    }
}
