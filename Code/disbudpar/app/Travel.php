<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = "travel";
    protected $fillable =[
        'nama_travel','id_kabupaten','jenis','no_izin','pimpinan','alamat','kontak'
    ];
}
