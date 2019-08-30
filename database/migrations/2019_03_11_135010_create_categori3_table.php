<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategori3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categori3', function (Blueprint $table) {
          $table->integer('id')->autoIncrement();
          $table->integer('id_cat2');
          $table->string('nama')->length(100);
          $table->timestamps();

          $table->index('id_cat2');
          $table->foreign('id_cat2')
              ->references('id')->on('categori2')
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
      Schema::dropIfExists('categori3');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
