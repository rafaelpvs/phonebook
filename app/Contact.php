<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name'
    ];


    public function emails() {
        return $this->hasMany('App\Email');
    }
    public function phones() {
        return $this->hasMany('App\Phone');
    }
}
