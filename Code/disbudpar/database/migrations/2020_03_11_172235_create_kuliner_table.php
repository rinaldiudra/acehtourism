<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulinerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_kabupaten')->unsigned();
            $table->String('nama_kuliner', 100);
            $table->String('pemilik', 100);
            $table->String('detail_kuliner');
            $table->String('kontak', 100);
            $table->String('alamat');
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
        Schema::dropIfExists('kuliner');
    }
}
