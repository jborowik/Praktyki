<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terminal extends Model
{
    Protected $fillable = [
    'user_id',
    'nazwa',
    'adres',
    'operator_id',
    'wspolrzedne',
    'status',
    'imsi_id_karty',
    'ip',
    ];

    public function users(){
        return $this->belongsTo('App/Models/users');
    }

    public function operators(){
        return $this->belongsTo('App/Models/operators');
    }

}
