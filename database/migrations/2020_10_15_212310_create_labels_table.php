<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('album_id');
            $table->json('content');
            $table->timestamps();
            $table->primary(['id','image_id','album_id']);
            //$table->foreign(['album_id','id'])->references(['album_id','id'])->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labels');
    }
}
