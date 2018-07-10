<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public function company(){
    	retrun $this->belongsTo('App\company');
    }
}
