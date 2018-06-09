@extends('layouts.app')

@section('content')

    <h1>売却相談者プロフィール</h1>
    @if (count($sells) > 0)
        <ul>
            @foreach ($sells as $sell)
            
            <table class="table table-striped table-bordered">
            <tr>
                <th class="text-center">売却予定物件数</th>
                <th class="text-center">{{ $sell->number }}棟</th>
            </tr>
            
            <tr>
                <th class="text-center">売却物件住所（代表物件）</th>
                <th class="text-center">{{ $sell->area }}</th>
            </tr>
            
            <tr>
                <th class="text-center">売却物件区分（代表物件）</th>
                <th class="text-center">{{ $sell->property_classification }}</th>
            </tr>
            
            <tr>
                <th class="text-center">土地面積</th>
                <th class="text-center">{{ $sell->land_area }}㎡</th>
            </tr>
            
            <tr>
                <th class="text-center">建物面積</th>
                <th class="text-center">{{ $sell->building_area }}㎡</th>
            </tr>
            
            <tr>
                <th class="text-center">築年数</th>
                <th class="text-center">{{ $sell->age }}年</th>
            </tr>
            
            <tr>
                <th class="text-center">間取り</th>
                <th class="text-center">{{ $sell->floor_plan }}まで</th>
            </tr>
            
            <tr>
                <th class="text-center">売却希望時期</th>
                <th class="text-center">{{ $sell->desired_time}}頃までに</th>
            </tr>
            
            <tr>
                <th class="text-center">希望エリア</th>
                <th class="text-center">{{ $sell->area}}</th>
            </tr>
            
            <tr>
                <th class="text-center">名義人の人数</th>
                <th class="text-center">{{ $sell->nominee_number}}人</th>
            </tr>
            
            <tr>
                <th class="text-center">ローン残債</th>
                <th class="text-center">徒歩{{ $sell->remaining_debt}}万円</th>
            </tr>
            
            <tr>
                <th class="text-center">買い替えの有無</th>
                <th class="text-center">{{ $sell->replace}}</th>
            </tr>
            
                
            @endforeach
        </ul>
    @endif
     
    @foreach ($sells as $sell)
                {!! link_to_route('sells.show',  'プロフィール更新', $sell->id) !!}</br>
    @endforeach
    
    {!! link_to_route('sells.create', 'うりたい人のプロフィール作成') !!}

@endsection