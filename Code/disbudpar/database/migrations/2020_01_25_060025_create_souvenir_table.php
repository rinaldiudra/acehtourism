<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouvenirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souvenir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_kabupaten');
            $table->String('nama_usaha', 100);
            $table->String('nama_pemilik', 100);
            $table->String('jenis_produk', 100);
            $table->String('alamat');
            $table->String('no_hp', 15);
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
        Schema::dropIfExists('souvenir');
    }
}
