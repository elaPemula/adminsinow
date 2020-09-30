<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mewarna extends Model
{
    protected $table ='mewarna';
    protected $fillable = ['keterangan', 'gambar'];
    
}
