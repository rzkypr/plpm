<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();

            $table->string('user_nim');
            $table->string('name');
            $table->integer('user_id');
            $table->text('dinas');
            $table->text('nim');
            $table->text('nama');
            $table->text('kampus');
            $table->text('jurusan');
            $table->text('jenjang');
            $table->text('whatsapp');
            $table->text('email');
            $table->text('mulai');
            $table->text('selesai');
            $table->string('status')->default('Belum di Proses');
            $table->softDeletes();

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
        Schema::dropIfExists('pengaduans');
    }
}
