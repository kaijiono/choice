@extends('layouts.app')

@section('content')

    <h1>id = {{ $user->id }} のプロフィール編集ページ</h1>

    <p>{{ $user->content }}</p>

    {!! link_to_route('users.edit', 'このプロフィールを編集', ['id' => $user->id]) !!}
    
    {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}

@endsection