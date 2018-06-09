@extends('layouts.app')

@section('content')

    <h1>売る相談のプロフィール</h1>
        
        

 <div class="row">
        <div class="col-xs-6">
        {!! Form::model($sell, ['route' => 'sells.store']) !!}
        
           
            <div class="form-group">
                {!! Form::label('number', '売却予定物件数:') !!}
                {!! Form::text('number', null, ['class' => 'form-control']) !!}棟</br>
                
            </div>
            
            <div class="form-group">
                {!! Form::label('area', '売却物件住所（代表物件）:') !!}
                {!! Form::text('area', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('property_classification', '売却物件区分（代表物件）:') !!}
                {!! Form::text('property_classification', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            
            <div class="form-group">
                {!! Form::label('land_area', '土地面積:') !!}
                {!! Form::text('land_area', null, ['class' => 'form-control']) !!}㎡</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('building_area', '建物面積:') !!}
                {!! Form::text('building_area', null, ['class' => 'form-control']) !!}㎡</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('age', '築年数:') !!}
                {!! Form::text('age', null, ['class' => 'form-control']) !!}年</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('floor_plan', '間取り:') !!}
                {!! Form::text('floor_plan', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('desired_time', '売却希望時期:') !!}
                {!! Form::text('desired_time', null, ['class' => 'form-control']) !!}頃まで</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('nominee_number', '名義人数:') !!}
                ��歩{!! Form::text('nominee_number', null, ['class' => 'form-control']) !!}人</br>
            </div>
        　　
        　　<div class="form-group">
                {!! Form::label('remaining_debt', 'ローン残債:') !!}
               月々{!! Form::text('remaining_debt', null, ['class' => 'form-control']) !!}万円</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('replace', '買い替えの有無:') !!}
                {!! Form::text('replace', null, ['class' => 'form-control']) !!}</br>
            </div>
            
        </div>
</div>
            {!! Form::submit('投稿') !!}

        {!! Form::close() !!}
    


@endsection