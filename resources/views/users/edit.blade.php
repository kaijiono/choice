@extends('layouts.app')

@section('content')

    <h1>id: {{ $user->id }} のプロフィール編集ページ</h1>
    

 <div class="row">
        <div class="col-xs-6">

            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

             <div class="form-group">
                {!! Form::label('alias', 'ニックネーム:') !!}
                {!! Form::text('alias', null, ['class' => 'form-control']) !!}</br>
                
            </div>
            
            <div class="form-group">
                {!! Form::label('residential_district', '住所１:') !!}
                {!! Form::text('residential_district', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('address', '住所２（丁目以降（チョイスするまで表示されない）:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('phone', '連絡先（チョイスするまで表示されない:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            
            <div class="form-group">
                {!! Form::label('line', 'LINE ID（チョイスするまで表示されない:') !!}
                {!! Form::text('line', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('family_structure', '家族構成:') !!}
                {!! Form::text('family_structure', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('language', '使用言語:') !!}
                {!! Form::text('language', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
            <div class="form-group">
                {!! Form::label('birthplace', '出身地:') !!}
                {!! Form::text('birthplace', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('hobby', '趣味:') !!}
                {!! Form::text('hobby', null, ['class' => 'form-control']) !!}</br>
            </div>
            
        </div>　　
</div>
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection