<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->bigIncrements('id_travel');
            $table->Integer('id_kabupaten')->unsigned();
            $table->String('nama_travel', 100);
            $table->String('jenis', 50);
            $table->String('no_izin', 100);
            $table->String('pimpinan', 100);
            $table->String('alamat');
            $table->String('kontak', 100);
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
        Schema::dropIfExists('travel');
    }
}
