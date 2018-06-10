<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	protected $fillable = [
	'name', 'description', 'size', 'image', 'category_id','image', 'price' ];
    


    public function category(){
    	// return $this->belongsTo('Category::class');   or 
    	return $this->belongsTo('App\Category');
    }
}
