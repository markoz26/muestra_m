<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public function contacts(){
    	return $this->hasMany('App\contact');
    }
}
