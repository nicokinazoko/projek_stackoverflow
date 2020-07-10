<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->string('isi');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('jawaban_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('komentar_jawaban');
    }
}
