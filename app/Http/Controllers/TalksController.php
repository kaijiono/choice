<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Talk;

class TalksController extends Controller
{
    public function create()
    {
        $is_user = new Is_user;
        $comment = new Comment;

        return view('talks.create', [
            'is_user' => $is_user,
            'comment' => $comment,
        ]);
    }
    
     

    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return redirect()->back();
    }
    
    public function talkroom($talkId)
    {
        $talks = Talk::where([

            ['user_id', $user_id],
            ['admin_id', $admin_id],
        ])->latest()->get();
        
        return view('talks.talkroom', [
            'talks' => $talks,
        ]);
    }
    

 
}
