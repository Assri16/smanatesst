<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banksoals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soal');
            $table->integer('id_lvsoal')->unsigned();
            $table->timestamps();
            $table->foreign('id_lvsoal') // foreignKey 
              ->references('id') // dari kolom id 
              ->on('lvsoals') // di tabel users
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
        Schema::dropIfExists('banksoals');
    }
}
