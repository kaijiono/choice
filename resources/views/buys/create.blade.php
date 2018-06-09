@extends('layouts.app')

@section('content')

    <h1>買う相談のプロフィール</h1>
        
        

 <div class="row">
        <div class="col-xs-6">
        {!! Form::model($buy, ['route' => 'buys.store']) !!}
        
            <div class="form-group">
                {!! Form::label('income', '年収:') !!}
                {!! Form::text('income', null, ['class' => 'form-control']) !!}万円</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('household_income', '世帯年収:') !!}
                {!! Form::text('household_income', null, ['class' => 'form-control']) !!}万円</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('office', '勤務先:') !!}
                {!! Form::text('office', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            
            <div class="form-group">
                {!! Form::label('service_years', '勤続年数:') !!}
                {!! Form::text('service_years', null, ['class' => 'form-control']) !!}年</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('debt', '現在の借入金総額:') !!}
                {!! Form::text('debt', null, ['class' => 'form-control']) !!}万円</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('floor_plan', '希望間取り:') !!}
                {!! Form::text('floor_plan', null, ['class' => 'form-control']) !!}LDK以上</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('area', '希望エリア:') !!}
                {!! Form::text('area', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('area', '希望ご予算:') !!}
                {!! Form::text('budget', null, ['class' => 'form-control']) !!}万円まで</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('distance', '希望駅距離:') !!}
                ��歩{!! Form::text('distance', null, ['class' => 'form-control']) !!}分くらいまで</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('repayment_amount', '希望ご返済額:') !!}
               月々{!! Form::text('repayment_amount', null, ['class' => 'form-control']) !!}万円まで</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('area', '希望エリア:') !!}
                {!! Form::text('area', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('property_classification', '物件区分:') !!}
                {!! Form::text('property_classification', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
            
        </div>
</div>
            {!! Form::submit('投稿') !!}

        {!! Form::close() !!}
    


@endsection