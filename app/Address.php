<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['addressline','city','state','zip','country','phone'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
