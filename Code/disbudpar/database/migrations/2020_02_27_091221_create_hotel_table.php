<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->bigIncrements('id_hotel');
            $table->Integer('id_kabupaten')->unsigned();
            $table->String('nama_hotel', 100);
            $table->String('kategori', 20);
            $table->String('pimpinan', 100);
            $table->String('alamat');
            $table->String('no_telp', 20);
            $table->Integer('jumlah_kamar')->length(10)->unsigned();
            $table->String('detail_kamar', 255);
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
        Schema::dropIfExists('hotel');
    }
}
