<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; //追加

use App\Message; //追加

use App\Admin; //追加

class WelcomeController extends Controller
{
    //message一覧の取得
    public function index()
    {
        $data = [];
        if (\Auth::check()) 
        {
            
            $user = \Auth::user();
            $messages = $user->messages()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'messages' => $messages,
                
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        
        }else {
            return view('welcome');
        }
    }
}