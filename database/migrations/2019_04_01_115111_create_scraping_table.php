<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrapingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('scraping', function (Blueprint $table) {
             $table->integer('id')->autoIncrement();
             $table->unsignedInteger('id_user')->length(6);
             $table->string('nama')->unique()->length(100);
             $table->string('no_identitas')->length(30);
             $table->string('tanggal_lahir')->length(10);
             $table->string('pekerjaan')->length(15);
             $table->string('no_hp')->length(14);
             $table->integer('id_prov')->length(3);
             $table->integer('id_kab')->length(4);
             $table->string('email')->length(60);
             $table->string('foto')->length(200)->default('3.jpg');
             $table->float('lat',10,6);
             $table->float('long',10,6);
             $table->string('alamat')->length(100);
             $table->timestamps();
             $table->softDeletes();

             $table->index('id_prov');
             $table->foreign('id_prov')
                 ->references('id')->on('provinsi')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

             $table->index('id_kab');
             $table->foreign('id_kab')
                 ->references('id')->on('kabupaten')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

             $table->index('id_user');
             $table->foreign('id_user')
                 ->references('id')->on('users')
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
        Schema::dropIfExists('scraping');
    }
}
