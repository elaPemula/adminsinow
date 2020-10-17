<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menyanyi extends Model
{
    protected $table = 'menyanyi';
    protected $fillable = ['judul','icon', 'sound', 'gambar'];
}
