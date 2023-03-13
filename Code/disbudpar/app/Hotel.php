<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotel";
    protected $fillable =[
       'nama_hotel','kategori','id_kabupaten','pimpinan','no_telp','alamat','jumlah_kamar','detail_kamar','foto'     
    ];
}
