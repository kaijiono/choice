<?php
 
// app/Http/Controllers/Admin/Auth/LoginController.php
namespace App\Http\Controllers\Admin\Auth; // \Adminを追記
 
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * From app/Http/Controllers/Auth/LoginController.php
 */

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
 
    use AuthenticatesUsers;
 
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home'; //管理者ログイン成功後のジャンプ先
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // http://www.84kure.com/blog/2016/06/06/laravel-5-3%E3%81%A7multi-auth%E3%82%92%E4%BD%BF%E3%81%86/
    
    public function showLoginForm()
    {
        return view('admin.auth.login'); //管理者ログインページのテンプレート
    }
 
    protected function guard()
    {
        return Auth::guard('admin'); // 管理社認証用のguard指定
    }
    
/**    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect('/admin/login');
    }  **/    
}