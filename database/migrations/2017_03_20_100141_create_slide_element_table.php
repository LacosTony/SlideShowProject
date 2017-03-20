<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_elements',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('subtitle');
            $table->string('text');
            $table->timestamps();
            $table->integer('slide_id')->unsigned();
            $table->foreign('slide_id')->references('id')->on('slides');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_elements');
    }
}
