<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string  ('email', 30)->unique();
            $table->string  ('password', 255);
            $table->string  ('nama', 50);
            $table->string  ('nim', 10);
            $table->integer ('thn_lulus');
            $table->string  ('jk', 10);
            $table->string  ('tempat_lahir', 30);
            $table->date    ('tgl_lahir');
            $table->text    ('about');
            $table->text    ('organisasi');
            $table->text    ('prestasi');
            $table->string  ('no_hp',15);
            $table->string  ('instagram',20);
            $table->string  ('linkedin',20);
            $table->string  ('foto',200);
            $table->text    ('alamat');
            $table->string  ('ipk',4);
            $table->string  ('tpt_kerja',100);
            $table->string  ('pekerjaan',100);
            $table->string  ('jurusan',20);
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
        Schema::dropIfExists('alumni');
    }
}
