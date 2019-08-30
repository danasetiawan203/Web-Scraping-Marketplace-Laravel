<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
          $table->unsignedInteger('id')->autoIncrement();
          $table->string('Marketplace')->length(100);
          $table->string('nama')->length(200);
          $table->string('Harga')->length(200);
          $table->string('deskripsi')->length(200);
          $table->string('foto')->length(200);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
