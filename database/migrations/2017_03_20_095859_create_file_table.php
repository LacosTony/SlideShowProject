<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('title_file');
            $table->string('path_file');
            $table->string('url');
            $table->integer('width');
            $table->integer('height');
            $table->string('mimeType');
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
        Schema::dropIfExists('files');
    }
}
