<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifs', function (Blueprint $table) {
            $table->id();
            $table->string('nommedecin');
            $table->string('nompatient');
            $table->string('nbjour');
            $table->string('date');
            $table->string('daterepos');
            $table->string('sig');
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
        Schema::dropIfExists('certifs');
    }
}
