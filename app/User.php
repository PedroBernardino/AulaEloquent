<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasApiTokens;

    
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
    public function roles() {
        return $this->belongsToMany('App\Role');
    }
    
    public function newRole($id) {
        $role = Role::find($id);
        $this->roles()->attach($role->id);
    }
    public function delRole($id) {
        $role = Role::find($id);
        $this->roles()->detach($role->id);
    }

    public function lessons(){
        return $this->belongsToMany('App\Lesson');
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
    public function hasRole($name)
    {
        if($this->roles()->where('cargo',$name)->count() > 0)
        {
            return 1;
        }
        return 0;
    }

}
