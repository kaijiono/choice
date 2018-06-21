@extends('layouts.app')

@section('content')
    
    <div class="row">
        
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $admins->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($admins->email, 500) }}" alt="ビジネスパーソン写真">
                </div>
            </div>
        </aside>
        
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('admins/' . $admins->id) ? 'active' : '' }}"><a href="#">TimeLine</a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
            <h1>ビジネスパーソンマイページ</h1>
            
            {!! link_to_route('admin::admins.create', 'プロフィール作成') !!}
         </div>
         <h1>基本プロフィール</h1>
                    @if (count($admins) > 0)
                       <ul>
                       
            
                           <table class="table table-striped table-bordered">
                           <tr>
                               <th class="text-center">ニックネーム</th>
                               <th class="text-center">{{ $admins->alias }}</th>
                           </tr>
            
                           <tr>
                               <th class="text-center">会社名（チョイスするまで表示されない)</th>
                               <th class="text-center">{{ $admins->residential_district }}</th>
                           </tr>
            
                        <tr>
                            <th class="text-center">会社住所（チョイスするまで表示されない)</th>
                            <th class="text-center">{{ $admins->address }}</th>
                        </tr>
            
                        <tr>
                             <th class="text-center">連絡先（チョイスするまで表示されない)</th>
                             <th class="text-center">{{ $admins->phone }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">会社電話番号（チョイスするまで表示されない</th>
                            <th class="text-center">{{ $admins->company_phone }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">LINE ID（チョイスするまで表示されない</th>
                            <th class="text-center">{{ $admins->line }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">勤続年数</th>
                            <th class="text-center">{{ $admins->service_years}}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">保有資格</th>
                            <th class="text-center">{{ $admins->qualification }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">使用言語</th>
                            <th class="text-center">{{ $admins->language }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">家族構成</th>
                            <th class="text-center">{{ $admins->family_structure }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">居住地区</th>
                            <th class="text-center">{{ $admins->residential_district }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">出身地</th>
                            <th class="text-center">{{ $admins->birthplace }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">趣味</th>
                            <th class="text-center">{{ $admins->hobby }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">経歴</th>
                            <th class="text-center">{{ $admins->career }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">メッセージ</th>
                            <th class="text-center">{{ $admins->message }}</th>
                        </tr>
            
                        
                        {!! Form::close() !!}
                    @endif
         
    </div>                    
@endsection