@extends('layouts.app')

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
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
            <h1>マイページ</h1>
            @if (Auth::user()->id == $user->id)
                    {!! Form::open(['route' => 'microposts.store']) !!}
                        <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                        
                        {!! link_to_route('users.index', '  仮）基本プロフィール  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
                        {!! link_to_route('buys.index', '  仮）かうプロフィール  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
                        {!! link_to_route('sells.index', '  仮）うるプロフィール  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
                        {!! link_to_route('rents.index', '  仮）賃貸プロフィール  ', null, ['class' => 'btn btn-lg btn-primary']) !!}</br>
                        </br>
                        
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
                        <h1>基本プロフィール</h1>
                    @if (count($user) > 0)
                       <ul>
                       
            
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
                    @endif
            
            @endif
                    
            @if (count($microposts) > 0)
                @include('microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection