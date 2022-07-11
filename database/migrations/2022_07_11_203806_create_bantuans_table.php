<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bencana');
            $table->string('dampak');
            $table->set('status', ['permintaan', 'terkirim', 'batal'])->default('permintaan');
            $table->integer('total_rt');
            $table->integer('total_warga');
            $table->jsonb('data_penerima');
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
        Schema::dropIfExists('bantuans');
    }
}
