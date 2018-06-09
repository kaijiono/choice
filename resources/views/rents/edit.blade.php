@extends('layouts.app')

@section('content')

    <h1>id: {{ $rent->id }} のプロフィール編集ページ</h1>
    

 <div class="row">
        <div class="col-xs-6">

    {!! Form::model($rent, ['route' => ['rents.update', $rent->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('income', '年収:') !!}
                {!! Form::text('income', null, ['class' => 'form-control']) !!}万円</br>
                
            </div>
            
            <div class="form-group">
                {!! Form::label('household_income', '世帯年収:') !!}
                {!! Form::text('household_income', null, ['class' => 'form-control']) !!}万円</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('office', 'お勤め先:') !!}
                {!! Form::text('office', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            
            <div class="form-group">
                {!! Form::label('years_service', '勤続年数:') !!}
                {!! Form::text('years_service', null, ['class' => 'form-control']) !!}年</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('car', '必要車庫数:') !!}
                {!! Form::text('car', null, ['class' => 'form-control']) !!}台分</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('area', '希望エリア:') !!}
                {!! Form::text('area', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('preferred_rent', '希望家賃:') !!}
                {!! Form::text('preferred_rent', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('distance', '希望駅距離:') !!}
                {!! Form::text('distance', null, ['class' => 'form-control']) !!}分まで</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('property_classification', '物件の種類（戸建てマンションなど）:') !!}
                {!! Form::text('property_classification', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('floor_plan', '希望間取り:') !!}
               月々{!! Form::text('floor_plan', null, ['class' => 'form-control']) !!}LDK〜</br>
            </div>
            
        </div>　　
</div>
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection