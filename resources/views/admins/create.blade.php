@extends('layouts.app')

@section('content')

    <h1>プロフィール</h1>
        
        

 <div class="row">
        <div class="col-xs-6">
        {!! Form::model($admin, ['route' => 'admin::admins.store']) !!}
        
           
            <div class="form-group">
                {!! Form::label('alias', 'ニックネーム:') !!}
                {!! Form::text('alias', null, ['class' => 'form-control']) !!}</br>
                
            </div>
            
            <div class="form-group">
                {!! Form::label('company', '会社名（チョイスするまで表示されない):') !!}
                {!! Form::text('company', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('address', '会社住所（チョイスするまで表示されない）:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('phone', '連絡先（チョイスするまで表示されない):') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('company_phone', '会社電話番号（チョイスするまで表示されない:') !!}
                {!! Form::text('company_phone', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('line', 'LINE ID（チョイスするまで表示されない:') !!}
                {!! Form::text('line', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('service_years', '勤続年数:') !!}
                {!! Form::text('service_years', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('qualification', '保有資格:') !!}
                {!! Form::text('qualification', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('language', '使用言語:') !!}
                {!! Form::text('language', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('family_structure', '家族構成:') !!}
                {!! Form::text('family_structure', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('residential_district', '居住地区:') !!}
                {!! Form::text('residential_district', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
            <div class="form-group">
                {!! Form::label('birthplace', '出身地:') !!}
                {!! Form::text('birthplace', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('hobby', '趣味:') !!}
                {!! Form::text('hobby', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('career', '経歴:') !!}
                {!! Form::text('career', null, ['class' => 'form-control']) !!}</br>
            </div>
            
            <div class="form-group">
                {!! Form::label('message', 'メッセージ:') !!}
                {!! Form::text('message', null, ['class' => 'form-control']) !!}</br>
            </div>
        　　
            
        </div>
</div>
            {!! Form::submit('投稿') !!}

        {!! Form::close() !!}
    


@endsection