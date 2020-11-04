<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huruf extends Model
{
    protected $table = 'huruf';
    protected $fillable = ['huruf', 'gambar', 'sound'];
}
