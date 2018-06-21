@extends('layouts.app')


@section('content')
    @if (Auth::id() != $admin->id)
        @if (Auth::user()->is_following($admin->id))
            {!! Form::open(['route' => ['user.unfollow', $admin->id], 'method' => 'delete']) !!}
                {!! Form::submit('Unfollow', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $admin->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
@endsection
