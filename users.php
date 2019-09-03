<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'login',
        'imie',
        'nazwisko',
        'adres',

    ];

    protected $hidden = [
        'password',
    ];

    public function terminals(){
        return $this->hasMany('App/Models/terminal');
    } 

}
