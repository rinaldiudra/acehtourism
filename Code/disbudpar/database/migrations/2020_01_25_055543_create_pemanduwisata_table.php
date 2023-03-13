<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemanduwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemanduwisata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_kabupaten');
            $table->String('nama_pemandu', 100);
            $table->String('spesifikasi_bahasa');
            $table->String('alamat');
            $table->String('no_hp', 15);
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
        Schema::dropIfExists('pemanduwisata');
    }
}
