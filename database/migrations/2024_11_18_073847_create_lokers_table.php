<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignID('user_id');
            $table->string('nama_perusahaan')->nullable();
            $table->string('nama_posisi')->nullable();
            $table->string('jobdesk')->nullable();
            $table->string('salary')->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('gambar_loker')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokers');
    }
}
