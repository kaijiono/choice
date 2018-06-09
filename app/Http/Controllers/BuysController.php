<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buy;  //追加

class BuysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでbuys/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        $buys = Buy::all();

        return view('buys.index', [
            'buys' => $buys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでbuys/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
       $buy = new Buy;

        return view('buys.create', [
            'buy' => $buy,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // postでbuys/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $this->validate($request, [
            'property_classification' => 'max:191',
            'repayment_amount' => 'integer|max:191',
            'budget' => 'max:191',
            'area' => 'max:191',
            'floor_plan' => 'max:191',
            'savings' => 'integer|max:191',
            'car' => 'max:191',
            'debt' => 'integer|max:191',
            'service_years' => 'integer|max:191',
            'office' => 'max:191',
            'household_income' => 'integer|max:191',
            'income' => 'integer|max:191',
        ]);
        $buy = new Buy;
        $buy->property_classification = $request->property_classification;
        $buy->repayment_amount = $request->repayment_amount;
        $buy->budget = $request->budget;
        $buy->area = $request->area;
        $buy->floor_plan = $request->floor_plan;
        $buy->savings = $request->savings;
        $buy->car = $request->car;
        $buy->debt = $request->debt;
        $buy->service_years = $request->service_years;
        $buy->office = $request->office;
        $buy->household_income = $request->household_income;
        $buy->income = $request->income;  
        $buy->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでbuys/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $buy = Buy::find($id);

        return view('buys.show', [
            'buy' => $buy,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでbuys/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $buy = Buy::find($id);

        return view('buys.edit', [
            'buy' => $buy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでbuys/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'property_classification' => 'max:191',
            'repayment_amount' => 'integer|max:191',
            'budget' => 'max:191',
            'area' => 'max:191',
            'floor_plan' => 'max:191',
            'savings' => 'integer|max:191',
            'car' => 'max:191',
            'debt' => 'integer|max:191',
            'service_years' => 'integer|max:191',
            'office' => 'max:191',
            'household_income' => 'integer|max:191',
            'income' => 'integer|max:191',
        ]);
        
        $buy = Buy::find($id);
        $buy->property_classification = $request->property_classification;
        $buy->repayment_amount = $request->repayment_amount;
        $buy->budget = $request->budget;
        $buy->area = $request->area;
        $buy->floor_plan = $request->floor_plan;
        $buy->savings = $request->savings;
        $buy->car = $request->car;
        $buy->debt = $request->debt;
        $buy->service_years = $request->service_years;
        $buy->office = $request->office;
        $buy->household_income = $request->household_income;
        $buy->income = $request->income;  
        $buy->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでbuys/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $buy = Buy::find($id);
        $buy->delete();

        return redirect('/');
    }
}
