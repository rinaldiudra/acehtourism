<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinasiwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasiwisata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_kabupaten');
            $table->String('nama_objek', 100);
            $table->String('jenis', 10);
            $table->String('lokasi');
            $table->String('foto');
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
        Schema::dropIfExists('destinasiwisata');
    }
}
