<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name'
    ];

    public function contacts() {
        $this->belongsToMany('App\User');
    }
}
