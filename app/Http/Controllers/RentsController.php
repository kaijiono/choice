<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rent;  //追加

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでrents/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        $rents = Rent::all();

        return view('rents.index', [
            'rents' => $rents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでrents/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $rent = new Rent;

        return view('rents.create', [
            'rent' => $rent,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      // putまたはpatchでsrents/idにアクセスされた場合の「更新処理」
    public function store(Request $request)
    {
        $this->validate($request, [
            'income' => 'integer',
            'household_income' => 'integer',
            'office' => 'max:191',
            'years_service' => 'numeric|',
            'car' => 'max:191',
            'area' => 'max:191',
            'preferred_rent' => 'numeric',
            'distance' => 'max:191',
            'property_classification' => 'max:191',
            'floor_plan' => 'integer',
        ]);
        $rent = new Rent;
        $rent->income = $request->income;
        $rent->household_income = $request->household_income;
        $rent->office = $request->office;
        $rent->years_service = $request->years_service;
        $rent->car = $request->car;
        $rent->area = $request->area;
        $rent->preferred_rent = $request->preferred_rent;
        $rent->distance = $request->distance;
        $rent->property_classification = $request->property_classification;
        $rent->floor_plan = $request->floor_plan;
        $rent->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでrents/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $rent = Rent::find($id);

        return view('rents.show', [
            'rent' => $rent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでrents/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $rent = rent::find($id);

        return view('rents.edit', [
            'rent' => $rent,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでrents/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'income' => 'integer',
            'household_income' => 'integer',
            'office' => 'max:191',
            'years_service' => 'numeric|',
            'car' => 'max:191',
            'area' => 'max:191',
            'preferred_rent' => 'numeric',
            'distance' => 'max:191',
            'property_classification' => 'max:191',
            'floor_plan' => 'integer',
        ]);
        $rent = Rent::find($id);
        $rent->income = $request->income;
        $rent->household_income = $request->household_income;
        $rent->office = $request->office;
        $rent->years_service = $request->years_service;
        $rent->car = $request->car;
        $rent->area = $request->area;
        $rent->preferred_rent = $request->preferred_rent;
        $rent->distance = $request->distance;
        $rent->property_classification = $request->property_classification;
        $rent->floor_plan = $request->floor_plan;
        $rent->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // deleteでRents/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
       $rent = Rent::find($id);
       $rent->delete();

       return redirect('/');
    }
}
