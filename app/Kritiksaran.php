<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kritiksaran extends Model
{
    protected $table ='kritiksaran';
    protected $fillable = ['nama', 'email', 'komentar'];
}
