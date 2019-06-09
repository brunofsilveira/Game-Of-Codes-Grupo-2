<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rua', 120);
            $table->string('bairro', 90);
            $table->string('cep', 20);
            $table->string('cidade', 90);
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
        Schema::dropIfExists('vias');
    }
}
