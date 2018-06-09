<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sell;  //追加

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでsells/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
         $sells = Sell::all();

        return view('sells.index', [
            'sells' => $sells,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでsells/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $sell = new sell;

        return view('sells.create', [
            'sell' => $sell,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // postでsells/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'number' => 'integer|max:191',
            'area' => 'max:191',
            'property_classification' => 'max:191',
            'land_area' => 'numeric|max:191',
            'building_area' => 'numeric|max:191',
            'age' => 'numeric|max:191',
            'floor_plan' => 'max:191',
            'desired_time' => 'max:191',
            'nominee_number' => 'integer|max:191',
            'remaining_debt' => 'integer|max:191',
            'replace' => 'max:191',
        ]);
        $sell = new Sell;
        $sell->number = $request->number;
        $sell->area = $request->area;
        $sell->property_classification = $request->property_classification;
        $sell->land_area = $request->land_area;
        $sell->building_area = $request->building_area;
        $sell->age = $request->age;
        $sell->floor_plan = $request->floor_plan;
        $sell->desired_time = $request->desired_time;
        $sell->nominee_number = $request->nominee_number;
        $sell->remaining_debt = $request->remaining_debt;
        $sell->replace = $request->replace;
        $sell->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでsells/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $sell = Sell::find($id);

        return view('sells.show', [
            'sell' => $sell,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでsells/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $sell = Sell::find($id);

        return view('sells.edit', [
            'sell' => $sell,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでsells/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'number' => 'integer|max:191',
            'area' => 'max:191',
            'property_classification' => 'max:191',
            'land_area' => 'numeric|max:191',
            'building_area' => 'numeric|max:191',
            'age' => 'numeric|max:191',
            'floor_plan' => 'max:191',
            'desired_time' => 'max:191',
            'nominee_number' => 'integer|max:191',
            'remaining_debt' => 'integer|max:191',
            'replace' => 'max:191',
        ]);
        $sell = Sell::find($id);
        $sell->number = $request->number;
        $sell->area = $request->area;
        $sell->property_classification = $request->property_classification;
        $sell->land_area = $request->land_area;
        $sell->building_area = $request->building_area;
        $sell->age = $request->age;
        $sell->floor_plan = $request->floor_plan;
        $sell->desired_time = $request->desired_time;
        $sell->nominee_number = $request->nominee_number;
        $sell->remaining_debt = $request->remaining_debt;
        $sell->replace = $request->replace;
        $sell->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // deleteでsells/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $sell = Sell::find($id);
        $sell->delete();

        return redirect('/');
    }
}
