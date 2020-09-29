<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membaca extends Model
{
    protected $table ='membaca';
    protected $fillable = ['nama', 'tipe', 'gambar', 'tulisan_id', 'sound_id', 'tulisan_en', 'sound_en'];
}
