<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenyanyiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menyanyi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('icon');
            $table->string('sound');
            $table->string('gambar');
            $table->integer('total_akses');
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
        Schema::dropIfExists('menyanyi');
    }
}
