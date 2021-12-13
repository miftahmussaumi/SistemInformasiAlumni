<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanAkunTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_akun', function (Blueprint $table) {
            $table->id();
            $table->string('email', 30);
            $table->string('password', 255);
            $table->string('nama', 50);
            $table->string('nim', 10);
            $table->integer('thn_lulus');
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
        Schema::dropIfExists('pengajuan_akun');
    }
}
