<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminWelcomeController extends Controller
{
    public function index()
    {
        $data = [];   
        if (\Auth::check()) {    
    
            $admin = \Auth::user();
            $microposts = $admin->microposts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'admin' => $admin,
                'microposts' => $microposts,
            ];
            $data += $this->counts($admin);
            return view('admins.show', $data);
        }else {
            return view('adminwelcome');
        }
    }
    
    
    
}