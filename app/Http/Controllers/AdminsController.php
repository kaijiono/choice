<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin; // 追加

use \Auth;

use App\Talk;

class AdminsController extends Controller
{
    //コンストラクタ
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['index', 'show', 'showuser', 'admins']]);
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでadmins/にアクセスされた場合の「一覧表示処理」
     
    public function index()
    {
        $admins = Admin::paginate(10);

        return view('admins.index', [
            'admins' => $admins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでadmins/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $admin = new Admin;

        return view('admins.create', [
            'admin' => $admin,
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // postでadmins/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $this->validate($request, [
            'alias' => 'max:191',
            'address' => 'max:191',
            'phone' => 'max:191',
            'line' => 'max:191',
            'family_structure' => 'max:191',
            'language' => 'max:191',
            'residential_district' => 'max:191',
            'birthplace' => 'max:191',
            'hobby' => 'max:191',
            'company' => 'max:191',
            'company_phone' => 'max:191',
            'service_years' => 'numeric|max:191',
            'qualification' => 'max:191',
            
            
        ]);
        $admin = new admin;
        $admin->name = str_random(40);
        $admin->email = str_random(40);
        $admin->password = str_random(40);
        $admin->alias = $request->alias;
        $admin->address = $request->address;
        $admin->phone = $request->phone;
        $admin->line = $request->line;
        $admin->family_structure = $request->family_structure;
        $admin->language = $request->language;
        $admin->residential_district = $request->residential_district;
        $admin->birthplace = $request->birthplace;
        $admin->hobby = $request->hobby;
        $admin->company = $request->company;
        $admin->company_phone = $request->company_phone;
        $admin->service_years = $request->service_years;
        $admin->qualification = $request->qualification;
        $admin->career = $request->career;
        $admin->message = $request->message;
        
        $admin->save();

        return view('admins.show', [
            'admin' => $admin,
        ]);
    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでadmins/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    { 
       $admin = Admin::find($id);
       
        return view('admins.show', [
            'admin' => $admin,
        ]);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでadmins/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $admins = Admin::find($id);

        return view('Admins.edit', [
            'admin' => $admin,
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでusers/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'alias' => 'max:191',
            'address' => 'max:191',
            'phone' => 'max:191',
            'line' => 'max:191',
            'family_structure' => 'max:191',
            'language' => 'max:191',
            'residential_district' => 'max:191',
            'birthplace' => 'max:191',
            'hobby' => 'max:191',
            'company' => 'max:191',
            'company_phone' => 'max:191',
            'service_years' => 'max:191',
            'qualification' => 'max:191',
            
            
        ]);
        $admin = Admin::find($id);
        $admin->alias = $request->alias;
        $admin->address = $request->address;
        $admin->phone = $request->phone;
        $admin->line = $request->line;
        $admin->family_structure = $request->family_structure;
        $admin->language = $request->language;
        $admin->residential_district = $request->residential_district;
        $admin->birthplace = $request->birthplace;
        $admin->hobby = $request->hobby;
        $admin->company = $request->company;
        $admin->company_phone = $request->company_phone;
        $admin->service_years = $request->service_years;
        $admin->qualification = $request->qualification;
        $admin->career = $request->career;
        $admin->message = $request->message;
        
        $admin->save();

        return view('admins.show', [
            'admin' => $admin,
        ]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでusers/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return view('admins.index', [
            'admin' => $admin,
        ]);
    }
    
    public function followings($id)
    {
        $admin = Admin::find($id)->paginate(10);
       

        $data = [
            'admin' => $admin,
            
        ];

        $data += $this->counts($admin);

        return view('talks.followings', $data);
    }

    public function followers($id)
    {
        $admin = Admin::find($id)->paginate(10);
        

        $data = [
            'admin' => $admin,
            
        ];

        $data += $this->counts($admin);

        return view('talks.followers', $data);
    }
    
     public function showuser($id)
    {
        $admin = Admin::where('id', $id)->first();
       
        return view('admins.showuser', [
            'admin' => $admin,
        ]);
    }
    
    // ログイン後のページは admin用のTOPページ
    public function admin()
    { 
      
       $admin = Auth::guard('admin')->user();
       
        return view('admins.admin', [
            'admin' => $admin,
        ]);
    }
     
     // ログイン後のページは admin用のTOPページ
    public function admins()
    { 
      $admins = Admin::paginate(10);

        return view('admins.admins', [
            'admins' => $admins,
        ]);
    }
    
    
    public function talks($id)
    { 
      
      $talks = Talk::all();
      
      
            
        return view('admins.talks', [
            'talks' => $talks,
        ]);
    }
    
     public function talksstore(Request $request)
    {
        
        $this->validate($request, [
            'is_user' => 'required',   
            'comment' => 'required',
        ]);
        
        $talk = new Talk;
        $talk->is_user = $request->is_user;
        $talk->comment = $request->comment;
       
        $talk->user_id = \Auth::user()->id;
        $talk->admin_id = \Auth::guard('admin')->user()->id;
        
        $talk->is_user = false;
        
        $talk->save();
        
        

        return redirect()->route('talks', [$talk]);
    }
}