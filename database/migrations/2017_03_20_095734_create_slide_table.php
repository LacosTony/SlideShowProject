<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('title_slide');
            $table->string('description');
            $table->integer('presentation_id')->unsigned();
            /////A VERIFIER/////
            $table->integer('composant_id')->unsigned();
            $table->string('composant_type');
            ///////////////////
            $table->timestamps();
            $table->foreign('presentation_id')->references('id')->on('presentations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
