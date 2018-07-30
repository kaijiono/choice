<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $fillable = ['content', 'user_id','title'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    

}
