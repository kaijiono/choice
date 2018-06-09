@extends('layouts.app')

@section('content')

    <h1>購入相談者プロフィール</h1>
    @if (count($buys) > 0)
        <ul>
            @foreach ($buys as $buy)
            
            <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">年収</th>
                <th class="text-center">{{ $buy->income }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">世帯年収</th>
                <th class="text-center">{{ $buy->household_income }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">勤務先</th>
                <th class="text-center">{{ $buy->office }}</th>
            </tr>
            
            <tr>
                <th class="text-center">勤続年数</th>
                <th class="text-center">{{ $buy->service_years }}年</th>
            </tr>
            
            <tr>
                <th class="text-center">現在のお借入れ総額</th>
                <th class="text-center">{{ $buy->debt }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">車庫（車台数）</th>
                <th class="text-center">{{ $buy->car }}台</th>
            </tr>
            
            <tr>
                <th class="text-center">自己資金</th>
                <th class="text-center">{{ $buy->savings }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">希望間取り</th>
                <th class="text-center">{{ $buy->floor_plan}}LDK～</th>
            </tr>
            
            <tr>
                <th class="text-center">希望エリア</th>
                <th class="text-center">{{ $buy->area}}LDK～</th>
            </tr>
            
            <tr>
                <th class="text-center">希望予算</th>
                <th class="text-center">{{ $buy->budget}}万円まで</th>
            </tr>
            
            <tr>
                <th class="text-center">駅距離</th>
                <th class="text-center">徒歩{{ $buy->distance}}分まで</th>
            </tr>
            
            <tr>
                <th class="text-center">住宅ローン返済</th>
                <th class="text-center">月々{{ $buy->repayment_amount}}万円まで</th>
            </tr>
            
            <tr>
                <th class="text-center">希望物件区分</th>
                <th class="text-center">{{ $buy->property_classification}}</th>
            </tr>
                
            @endforeach
        </ul>
    @endif
     
    @foreach ($buys as $buy)
                {!! link_to_route('buys.show',  'プロフィール更新', $buy->id) !!}</br>
    @endforeach
    
    {!! link_to_route('buys.create', '買う相談のプロフィール作成') !!}

@endsection