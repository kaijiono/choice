<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = ['admin_id', 'user_id', 'comment', 'is_user'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    
}