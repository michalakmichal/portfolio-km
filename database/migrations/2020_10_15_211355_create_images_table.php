<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();
            $table->primary(['id','album_id']);
            //$table->foreign(['album_id','id'])->references(['album_id','id'])->on('images');
            $table->foreign('album_id')->references('id')->on('albums');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
