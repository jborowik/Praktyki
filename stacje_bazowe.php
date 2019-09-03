<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stacje_bazowe extends Model
{
    protected $fillable = [
    'id',
    'nazwa',
    'status',
    'wspolrzedne',
    'range',
    ];
}
