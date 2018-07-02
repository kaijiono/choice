{{-- userが閲覧する為のshow(詳細ページ) --}}  
@extends('layouts.app')

@section('content')
    
        <div class="row">
        
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">営業パーソン{{ $admin->name }}さんのプロフィール</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($admin->email, 500) }}" alt="ビジネスパーソン写真">
                </div>
            </div>
        </aside>
                       
                  
                <table class="table table-striped table-bordered">
                           
                        <tr>
                           <th class="text-center">ニックネーム</th>
                           <th class="text-center">{{ $admin->alias }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">会社名（チョイスするまで表示されない)</th>
                            <th class="text-center">{{ $admin->residential_district }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">会社住所（チョイスするまで表示されない)</th>
                            <th class="text-center">{{ $admin->address }}</th>
                        </tr>
            
                        <tr>
                             <th class="text-center">連絡先（チョイスするまで表示されない)</th>
                             <th class="text-center">{{ $admin->phone }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">会社電話番号（チョイスするまで表示されない</th>
                            <th class="text-center">{{ $admin->company_phone }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">LINE ID（チョイスするまで表示されない</th>
                            <th class="text-center">{{ $admin->line }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">勤続年数</th>
                            <th class="text-center">{{ $admin->service_years}}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">保有資格</th>
                            <th class="text-center">{{ $admin->qualification }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">使用言語</th>
                            <th class="text-center">{{ $admin->language }}</th>
                        </tr>
            
                        <tr>
                            <th class="text-center">家族構成</th>
                            <th class="text-center">{{ $admin->family_structure }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">居住地区</th>
                            <th class="text-center">{{ $admin->residential_district }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">出身地</th>
                            <th class="text-center">{{ $admin->birthplace }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">趣味</th>
                            <th class="text-center">{{ $admin->hobby }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">経歴</th>
                            <th class="text-center">{{ $admin->career }}</th>
                        </tr>
                        
                        <tr>
                            <th class="text-center">メッセージ</th>
                            <th class="text-center">{{ $admin->message }}</th>
                        </tr>
            
                </table>
                        
                @include('talks.follow_button', ['admin' => $admin])
         
    </div>
@endsection