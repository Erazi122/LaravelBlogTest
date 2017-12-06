<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable 
{
    use Notifiable;

    use EntrustUserTrait;  

    public function tickets() 
    {
        return $this->hasMany(Ticket::class);
    }

    public function roles() 
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function posts() 
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Syncs the roles to the user. If there's no roles, detaches roles instead.
     *
     * @param $roles
     */
    public function syncRoles($roles)
    {
        if(!empty($roles)) {
            $this->roles()->sync($roles);
        } else {
            $this->roles()->detach();
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
