<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjianSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian_soals', function (Blueprint $table) {
            $table->integer('id_ujian')->unsigned();
            $table->integer('id_soal')->unsigned();
            $table->timestamps();

             $table->foreign('id_soal') // foreignKey 
              ->references('id') // dari kolom id 
              ->on('banksoals') // di tabel users
              ->onUpdate('cascade') // ketika terjadi perubahan di tabel users maka akan update
              ->onDelete('cascade');
             $table->foreign('id_ujian') // foreignKey 
              ->references('id') // dari kolom id 
              ->on('ujians') // di tabel users
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
        Schema::dropIfExists('ujian_soals');
    }
}
