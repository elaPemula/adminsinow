<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table ='warna';
    protected $fillable = ['nama', 'gambar', 'tulisan_id', 'sound_id','tulisan_en', 'sound_en'];
}
