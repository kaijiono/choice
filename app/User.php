<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'talks', 'user_id', 'admin_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'talks', 'user_id', 'admin_id')->withTimestamps();
    }
    public function follow($adminId){
        // 既にフォローしているかの確認
        $exist = $this->is_following($adminId); 
        
        if ($exist) {
             // 既にフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->followings()->attach($adminId);
            return true;
    }
}

    public function unfollow($adminId){
    // 既にフォローしているかの確認
    $exist = $this->is_following($adminId);
    
    if ($exist) {
        // 既にフォローしていればフォローを外す
        $this->followings()->detach($adminId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
}

    public function is_following($adminId) {
        return $this->followings()->where('admin_id', $adminId)->exists();
}
    
    
    public function microposts()
    {
        return $this->hasMany(Micropost::class);
    }
    
    
}
