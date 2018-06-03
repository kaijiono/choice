<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin; // 追加

class AdminsController extends Controller
{
    public function index()
    {
        
        $Admin = Admin::paginate(10);

        return view('Admins.index', [
            'admins' => $admins,
        ]);
    }
    
    public function show($id)
    {
        
        $admin = admin::find($id);
        $microposts = $admin->microposts()->paginate(10);

        $data = [
            'admin' => $admin,
            'microposts' => $microposts,
        ];

        $data += $this->counts($admin);

        return view('admin.show', $data);
    }
    
    public function __construct()
   {
    $this->middleware('auth:admin');
    }
    
    
}