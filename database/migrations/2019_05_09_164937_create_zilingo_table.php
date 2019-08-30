<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZilingoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('zilingo', function (Blueprint $table) {
        $table->engine = 'innoDB';
        $table->increments('id');
        $table->integer('id_scraping');
        $table->text('url');
        $table->string('nama_barang')->length(300);
        $table->string('harga')->length(50);
        $table->string('berat')->length(30);
        $table->string('stock')->length(30);
        $table->binary('deskripsi');
        $table->integer('cat1');
        $table->integer('cat2');
        $table->integer('cat3')->nullable();
        $table->string('ukuran')->length(50);
        $table->string('warna')->length(50);
        $table->binary('foto')->length(1000);
        $table->timestamps();

          $table->index('cat1');
          $table->foreign('cat1')
              ->references('id')->on('categori1')
              ->onUpdate('cascade')
              ->onDelete('cascade');

          $table->index('cat2');
          $table->foreign('cat2')
              ->references('id')->on('categori2')
              ->onUpdate('cascade')
              ->onDelete('cascade');

          $table->index('cat3');
          $table->foreign('cat3')
              ->references('id')->on('categori3')
              ->onUpdate('cascade')
              ->onDelete('cascade');

          $table->index('id_scraping');
          $table->foreign('id_scraping')
              ->references('id')->on('scraping')
              ->onDelete('cascade')
              ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zilingo');
    }
}
