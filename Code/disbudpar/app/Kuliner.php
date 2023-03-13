<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = "kuliner";
    protected $fillable =[
       'nama_kuliner','alamat','id_kabupaten','pemilik','kontak','detail_kuliner'
    ];
}
