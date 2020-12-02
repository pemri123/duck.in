<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peternak_id');
            $table->unsignedBigInteger('dokter_id');
            $table->string('pertanyaan');
            $table->string('jawaban')->nullable();
            $table->enum('status', ['sudah', 'belum']);
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
        Schema::dropIfExists('table_konsultasi');
    }
}
