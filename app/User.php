<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DRE','name', 'email', 'password','age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primarykey = 'DRE';

    public function lessons(){
        return $this->belongsToMany(Lesson::class,'lesson_user','user_DRE','lesson_id', 'DRE', 'id');
    }
    public function findthree() {
        $users = User::all();
        $filter = [];
        foreach($users as $user)
        {
            if($user->lessons->count() > 2)
            {
                array_push($filter, $user);
            }
        }
        return $filter;
    }

}
