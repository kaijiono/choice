@extends('layouts.app')

@section('content')

    <h1>賃貸相談者プロフィール</h1>
    @if (count($rents) > 0)
        <ul>
            @foreach ($rents as $rent)
            
            <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">年収</th>
                <th class="text-center">{{ $rent->income }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">世帯年収</th>
                <th class="text-center">{{ $rent->household_income }}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">勤務先</th>
                <th class="text-center">{{ $rent->office }}</th>
            </tr>
            
            <tr>
                <th class="text-center">勤務年数</th>
                <th class="text-center">{{ $rent->years_service }}年</th>
            </tr>
            
            <tr>
                <th class="text-center">車</th>
                <th class="text-center">{{ $rent->car }}台</th>
            </tr>
            
            <tr>
                <th class="text-center">希望エリア</th>
                <th class="text-center">{{ $rent->area }}</th>
            </tr>
            
            <tr>
                <th class="text-center">希望家賃</th>
                <th class="text-center">{{ $rent->preferred_rent }}万円まで</th>
            </tr>
            
            <tr>
                <th class="text-center">売却駅距離</th>
                <th class="text-center">{{ $rent->distance}}分まで</th>
            </tr>
            
            <tr>
                <th class="text-center">物件区分（戸建てマンションなど</th>
                <th class="text-center">{{ $rent->property_classification}}</th>
            </tr>
            
            <tr>
                <th class="text-center">希望間取り</th>
                <th class="text-center">{{ $rent->floor_plan}}LDK〜</th>
            </tr>
           
                
            @endforeach
        </ul>
    @endif
     
    @foreach ($rents as $rent)
                {!! link_to_route('rents.show',  'プロフィール更新', $rent->id) !!}</br>
    @endforeach
    
    {!! link_to_route('rents.create', '借りたい人のプロフィール作成') !!}

@endsection