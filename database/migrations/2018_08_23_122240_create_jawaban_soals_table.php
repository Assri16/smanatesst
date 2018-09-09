<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_soals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_soal')->unsigned();
            $table->string('jawaban');
            $table->enum('is_benar',['1','0']);
            $table->timestamps();
            $table->foreign('id_soal') // foreignKey 
              ->references('id') // dari kolom id 
              ->on('banksoals') // di tabel users
              ->onUpdate('cascade') // ketika terjadi perubahan di tabel users maka akan update
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_soals');
    }
}
