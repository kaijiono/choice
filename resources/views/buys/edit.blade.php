@extends('layouts.app')

@section('content')

    <h1>id: {{ $buy->id }} のプロフィール編集ページ</h1>

    {!! Form::model($buy, ['route' => ['buys.update', $buy->id], 'method' => 'put']) !!}

        {!! Form::label('income', '年収:') !!}
        {!! Form::text('income')!!}万円</br>
        
        
        {!! Form::label('household_income', '世帯年収:') !!}
        {!! Form::text('household_income') !!}万円</br>
        
        {!! Form::label('office', '勤務先:') !!}
        {!! Form::text('office') !!}</br>
        
        {!! Form::label('service_years', '勤続年数:') !!}
        {!! Form::text('service_years') !!}年</br>
        
        {!! Form::label('debt', '現在の借入金総額:') !!}
        {!! Form::text('debt') !!}万円</br>
        
        {!! Form::label('floor_plan', '希望間取り:') !!}
        {!! Form::text('floor_plan') !!}LDK</br>
        
        {!! Form::label('area', '希望エリア:') !!}
        {!! Form::text('area') !!}</br>
        
        {!! Form::label('budget', '希望ご予算:') !!}
        {!! Form::text('budget') !!}万円</br>
        
        {!! Form::label('distance', '希望駅距離:') !!}
        {!! Form::text('distance') !!}分</br>
        
        {!! Form::label('repayment_amount', '希望ご返済額:') !!}
        月々{!! Form::text('repayment_amount') !!}万円</br>
        
        {!! Form::label('property_classification', '物件区分:') !!}
        {!! Form::text('property_classification') !!}</br>

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection