<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    
    public function users(){
        return $this->hasMany('App\User','lesson_user','lesson_id','DRE');
    }
    
}
