<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
      'name'
    ];

//    public function contact(){
//        return $this->belongsTo('App\Contact');
//    }
}
