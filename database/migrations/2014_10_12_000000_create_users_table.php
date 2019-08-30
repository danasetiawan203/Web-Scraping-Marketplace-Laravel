<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->length(60);
            $table->tinyInteger('id_role')->unsigned();
            $table->string('password');
            $table->integer('aktif')->default(1);
            $table->string('foto')->length(200)->default('3.jpg');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamps('email_verified_at')->nullable();
            $table->softDeletes();


            $table->index('id_role');
            $table->foreign('id_role')
              ->references('id')->on('roles')
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
}
