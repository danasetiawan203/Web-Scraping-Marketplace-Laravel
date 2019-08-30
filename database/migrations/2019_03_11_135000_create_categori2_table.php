<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategori2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categori2', function (Blueprint $table) {
          $table->integer('id')->autoIncrement();
          $table->integer('id_cat1');
          $table->string('nama')->length(100);
          $table->timestamps();

          $table->index('id_cat1');
          $table->foreign('id_cat1')
              ->references('id')->on('categori1')
              ->onUpdate('cascade')
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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      Schema::dropIfExists('categori2');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
