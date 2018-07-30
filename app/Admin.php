<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

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
    
    
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followings', 'user_id', 'admin_id')->withTimestamps();
    }
    
    public function talks()
    {
        return $this->hasMany(Talk::class);
    }
  
}
