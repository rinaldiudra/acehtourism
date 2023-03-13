<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    protected $table = "souvenir";
    protected $fillable =[
       'nama_usaha','jenis_produk','nama_pemilik','id_kabupaten','alamat','no_hp','foto'
    ];
}
