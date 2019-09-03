<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    protected $fillable = [
        'operator_id',
        'nazwa',
    ];

    public function terminals(){
        return $this->hasMany('App/Models/terminal');
    } 

}
