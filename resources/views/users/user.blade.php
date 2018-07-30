{{-- admin用showサブビュー --}}
@extends('layouts.app_admin')

@section('content')
    <div class="row">
        
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
         
                        
            <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
               
                        <h1>基本プロフィール</h1>
                    @if (count($user) > 0)
                       
                       
            
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="text-center">ニックネーム</th>
                                <th class="text-center">{{ $user->alias }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">住所１</th>
                                <th class="text-center">{{ $user->residential_district }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">住所２</th>
                                <th class="text-center">{{ $user->address }}</th>
                            </tr>
            
                            <tr>
                                 <th class="text-center">電話番号</th>
                                 <th class="text-center">{{ $user->phone }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">LINE</th>
                                <th class="text-center">{{ $user->line }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">家族構成</th>
                                <th class="text-center">{{ $user->family_structure }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">使用言語</th>
                                <th class="text-center">{{ $user->language }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">居住地区</th>
                                <th class="text-center">{{ $user->residential_district }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">出身地</th>
                                <th class="text-center">{{ $user->birthplace }}</th>
                            </tr>
            
                            <tr>
                                <th class="text-center">趣味</th>
                                <th class="text-center">{{ $user->hobby }}</th>
                            </tr>
                        
                            {!! Form::close() !!}
                        </table>
                   
                        @endif
            
           
            
            @if (count($messages) > 0)
                @include('messages.messages', ['messages' => $messages])
            @endif
            
        </div>
        
    </div>
@endsection