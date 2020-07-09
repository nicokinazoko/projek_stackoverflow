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
            $table->bigIncrements('id_komentar_jawaban');
            $table->string('isi_komentar_jawaban');
            $table->timestamps();
            $table->bigInteger('id_user');
            $table->bigInteger('id_jawaban');
            // $table->foreign('id_user')->references('id_user')->on('user');
            // $table->foreign('id_jawaban')->references('id_jawaban')->on('jawaban');
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
