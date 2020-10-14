<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembacaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membaca', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('tulisan_id');
            $table->string('sound_id');
            $table->string('tulisan_en');
            $table->string('sound_en');
            $table->enum('tipe', ['hewan', 'buah']);
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
        Schema::dropIfExists('membaca');
    }
}
