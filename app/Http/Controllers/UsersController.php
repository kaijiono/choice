<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでusers/にアクセスされた場合の「一覧表示処理」
    
    public function index()
    {
         $users = User::all();
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでuserss/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $user = new User;

        return view('users.create', [
            'user' => $user,
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // postでusers/にアクセスされた場合の「新規登録処理」
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
        ]);
        $user = new User;
        $user->alias = $request->alias;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->line = $request->line;
        $user->family_structure = $request->family_structure;
        $user->language = $request->language;
        $user->residential_district = $request->residential_district;
        $user->birthplace = $request->birthplace;
        $user->hobby = $request->hobby;
        
        $user->save();

        return view('users.index', [
            'users' => $users,
        ]);
    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでusers/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', [
            'user' => $user,
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでusers/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', [
            'user' => $user,
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
        ]);
        $user = User::find($id);
        $user->alias = $request->alias;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->line = $request->line;
        $user->family_structure = $request->family_structure;
        $user->language = $request->language;
        $user->residential_district = $request->residential_district;
        $user->birthplace = $request->birthplace;
        $user->hobby = $request->hobby;
        
        $user->save();

        return view('users.index', [
            'users' => $users,
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
        $user = User::find($id);
        $user->delete();

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    
}