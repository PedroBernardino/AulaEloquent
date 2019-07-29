<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    
    public function users(){
        return $this->belongsToMany(User::class,'lesson_user','lesson_id','user_DRE', 'id', 'DRE');
    }
    
}
