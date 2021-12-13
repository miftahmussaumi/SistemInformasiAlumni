<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penulis')->unsigned();
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('judul', 100);
            $table->string('gambar', 200);
            $table->text('isi');
            $table->date('tgl_up');
            $table->timestamps();
        });

        Schema::table('informasi', function (Blueprint $table) {
            $table->foreign('id_penulis')->references('id')->on('alumni')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kategori')->references('id')->on('kat_info')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi');
    }
}
