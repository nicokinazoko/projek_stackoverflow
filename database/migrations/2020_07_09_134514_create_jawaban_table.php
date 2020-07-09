<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id_jawaban');
            $table->string('isi_jawaban');
            $table->timestamps();
            $table->bigInteger('id_user');
            $table->bigInteger('id_pertanyaan');
            // $table->foreign('id_user')->references('id_user')->on('user');
            // $table->foreign('id_pertanyaan')->references('id_pertanyaan')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
