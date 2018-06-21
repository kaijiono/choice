@extends('layouts.app')

@section('content')
    
    <div class="row">
        
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $admin->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($admin->email, 500) }}" alt="ビジネスパーソン写真">
                </div>
            </div>
        </aside>
        
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('admins/' . $admin->id) ? 'active' : '' }}"><a href="{{ route('adimns.show', ['id' => $admin->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
            <h1>ビジネスパーソンマイページ</h1>
            @if (Auth::admins()->id == $admin->id)
                    {!! Form::open(['route' => 'microposts.store']) !!}
                        <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
            @endif
                        {!! link_to_route('admins.index', '  仮）基本プロフィール  ', null, ['class' => 'btn btn-lg btn-primary']) !!}
         </div>
         
         
    </div>                    
@endsection