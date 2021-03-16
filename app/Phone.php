<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
      'number'
    ];

//    public function contact(){
//        return $this->belongsTo('App\Contact');
//    }
}
