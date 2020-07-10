<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poin', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('pertanyaan_id')->unsigned()->nullable();
            $table->bigInteger('jawaban_id')->unsigned()->nullable();
            $table->integer('downvote');
            $table->integer('upvote');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('cascade');
            $table->foreign('jawaban_id')->references('id')->on('jawaban')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poin');
    }
}
