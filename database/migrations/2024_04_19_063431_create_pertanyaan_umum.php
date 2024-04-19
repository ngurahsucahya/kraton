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
        Schema::create('pertanyaan_umum', function (Blueprint $table) {
            $table->id();
            $table->longText('pertanyaan');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('jawabanBenar');
            $table->string('penjelasan')->nullable();
            $table->integer('nilai')->nullable();
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
        Schema::dropIfExists('pertanyaan_umum');
    }
};
