<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        
        $count_messages = $user->messages()->count();
        $count_followings = $user->followings()->count();
        

        return [
            'count_messages' => $count_messages,
            'count_follwings' => $count_followings,
        ];
    }
}
