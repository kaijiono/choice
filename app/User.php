<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Admin;

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
        return $this->belongsToMany(Admin::class, 'followings', 'user_id', 'admin_id')->withTimestamps();
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

    public function unfollow($userId){
    // 既にフォローしているかの確認
    $exist = $this->is_following($userId);
    
    if ($exist) {
        // 既にフォローしていればフォローを外す
        $this->followings()->detach($userId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
}

    public function is_following($userId) {
        return $this->followings()->where('user_id', $userId)->exists();
}
    
     public function talks()
    {
        return $this->hasMany(Talk::class);
    }
    
     public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
}
