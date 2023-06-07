<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikcets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia');
            $table->string('jenis_kelamin');
            $table->string('nomor_bangku');
            $table->date('tanggal_checkin');
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
        Schema::dropIfExists('tikcets');
    }
};
