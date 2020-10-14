<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHurufTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huruf', function (Blueprint $table) {
            $table->id();
            $table->string('huruf');
            $table->string('gambar');
            $table->string('sound');
            $table->enum('tipe', ['1', '2', '3']);
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
        Schema::dropIfExists('huruf');
    }
}
