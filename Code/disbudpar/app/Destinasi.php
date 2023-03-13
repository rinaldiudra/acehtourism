<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table = "destinasiwisata";
    protected $fillable =[
       'namaobjek','jenis','id_kabupaten','lokasi','foto'
    ];

}
