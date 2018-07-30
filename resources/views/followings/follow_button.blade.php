
        @if(Auth::user()->is_following($admin->id))
            {!! Form::open(['route' => ['followings.unfollow', $admin->id], 'method' => 'delete']) !!}
            
                {!! Form::submit('Unfollow', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
        @else
            {!! Form::open(['route' => ['followings.follow', $admin->id]]) !!}
             
                {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
        @endif