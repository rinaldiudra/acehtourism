<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemandu extends Model
{
    protected $table = "pemanduwisata";
    protected $fillable =[
       'nama_pemandu','spesifikasi_bahasa','id_kabupaten','alamat','no_hp'
    ];
}
