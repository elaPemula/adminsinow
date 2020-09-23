<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $fillable =['pertanyaan', 'opsiA', 'opsiB', 'opsiC', 'opsiD', 'jawaban'];
}
