<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten',function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_prov');
            $table->string('nama')->length(100);
            $table->timestamps();

            $table->index('id_prov');
            $table->foreign('id_prov')
                ->references('id')->on('provinsi')
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
      Schema::dropIfExists('kabupaten');
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
