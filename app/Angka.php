<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angka extends Model
{
    protected $table = 'angka';
    protected $fillable = ['angka', 'gambar', 'tulisan', 'sound', 'tipe'];
}
