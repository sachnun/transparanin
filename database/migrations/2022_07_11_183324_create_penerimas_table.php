<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nik')->unique();
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
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
        Schema::dropIfExists('penerimas');
    }
}
