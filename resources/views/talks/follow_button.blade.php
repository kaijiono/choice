@extends('layouts.app')
//adminフォローボタン ビューに渡す　User が Admin をフォロー　Admin の詳細ページ

@section('content')
    
    @if (Auth::id() != $admin->id)
        @if (Auth::user()->is_following($admin->id))
            {!! Form::open(['route' => ['talks.unfollow', $admin->id], 'method' => 'delete']) !!}
                {!! Form::submit('Unfollow', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
    
    @else
        {!! Form::open(['route' => ['talks.follow', $admin->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
@endsection

