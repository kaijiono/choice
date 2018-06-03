<?php
 
namespace App\Http\Controllers\Bp;  // \Bpを追加
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:bp');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bp.home');
    }
}