<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angka', function (Blueprint $table) {
            $table->id();
            $table->integer('angka');
            $table->string('gambar');
            $table->string('tulisan');
            $table->string('sound');
            $table->enum('tipe', ['satuan', 'puluhan', 'ratusan']);
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
        Schema::dropIfExists('angka');
    }
}
